<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Eloquent::unguard();

        //disable foreign key check for this connection before running seeders
        //DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        //factory(App\User::class, 20)->create();


        factory(App\User::class, 100)->create()->each(function($user) {
             factory(App\UserProfile::class)->create(['user_profiles_id' => $user->id]);
             factory(App\Address::class)->create(['user_profiles_id' => $user->id]);


        // supposed to only apply to a single connection and reset it's self
        // but I like to explicitly undo what I've done for clarity
        //DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        }

    }
}
