<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Student extends Model
{
    use HasFactory;

    public $table = 'students';
    protected $fillable = ['name' , 'last_name' , 'birthdate' , 'address'];

    public function registrations (): HasMany
    {
        return $this-> hasMany (Registration::class, 'student_id');
    }
}
