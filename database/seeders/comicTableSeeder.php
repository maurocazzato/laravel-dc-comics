<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\models\comic;

class comicTableSeeder extends Seeder
{

    public function run()
    {
        \App\Models\comic::factory()->count(100)->create();
    }
}
