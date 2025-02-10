<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;


class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $table = 'tm_user';
    protected $primaryKey = 'user_id';
    protected $fillable = [
        'user_nama',
        'user_pass',
        'user_hak',
        'user_sts'
    ];

    public function getAuthPassword()
    {
        return $this->user_pass;
    }
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
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected $casts = [
    ];
    protected function casts(): array
    {
        return [
           'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
   }
}
