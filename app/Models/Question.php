<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $fillable = [
        'faculty_id',
        'topic_name',
        'question_text',
        'options',
        'correct_answer',
        'is_approved',
    ];

    public function faculty(){
        return $this->belongsTo(Faculty::class);
    }

    public function topic(){
        return $this->belongsTo(Topic::class);
    }
}
