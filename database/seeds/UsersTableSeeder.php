<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Davi V Carvalho',
            'email' => 'davi.carvalho@theweb.systems',
            'cpf' => '11247748669',
            'birthday' => '1992/11/04',
            'address' => 'R dos Limoeiros, 66',
            'cep' => '35171204',
            'cel-number' => '3187105486',
            'password' => bcrypt('secret'),
        ]);
        factory(App\User::class, 20)->create();
    }
}
