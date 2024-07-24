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
        'user_id',
        'subject_id',
        'tos_id'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function subject(){
        return $this->belongsTo(Subject::class);
    
    }

    public function tableOfSpecification(){
        return $this->belongsTo(TableOfSpecification::class, 'tos_id');
    }

    public function courses(){
        return $this->belongsToMany(ClassModel::class, 'class_ldp')->withPivot('subject_id')->withTimestamps();
    }

    public function topics(){
        return $this->hasMany(Topic::class);
    }
}
