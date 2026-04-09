<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'fullname',
        'document',
        'gender',
        'birthdate',
        'photo',
        'phone',
        'email',
        'password',
        'active',
        'role',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
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

    /**
     * Ruta relativa bajo public/ para asset(): prioriza images/users/ (CRUD) y cae a images/ (factory antigua).
     */
    public function userPhotoAssetPath(): string
    {
        $name = $this->photo ?? '';

        $demoPhotos = [
            'johnw@mail.com' => 'johnw.png',
            'larac@mail.com' => 'larac.png',
        ];
        $email = strtolower((string) ($this->email ?? ''));
        if (isset($demoPhotos[$email])) {
            $demoFile = $demoPhotos[$email];
            $demoRelative = 'images/users/'.$demoFile;
            $missingOrDefault = $name === '' || $name === 'no-photo.png'
                || (! file_exists(public_path('images/users/'.$name)) && ! file_exists(public_path('images/'.$name)));
            if ($missingOrDefault && file_exists(public_path($demoRelative))) {
                return $demoRelative;
            }
        }

        if ($name === '') {
            return 'images/users/no-photo.png';
        }
        if (file_exists(public_path('images/users/'.$name))) {
            return 'images/users/'.$name;
        }
        if (file_exists(public_path('images/'.$name))) {
            return 'images/'.$name;
        }

        return 'images/users/'.$name;
    }

    /** Ruta absoluta del archivo de foto (PDF/Excel). */
    public function userPhotoAbsolutePath(): string
    {
        return public_path($this->userPhotoAssetPath());
    }

    // Relationships
    // User has many adoptions
    public function adoptions()
    {
        return $this->hasMany(Adoption::class);
    }

    // Search by Scope
    public function scopenames($users, $q)
    {
        if (trim($q)) {
            $users->where('fullname', 'LIKE', "%$q%")
                ->orWhere('email', 'LIKE', "%$q%");
        }
    }
}
