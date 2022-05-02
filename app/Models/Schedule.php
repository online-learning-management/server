<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    protected $fillable = [
        'schedule',
        'document',
        'class_id',
    ];

    // many to one relationship with Classes
    public function classes()
    {
        return $this->belongsTo(Classes::class, 'class_id', 'class_id');
    }
}
