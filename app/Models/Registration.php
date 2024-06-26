<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Registration extends Model
{
    use HasFactory;

    public $table = 'registrations';
    protected $fillable = ['student_id' , 'course_id' , 'registration_date'];

}
