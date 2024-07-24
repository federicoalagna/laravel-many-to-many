<?php

use Illuminate\Database\Seeder;
use App\Models\Project;

class ProjectSeeder extends Seeder
{
    public function run()
    {
        Project::create([
            'titolo' => 'Progetto 1',
            'descrizione' => 'Descrizione del progetto 1',
        ]);

        Project::create([
            'titolo' => 'Progetto 2',
            'descrizione' => 'Descrizione del progetto 2',
        ]);
    }
}
