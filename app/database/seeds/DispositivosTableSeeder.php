<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class DispositivosTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 20) as $index)
		{
			Dispositivo::create([
                'nombre' => $faker->name,
                'serial' => $faker->unique()->md5,
                'potenciaMax' => $faker->randomFloat(NULL, 0.8, 1.5),
                'potenciaMin' => $faker->randomFloat(NULL, 0, 0.8)
			]);
		}
	}

}