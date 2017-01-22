<?php

use Illuminate\Database\Seeder;

class QuestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Quest::class, 6)->create()->each(function ($q) {
            $q->images()->save(factory(App\QuestImage::class)->make());
        });
    }
}
