<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'subject_name',
        'specialty_id',
        'credit_id'
    ];

    // many to one relationship with Classes
    public function classes()
    {
        return $this->hasMany(Classes::class);
    }
}
