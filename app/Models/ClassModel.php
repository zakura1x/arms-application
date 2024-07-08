<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClassModel extends Model
{
    use HasFactory;

    protected $table = 'classes';

    protected $fillable = [
        'name',
        'code',
        'class_school_year',
        'background_image',
    ];

    // One-to-Many relationship with ClassCode
    public function classCodes()
    {
        return $this->hasMany(ClassCode::class, 'class_id');
    }

    // Many-to-Many relationship with Faculty through the faculty_class pivot table
    public function faculties()
    {
        return $this->belongsToMany(Faculty::class, 'faculty_class');
    }

    // One-to-Many relationship with Student
    public function students()
    {
        return $this->hasMany(Student::class, 'class_id');
    }

    // Many-to-Many relationship with LearningDevelopmentPlan through the class_ldp pivot table
    public function learningDevelopmentPlans()
    {
        return $this->belongsToMany(LearningDevelopmentPlan::class, 'class_ldp')
                    ->withPivot('subject_id')
                    ->withTimestamps();
    }
}
