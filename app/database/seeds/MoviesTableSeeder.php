<?php

class MoviesTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		DB::table('movies')->truncate();

		$movies = [
			[
			'title' => 'Blade Runner',
			'year' => '1982',
			'directors' => 'Ridley Scott',
			'watched_at' => '2014-01-05',
			'rating' => '4',
			],
			[
			'title' => 'Star Trek Into Darkness',
			'year' => '2013',
			'directors' => 'J. J. Abrams',
			'watched_at' => '2014-01-05',
			'rating' => '4',
			],
			[
			'title' => 'The Lord of the Rings: The Fellowship of the Ring',
			'year' => '2001',
			'directors' => 'Peter Jackson',
			'watched_at' => '2014-01-11',
			'rating' => '5',
			],
			[
			'title' => 'The Lord of the Rings: The Two Towers',
			'year' => '2002',
			'directors' => 'Peter Jackson',
			'watched_at' => '2014-01-12',
			'rating' => '5',
			],
			[
			'title' => 'The Lord of the Rings: The Return of the King',
			'year' => '2003',
			'directors' => 'Peter Jackson',
			'watched_at' => '2014-01-12',
			'rating' => '5',
			]
		];

		// Uncomment the below to run the seeder
		DB::table('movies')->insert($movies);
	}

}
