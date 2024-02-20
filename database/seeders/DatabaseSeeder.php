<?php


use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
  
    public function run()
    {
        \App\Models\comic::factory(20)->count(100)->create();

    }
}
