<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    use HasFactory;

    protected $fillable = [
        'link',
        'document'
    ];

    // many to one relationship with Classes
    public function classes()
    {
        return $this->belongsToMany(Classes::class);
    }
}
