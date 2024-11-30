<?php

namespace Database\Seeders;

use App\Models\Job;
use App\Models\Tag;
use Illuminate\Database\Seeder;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tags = Tag::factory(20)->create();
        Job::factory(50)->hasAttached($tags->random(3))->create();
    }
}
