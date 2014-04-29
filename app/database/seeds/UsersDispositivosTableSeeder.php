<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class UsersDispositivosTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

        $dispositivos = Dispositivo::lists('id');
        $users = User::lists('id');

		foreach(range(1, 10) as $index)
		{
                DB::table('dispositivo_user')->insert([
                   'dispositivo_id' => $faker->randomElement($dispositivos),
                   'user_id' => $faker->randomElement($users),
                   'created_at' =>  new DateTime(),
                   'updated_at' =>  new DateTime()
                ]);
		}
	}

}