<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LearningDevelopmentPlan extends Model
{
    use HasFactory;

    protected $fillable = [
        'plan_name',
        'is_approved',
        'faculty_id',
        'subject_id'
    ];

    public function faculty(){
        return $this->belongsTo(Faculty::class);
    }

    public function subject(){
        return $this->belongsTo(Subject::class);
    
    }

    public function courses(){
        return $this->belongsToMany(ClassModel::class, 'class_ldp')->withPivot('subject_id')->withTimestamps();
    }

    public function topics(){
        return $this->hasMany(Topic::class);
    }
}
