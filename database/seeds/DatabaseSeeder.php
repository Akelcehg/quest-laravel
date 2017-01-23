<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //php artisan migrate:refresh --seed
        //$this->call(UsersTableSeeder::class);
        //factory(\App\User::class,10)->create();
        //factory(\App\Quest::class,6)->create();

        $this->call(UserSeeder::class);
        $this->call(QuestSeeder::class);
        $this->call(MessageSeeder::class);
    }
}
