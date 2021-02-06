<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = new Role();
        $roles->libelle = "DRH" ;
        $roles->save();

        $roles = new Role();
        $roles->libelle = "RH" ;
        $roles->save();

        $roles = new Role();
        $roles->libelle = "Collaborateur" ;
        $roles->save();

    }
}
