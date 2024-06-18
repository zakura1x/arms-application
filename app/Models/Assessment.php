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
        'description',
        'total_items',
        'approval',
        'questions',
        'duration',
        'due_date'
    ];

    protected $casts = [
        'questions' => 'json', // Cast questions attribute to JSON
        'due_date' => 'date', // Cast due_date attribute to date
    ];

    public function faculty()
    {
        return $this->belongsTo(Faculty::class);
    }

    public function assessmentByTopics()
    {
        return $this->hasMany(AssessmentByTopic::class);
    }
}
