<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\User::create([
            'name'=>'mohamed ibrahim',
            'email'=>'mohamed@larravel.com',
            'password'=>Hash::make('lool')
        ]);
        \App\User::create([
         'name'=>'ali ibrahim',
         'email'=>'ali@larravel.com',
         'password'=>Hash::make('hima')
     ]);
    }
}
