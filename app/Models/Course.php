<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'class_name',
        'class_code',
        'class_school_year',
    ];

    public function classCodes(){
        return $this->hasMany(ClassCode::class);
    }

    public function faculties(){
        return $this->belongsToMany(Faculty::class, 'faculty_class');
    }

    public function students(){
        return $this->hasMany(Student::class, 'class_id');
    }

    public function learningDevelopmentPlans(){
        return $this->belongsToMany(LearningDevelopmentPlan::class, 'class_ldp')->withPivot('subject_id')->withTimestamps();
    }
}
