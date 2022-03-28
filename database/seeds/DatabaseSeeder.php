<?php

use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        
        factory(App\Match::class,10)->create();
        factory(App\Address::class,10)->create();
        factory(App\Card::class,10)->create();
        factory(App\Official::class,10)->create();
        factory(App\Team::class,10)->create();
        factory(App\Stage::class,10)->create();
        
    }
}
