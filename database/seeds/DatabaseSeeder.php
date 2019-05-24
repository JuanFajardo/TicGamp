<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        \DB::table('users')->insert([
        'id'=>'1',

        'username'=>'bett0',
        'password'=> bcrypt('123'),
        'unidad'=>'Unidad Sistemas',

        'nombre'=>'Juan',
        'paterno'=>'Fajardo',
        'materno'=>'Canaza',
        'ci'=>'6612330',
        'imei'=>'000000',

        'cargo'=>'Programador',
        'grupo'=>'1'
        ]);
    }
}
