<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 
        'description'];

    public function faculties(){
        return $this->belongsToMany(Faculty::class,'faculty_subject');
    }

    public function learningDevelopmentPlans(){
        return $this->hasMany(LearningDevelopmentPlan::class);
    }

}
