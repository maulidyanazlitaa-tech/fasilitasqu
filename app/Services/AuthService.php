<?php

namespace App\Services;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthService
{
    /**
     * Memeriksa email dan password pengguna.
     */
    public function authenticate(array $credentials): ?User
    {
        $user = User::where('email', $credentials['email'])
            ->first();

        if (!$user) {
            return null;
        }

        if (!Hash::check($credentials['password'], $user->password)) {
            return null;
        }

        return $user;
    }

    /**
     * Membuat token API pengguna.
     */
    public function createToken(User $user): string
    {
        return $user->createToken('fasilitasqu-api')
            ->plainTextToken;
    }

    /**
     * Menghapus token yang sedang digunakan.
     */
    public function revokeCurrentToken(User $user): void
    {
        $token = $user->currentAccessToken();

        if ($token instanceof \Laravel\Sanctum\PersonalAccessToken) {
            $token->delete();
        }
    }
}
