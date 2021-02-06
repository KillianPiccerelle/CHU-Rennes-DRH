<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;

class ServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $service = new Service();
        $service->libelle = "Cellule Infrastructure";
        $service->save();

        $service = new Service();
        $service->libelle = "Cellule Application";
        $service->save();

        $service = new Service();
        $service->libelle = "Cellule HelpDesk";
        $service->save();

        $service = new Service();
        $service->libelle = "Cellule Recherche et Pédagogie";
        $service->save();

    }
}
