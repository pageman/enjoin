<?php

use Illuminate\Database\Seeder;
use DB;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
		{
		    factory('App\User', 50)->create();
		    foreach (range(1,50) as $i) {
		    		DB::table('user_interests')->insert([
		    			[
		    				"user_id" => $i,
		    				"interest_id" => 1
		    			],
		    			[
		    				"user_id" => $i,
		    				"interest_id" => 2
		    			],
		    			[
		    				"user_id" => $i,
		    				"interest_id" => 3
		    			],
		    			[
		    				"user_id" => $i,
		    				"interest_id" => 4
		    			],
		    			[
		    				"user_id" => $i,
		    				"interest_id" => 5
		    			]
		    		]);
		    }
		}
}
