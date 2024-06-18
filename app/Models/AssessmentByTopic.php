<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssessmentByTopic extends Model
{
    use HasFactory;

    protected $fillable = [
      'assessment_id',
      'module_id',
      'name',
      'difficulty',
      'number_of_items',
      'topic_covered',
      'questions',
  ];

  // Define relationships
  public function assessment()
  {
      return $this->belongsTo(Assessment::class);
  }

  public function module()
  {
      return $this->belongsTo(Module::class);
  }
}
