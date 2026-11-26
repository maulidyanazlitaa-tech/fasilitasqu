<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\User;
use App\Services\AuthService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class WebAuthController extends Controller
{
    public function __construct(private AuthService $authService)
    {}

    /**
     * Menampilkan halaman registrasi masyarakat.
     */
    public function showRegister()
    {
        return view('auth.register');
    }

    /**
     * Memproses registrasi masyarakat.
     */
    public function register(RegisterRequest $request)
    {
        $this->authService->register($request->validated());

        return redirect()
            ->route('login')
            ->with('success', 'Registrasi berhasil. Silakan masuk dengan akun Anda.');
    }

    /**
     * Menampilkan halaman login.
     */
    public function showLogin()
    {
        return view('auth.login');
    }

    /**
     * Memproses login dan memeriksa role akun.
     */
    public function login(Request $request)
    {
        $validated = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required', 'string'],
            'remember' => ['nullable', 'boolean'],
            'login_as' => [
                'nullable',
                'in:masyarakat,admin,petugas,koordinator',
            ],
        ]);

        // Cari akun berdasarkan email.
        $user = User::where('email', $validated['email'])->first();

        // Periksa email dan password.
        if (!$user || !Hash::check($validated['password'], $user->password)) {
            return back()
                ->withErrors([
                    'email' => 'Email atau password salah.',
                ])
                ->onlyInput('email');
        }

        // Jika pengguna memilih tombol role tertentu,
        // pastikan role tersebut sesuai dengan role akun di database.
        $requestedRole = $validated['login_as'] ?? null;

        if ($requestedRole && $user->role !== $requestedRole) {
            return back()
                ->withErrors([
                    'email' => 'Akun ini tidak terdaftar sebagai '
                        .$this->roleLabel($requestedRole)
                        .'. Silakan pilih peran yang sesuai dengan akun Anda.',
                ])
                ->onlyInput('email');
        }

        // Login menggunakan akun yang sudah diverifikasi.
        Auth::login($user, $request->boolean('remember'));

        // Regenerasi session untuk keamanan.
        $request->session()->regenerate();

        // Dashboard ditentukan berdasarkan role akun sebenarnya.
        return redirect()->intended(route('dashboard'));
    }

    /**
     * Mengubah kode role menjadi nama yang mudah dibaca.
     */
    private function roleLabel(string $role): string
    {
        return match ($role) {
            'masyarakat' => 'Pelapor',
            'admin' => 'Admin',
            'petugas' => 'Petugas',
            'koordinator' => 'Koordinator',
            default => 'peran yang dipilih',
        };
    }

    /**
     * Memproses logout.
     */
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()
            ->route('login')
            ->with('success', 'Logout berhasil.');
    }
}
