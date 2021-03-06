<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class CredentialsTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 10) as $index)
		{
			Credential::create([
                'service_name' => $faker->name,
                'organization_id' => $index,
                'user_name' => $faker->userName,
                'password' => $faker->password,
                'comments' => $faker->text
			]);
		}
	}

}