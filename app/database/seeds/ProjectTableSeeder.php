<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class ProjectTableSeeder extends Seeder {

	public function run()
	{
		$resume = Project::resume();
		

	}

}