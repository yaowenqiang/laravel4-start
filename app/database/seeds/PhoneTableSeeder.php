<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class PhoneTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 10) as $index)
		{
			Phone::create([
                'user_id'=>$faker->randomNumber(),
                'phone'=>$faker->phoneNumber()
			]);
		}
	}

}
