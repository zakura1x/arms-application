<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assessment extends Model
{
    use HasFactory;

    protected $fillable = [
        'faculty_id',
        'name',
    ];

    public function questions()
    {
        return $this->belongsToMany(Question::class, 'assessment_question');
    }

}
