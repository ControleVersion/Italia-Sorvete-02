<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        // $this->call(UserTableSeeder::class);
        //criando o primeiro usuari
        factory('App\User')->create(
            [
                'name'=> 'robertomelo',
                'email' => 'robertomelo822@gmail.com',
                'password' => bcrypt(123456)

            ]
        );

        //criando o primeiro cliente
        factory('App\Cliente')->create(
            [
                'codigo_cliente' => '123456789',
                'nome'=> 'Roberto Soares',
                'email' => 'robertomelo822@gmail.com',
                'cpf' => '093.230.177-02'

            ]
        );

        $this->call(UserTableSeeder::class);

        Model::reguard();
    }
}
