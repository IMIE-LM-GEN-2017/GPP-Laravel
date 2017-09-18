<?php

use Illuminate\Database\Seeder;

class AppDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'username' => 'Admin',
            'email' => 'admin@example.com',
            'password' => bcrypt('123'),
            'remember_token' => str_random(10),
            'role' => 'admin',
            'is_teacher' => 0,
            'first_name' => 'Arnold',
            'last_name' => 'l\'Administrateur',
        ]);

        DB::table('centers')->insert([
            'name' => 'IMIE Le Mans',
            'address' => 'Rue de la Sarthe',
            'zip' => '72000',
            'city' => 'Le Mans',
        ]);

        DB::table('centers')->insert([
            'name' => 'IMIE Angers',
            'address' => 'Rue du château',
            'zip' => '49000',
            'city' => 'Angers',
        ]);
    }
}