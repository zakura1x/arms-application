<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClassCode extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'is_active'
    ];

    public function course(){
        return $this->belongsTo(Course::class);
    }
}
