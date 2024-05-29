<?php

namespace Database\Seeders;

use App\Models\Subject;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Mockery\Matcher\Subset;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $subjects = [
            # 1
            [
                'name' => 'Teoría General de Sistemas' , 
                'description' => 'Introducción a los principios fundamentales de los sistemas y sus componentes.' , 
                'credits' => 2    
            ],
            # 2
            [
                'name' => 'Algoritmos 2' , 
                'description' => 'Estudio avanzado de algoritmos como ordenamiento, búsqueda, y grafos.' , 
                'credits' => 4      
            ],
            # 3
            [
                'name' => 'Lenguaje de Programación 1' ,
                'description' => 'Introducción a un lenguaje de programación con enfoque en conceptos y técnicas básicas.' ,
                'credits' => 3
            ]
        ];

        Subject::insert($subjects);

    }
}
