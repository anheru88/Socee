<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder {

	public function run()
	{
        DB::table('users')->delete();

        $usuario = array(
            ['name' => 'Angel', 'lastName' => 'Jimenez', 'username' => 'admin', 'email' => 'admin@hotmail.com', 'password' => Hash::make('admin'), 'company' => 'Digital Caribe', 'created_at' =>  new DateTime(), 'updated_at' =>  new DateTime()],
            ['name' => 'Luis', 'lastName' => 'Giovanny', 'username' => 'usuario', 'email' => 'user@hotmail.com', 'password' => Hash::make('usuario'), 'company' => 'Soucee', 'created_at' =>  new DateTime(), 'updated_at' =>  new DateTime()],
            ['name' => 'Jose', 'lastName' => 'Marrugo', 'username' => 'jmarrugo', 'email' => 'jmarrugo@hotmail.com', 'password' => Hash::make('jmarrugo'), 'company' => 'Soucee', 'created_at' =>  new DateTime(), 'updated_at' =>  new DateTime()]
        );

        // Uncomment the below to run the seeder
        DB::table('users')->insert($usuario);
	}

}