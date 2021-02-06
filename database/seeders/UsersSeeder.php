<?php

namespace Database\Seeders;

use App\Models\Service;
use App\Models\Statut;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Ramsey\Uuid\Type\Integer;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0; $i < 5; $i++) {
            $user = new User();
            $user->name = str::random(10);
            $user->surname = Str::random(10);
            $user->email = $user->name . '@gmail.com';
            $user->password = Hash::make('password');
            $user->statut_id = Statut::all()->random()->id;
            $user->service_id = Service::all()->random()->id;
            $user->save();
        }
    }
}
