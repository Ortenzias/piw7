<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

use Illuminate\Database\Eloquent\Casts\Attribute;
// https://www.youtube.com/watch?v=0st6AA_7fBA&list=PLZ2ovOgdI-kWWS9aq8mfUDkJRfYib-SvF&index=16

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
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
    ];

    // https://www.youtube.com/watch?v=0st6AA_7fBA&list=PLZ2ovOgdI-kWWS9aq8mfUDkJRfYib-SvF&index=16
    protected function name(): Attribute{
        return new Attribute(
            get: fn($value) => ucwords($value),

            set: fn($value) => strtolower($value)
        );
    }
}
