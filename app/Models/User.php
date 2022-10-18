<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Laratrust\Traits\LaratrustUserTrait;

class User extends Authenticatable
{
    use LaratrustUserTrait;
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'role_id',
        'password',
        'phone',
        'dob',
        'address',
        'gender',

        //teachers
        'tfaculty',
        'teaching1',
        'teaching2',
        'teaching3',
        'teaching4',
        'teaching5',
        'classincharge',

        //students
        'classin',
        'faculty',
        'parent_name',
        'parent_email',
        'parent_phone',
        'subject1',
        'subject2',
        'subject3',
        'subject4',
        'subject5',
        'subject6',
        'subject7',
        'subject8',
        'subject9',
        'subject10',
        

        

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

        'tfaculty'=> 'array',
        'teaching1' => 'array',
        'teaching2' => 'array',
        'teaching3' => 'array',
        'teaching4' => 'array',
        'teaching5' => 'array',
        'classincharge' => 'array',


        'classin' => 'array',
        'faculty' => 'array',
        'subject1' => 'array',
        'subject2' => 'array',
        'subject3' => 'array',
        'subject4' => 'array',
        'subject5' => 'array',
        'subject6' => 'array',
        'subject7' => 'array',
        'subject8' => 'array',
        'subject9' => 'array',
        'subject10' => 'array',
    ];
}
