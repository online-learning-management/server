<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{
    use HasFactory;

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = 'class_id';

    protected $fillable = [
        'class_id',
        'start_date',
        'max_number_students',
        'current_number_students',
        'schedules',
        'description',
        'image',

        'user_id',
        'subject_id',
    ];

    // one to many relationship with StudentClasses
    public function studentClasses()
    {
        return $this->hasMany(StudentClass::class, 'class_id', 'class_id');
    }

    // many to one relationship with Teacher
    public function teacher()
    {
        return $this->belongsTo(Teacher::class, 'user_id', 'user_id');
    }

    // many to one relationship with Subject
    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }
}
