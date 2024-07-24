<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TopicDifficultyTaxonomy extends Model
{
    use HasFactory;

    protected $fillable = [
        'topic_id',
        'difficulty',
        'taxonomy',
        'item_count',
    ];

    protected $table = 'topic_difficulty_taxonomy';

    public function topic(){
        return $this->belongsTo(Topic::class, 'topic_id');
    }


}
