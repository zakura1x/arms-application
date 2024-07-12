<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assessment extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'name',
        'description',
        'is_approved',
        'is_published',
        'published_at',
        'status',
        'class_id',
    ];

    public function questions()
    {
        return $this->belongsToMany(Question::class, 'assessment_question');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }



}
