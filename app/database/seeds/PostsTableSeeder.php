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
                //php artisan migrate:refresh --seed
                'title'=>$faker->text,
                //'title'=>$faker->sentence(),
                'body'=>$faker->text,
                //'body'=>$faker->paragraph(),
                //'body'=>$faker->realText(500),
                //'user_id'=>rand(1,2),
                'user_id'=>$faker->randomNumber(),
			]);
		}
	}

}
