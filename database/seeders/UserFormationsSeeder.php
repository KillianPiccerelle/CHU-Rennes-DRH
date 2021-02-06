<?php

namespace Database\Seeders;

use App\Models\Formation;
use App\Models\Role;
use App\Models\User;
use App\Models\userFormation;
use Illuminate\Database\Seeder;

class UserFormationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userFormations = new UserFormation();
        $userFormations->user_id = User::all()->random()->id;
        $userFormations->formation_id = Formation::all()->random()->id;
        $userFormations->save();

    }
}
