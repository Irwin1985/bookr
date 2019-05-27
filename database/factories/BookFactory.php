<?php
	$factory->define(App\Book::class, function(Faker\Generator $faker){
		return [
			'title' => $faker->word,
			'description' => $faker->text,
			'author' => $faker->name
		];
	});
?>