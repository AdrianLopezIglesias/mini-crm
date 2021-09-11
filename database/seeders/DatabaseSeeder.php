<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        foreach (range(1, 50) as $index) {
            DB::table('empresas')->insert([
                'nombre' => $faker->firstname,
                'email' => $faker->email,
                'logotipo' => "/storage/".$faker->numberBetween($min = 1, $max = 5) . ".jpg",
            ]);
        }

        foreach (range(1, 50) as $index) {
            DB::table('empleados')->insert([
                'nombre' => $faker->firstname,
                'apellido' => $faker->lastName,
                'telefono' => $faker->phoneNumber,
                'empresa' => $faker->numberBetween($min = 1, $max = 50),
                'email' => $faker->email,
            ]);
        }
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('password'),
        ]);
    }
}
