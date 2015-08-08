<?php

use Illuminate\Database\Seeder;

class InterestsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('interests')->insert([
      	[
          'name' => 'air sports'
      	],
      	[
          'name' => 'archery'
      	],
      	[
      		'name' => 'backpacking'
      	],
      	[
          'name' => 'badminton'
      	],
      	[
          'name' => 'basketball'
      	],
      	[
      		'name' => 'bodybuilding'
      	],
      	[
          'name' => 'brazilian jiu-jitsu'
      	],
      	[
          'name' => 'cycling'
      	],
      	[
      		'name' => 'driving'
      	],
      	[
          'name' => 'fishing'
      	],
      	[
          'name' => 'gardening'
      	],
      	[
      		'name' => 'hiking'
      	],
      	[
          'name' => 'horseback riding'
      	],
      	[
          'name' => 'jogging'
      	],
      	[
      		'name' => 'kayaking'
      	],
      	[
          'name' => 'kite flying'
      	],
      	[
          'name' => 'kite surfing'
      	],
      	[
      		'name' => 'mountain biking'
      	],
      	[
          'name' => 'mountaineering'
      	],
      	[
          'name' => 'paintball'
      	],
      	[
      		'name' => 'photography'
      	],
      	[
          'name' => 'rafting'
      	],
      	[
          'name' => 'rappelling'
      	],
      	[
      		'name' => 'rock climbing'
      	],
      	[
          'name' => 'roller skating'
      	],
      	[
          'name' => 'rugby'
      	],
      	[
      		'name' => 'running'
      	],
      	[
          'name' => 'sailing'
      	],
      	[
      		'name' => 'scuba diving'
      	],
      	[
          'name' => 'shooting'
      	],
      	[
          'name' => 'shopping'
      	],
      	[
      		'name' => 'skateboarding'
      	],
      	[
          'name' => 'skiing'
      	],
      	[
          'name' => 'skydiving'
      	],
      	[
      		'name' => 'surfing'
      	],
      	[
          'name' => 'swimming'
      	],
      	[
      		'name' => 'taekwondo'
      	],
      	[
          'name' => 'vehicle restoration'
      	],
      	[
          'name' => 'water sports'
      	]
      ]);
    }
}
