<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $courses = [
            'name' => 'Ingeneria de sistemas' , 
            'description' => 'El curso de Ingeniería de Sistemas proporciona a los estudiantes los conocimientos y 
                              habilidades necesarios para diseñar, implementar y gestionar sistemas de información complejos.' ,
            'start_date' => '2024-09-01 08:00:00' ,
            'end_date' => '2025-06-30 17:00:00'
        ];

        Course::insert($courses);
    }
}
