<?php

namespace Database\Seeders;
use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Project::create([ 
            'title' => 'Portfolio ESGI', 
            'description' => 'Site portfolio pour présenter mes projets étudiants', 
            'technologies' => ['Laravel', 'Tailwind CSS', 'Alpine.js'], 
            'status' => 'completed', 
            'start_date' => '2024-01-15', 
        ]);

        Project::create([ 
            'title' => 'API REST Laravel', 
            'description' => 'API RESTful pour une application mobile de gestion de tâches', 
            'technologies' => ['Laravel', 'MySQL', 'JWT'], 
            'status' => 'in_progress', 'start_date' => 
            '2024-02-01', 
        ]);

        Project::create([ 
            'title' => 'Application Todo List', 
            'description' => 'Gestionnaire de tâches avec interface moderne et réactive', 
            'technologies' => ['Laravel', 'Vue.js', 'PostgreSQL'], 
            'status' => 'draft', 
            'start_date' => null, 
        ]);
    }
}
