<?php

namespace Database\Seeders;

// database/seeders/DatabaseSeeder.php

use Illuminate\Database\Seeder;
use App\Models\BreastCancer;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        BreastCancer::truncate();
        BreastCancer::factory()->count(100)->create();
    }
}
