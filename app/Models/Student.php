<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    /** @use HasFactory<\Database\Factories\StudentFactory> */
    use HasFactory;

    protected $fillable = [
        'name',
        'age',
        'gender',
<<<<<<< HEAD
        'address'
=======
        'address',
>>>>>>> d6ec1b1 (Activity 3: Unfinish)
    ];
}
