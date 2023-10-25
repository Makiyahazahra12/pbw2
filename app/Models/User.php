<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

// Nama : Makiyah Azahra
// Kelas : D3IF46-03
// NIM : 6706220059

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

        /**
         * The attributes that are mass assignable.
         * @var array<int, string>
         */
    protected $fillable = [
        'username',
        'fullname',
        'email',
        'password',
        'address',
        'phoneNumber',
        'birthdate',
        'religion',
        'gender'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function setPasswordAttribute($password)
    {
        if ($password) {
            $this->attributes['password'] = bcrypt($password);
        }
    }
}