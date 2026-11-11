<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Database\Factories\UserFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    /** @use HasFactory<UserFactory> */
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    // Laporan yang dibuat pengguna
    public function reports()
    {
        return $this->hasMany(Laporan::class);
    }

    // Laporan yang ditugaskan kepada petugas
    public function assignedReports()
    {
        return $this->hasMany(Laporan::class, 'assigned_to');
    }

    // Laporan yang diverifikasi admin
    public function verifiedReports()
    {
        return $this->hasMany(Laporan::class, 'verified_by');
    }

    // Riwayat perubahan status yang dilakukan pengguna
    public function statusLogs()
    {
        return $this->hasMany(ReportStatusLog::class, 'changed_by');
    }

    // Memeriksa role pengguna
    public function hasRole(string|array $roles): bool
    {
        return in_array($this->role, (array) $roles, true);
    }
}
