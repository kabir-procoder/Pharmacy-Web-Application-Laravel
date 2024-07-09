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

    static public function getSingle($id)
    {
        return self::find($id);
    }

    static public function getAllRecord()
    {
        $return = self::select('users.*')
                ->where('isDelete', '=', 0)
                ->orderBy('id', 'desc')
                ->paginate(7);
                return $return;
    }

    static public function getAllTrashRecord()
    {
        $return = self::select('users.*')
                ->where('isDelete', '=', 1)
                ->orderBy('id', 'desc')
                ->paginate(7);
                return $return;
    }


}
