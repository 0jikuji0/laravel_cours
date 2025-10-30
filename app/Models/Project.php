<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

class Project extends Model
{
    public function getAll(): array | null
    {
        return [
            0 => [
                'title' => 'Application laravel',
                'technologies' => ['Laravel', 'AlpineJS', ' TailwindCSS'],
            ],

            1 => [
                'title' => 'To do list',
                'technologies' => ['Laravel', 'Vuejs', ' TailwindCSS'],
            ],
        ];
    }

    public function retrieve(int $id): array | null
    {

        $projects = $this->getAll();

        $project = Arr::get($projects, $id, [
            'title' => 'Projet non trouvé',
            'technologies' => [],
        ]);

        return $project;
    }
}