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
        factory(App\Models\User::class, 5)->create();
        factory(App\Models\Poll::class, 10)->create();
        factory(App\Models\Question::class, 50)->create();
        factory(App\Models\Answer::class, 500)->create();
    }
}
