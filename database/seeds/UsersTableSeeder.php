<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker= Faker\Factory::create();

    	$limit = 50;

    	for ($i = 0; $i < $limit; $i++) {


    	DB::table('personnes')->insert([ //,
    		'name' => $faker->name,
    		'surname' => $faker->lastname,
    		'email' => $faker->unique()->email,
    		'birthday' => $faker->date($format = 'Y-m-d', $max = 'now'),
    		]);
    	}		
    }
}
