<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\RoleUser;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class RolesUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0; $i < 5; $i++) {
            $rolesUsers = new RoleUser();
            $rolesUsers->user_id = User::all()->random()->id;
            $rolesUsers->role_id = Role::all()->random()->id;
            $rolesUsers->save();
        }
    }
}
