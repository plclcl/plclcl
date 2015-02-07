<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();


		$this->call('DocenteTableSeeder');
		$this->command->info('se crea cuenta de administracion');


		// $this->call('UserTableSeeder');

	}



}
