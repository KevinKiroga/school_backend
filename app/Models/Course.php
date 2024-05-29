<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Course extends Model
{
    use HasFactory;

    public $table = 'courses';
    protected $fillable = ['name', 'description', 'start_date', 'end_date'];

    public function registrations (): HasMany
    {
        return $this-> hasMany (Registration::class, 'course_id');
    }

    public function subjects (): BelongsToMany
    {
        return $this-> belongsToMany (Subject::class, 'course_subject');
    }
}
