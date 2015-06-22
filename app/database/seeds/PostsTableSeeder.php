<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class PostsTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 10) as $index)
		{
			Posts::create([
                'title'=>$faker->text,
                'body'=>$faker->text,
                'user_id'=>$faker->randomNumber(),
			]);
		}
	}

}
