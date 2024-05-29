<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Subject extends Model
{
    use HasFactory;

    public $table = 'subjects';
    public $timestamps = false;
    protected $fillable = ['name' , 'description' , 'credits'];

    public function courses (): BelongsToMany
    {
        return $this-> belongsToMany (Course::class, 'course_subject');
    }

}
