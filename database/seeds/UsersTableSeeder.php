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

    	/* Creates 100 users of type access */
    	factory(App\User::class, 'user', 100)->create();
    	/*
    	->each(function($u) {
    		//$u->posts()->save(factory(App\Post::class)->make());
    	});
    	*/

    }
}
