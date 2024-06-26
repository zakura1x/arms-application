<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClassCode extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'is_active',
        'class_id'
    
    ];

    public function course(){
        return $this->belongsTo(ClassModel::class, 'class_id');
    }
}
