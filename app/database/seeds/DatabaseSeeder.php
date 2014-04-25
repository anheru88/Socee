<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
		Eloquent::unguard();
        User::truncate();
        Dispositivo::truncate();
        DB::table('dispositivo_user')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1');

		// $this->call('UserTableSeeder');
        $this->call('UsersTableSeeder');
        $this->call('DispositivosTableSeeder');
        $this->call('UsersDispositivosTableSeeder');

	}

}
