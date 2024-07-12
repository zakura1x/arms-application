<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $fillable = [
        'question',
        'options',
        'correct_answer',
        'is_approved',
        'module_id',
        'attachment_id',
        'user_id',
        'points',
        'difficulty_level',
    ];

    public function module(){
        return $this->belongsTo(Module::class);
    }

    public function attachment(){
        return $this->belongsTo(Attachment::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function assessments(){
        return $this->belongsToMany(Assessment::class, 'assessment_question');
    }


}
