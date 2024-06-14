<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    use HasFactory;

    protected $fillable = [
        'module_name',
        'module_description',
        'topic_id'
    
    ];

    public function topic(){
        return $this->belongsTo(Topic::class);
    }

    public function attachments(){
        return $this->hasMany(Attachment::class);
    }

    public function questions(){
        return $this->hasMany(Question::class);
    }
}
