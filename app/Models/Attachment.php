<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attachment extends Model
{
    use HasFactory;

    protected $fillable = [
        'attachment_path',
        'attachment_name',
        'attachment_type',
        'module_id',
        'question_id'
    ];

    public function module(){
        return $this->hasOne(Module::class);
    }

    public function questions(){
        return $this->hasMany(Question::class);
    }
}
