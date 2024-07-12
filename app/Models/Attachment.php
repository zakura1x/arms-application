<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attachment extends Model
{
    use HasFactory;

    protected $fillable = [
        'module_id',
        'attachment_path',
        'attachment_name',
        'attachment_type',
    ];

    public function module(){
        return $this->belongsTo(Module::class);
    }

    public function questions(){
        return $this->hasMany(Question::class);
    }
}
