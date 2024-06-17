<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    use HasFactory;

    protected $fillable =[
        'topic_name',
        'topic_description',
        'learning_development_plan_id'
    ];

    public function questions()
    {
        return $this->hasMany(Question::class);
    }

    public function learningDevelopmentPlan(){
        return $this->belongsTo(LearningDevelopmentPlan::class);
    }

    public function modules(){
        return $this->hasMany(Module::class);
    }

}
