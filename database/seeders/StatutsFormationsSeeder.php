<?php

namespace Database\Seeders;

use App\Models\StatutFormation;
use Illuminate\Database\Seeder;

class StatutsFormationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $statutFormation = new StatutFormation();
        $statutFormation->libelle = "Validé";
        $statutFormation->save();

        $statutFormation = new StatutFormation();
        $statutFormation->libelle = "Non-Validé";
        $statutFormation->save();

        $statutFormation = new StatutFormation();
        $statutFormation->libelle = "En attente";
        $statutFormation->save();
    }
}
