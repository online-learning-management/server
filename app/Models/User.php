<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    protected $primaryKey = 'user_id';

    protected $fillable = [
        'full_name',
        'email',
        'date_of_birth',
        'gender',
        'address',
        'avatar',
        'username',
        'password',
        'role_id'
    ];

    protected $hidden = [
        'password'
    ];

    // one to one relationship with Student and Teacher
    public function student()
    {
        return $this->hasOne(Student::class, 'user_id', 'user_id');
    }

    public function teacher()
    {
        return $this->hasOne(Teacher::class, 'user_id', 'user_id');
    }

    public function role()
    {
        return $this->belongsTo(Role::class, 'role_id', 'role_id');
    }
}
