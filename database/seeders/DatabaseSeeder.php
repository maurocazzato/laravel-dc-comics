<?php


use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
  
    public function run()
    {
        \App\Models\comic::factory()->count(100)->create();

    }
}
