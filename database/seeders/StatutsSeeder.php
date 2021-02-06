<?php

namespace Database\Seeders;

use App\Models\Statut;
use Illuminate\Database\Seeder;

class StatutsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $statut = new Statut();
        $statut->libelle = "Confirmé";
        $statut->save();

        $statut = new Statut();
        $statut->libelle = "Contractuel";
        $statut->save();

        $statut = new Statut();
        $statut->libelle = "Hospitalo-Univ";
        $statut->save();

        $statut = new Statut();
        $statut->libelle = "Chercheur associé";
        $statut->save();
    }
}
