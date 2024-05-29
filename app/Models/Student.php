<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'first_name',
        'middle_name',
        'last_name',
        'id_number',
        'email',
        'phone_number',
        'birth_date',
        'gender',
        'address',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    protected $table = 'students';
}
