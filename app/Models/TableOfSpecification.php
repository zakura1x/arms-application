<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TableOfSpecification extends Model
{
    use HasFactory;

    protected $fillable = [
        'subject_id',
    ];


    public function subject(){
        return $this->belongsTo(Subject::class);
    }

    public function learningDevelopmentPlan(){
        return $this->hasOne(LearningDevelopmentPlan::class, 'tos_id');
    }

}
