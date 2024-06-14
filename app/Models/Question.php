<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $fillable = [
        'question',
        'options',
        'correct_answer',
        'is_approved',
        'module_id',
        'attachment_id',
        'faculty_id'
    ];

    public function module(){
        return $this->belongsTo(Module::class);
    }

    public function attachment(){
        return $this->belongsTo(Attachment::class);
    }

    public function faculty(){
        return $this->belongsTo(Faculty::class);
    }

}
