<?php

namespace Database\Seeders;

use App\Models\Job;
use App\Models\Tag;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Job::factory(50)->hasAttached(
            Tag::factory(3)
        )->create(new Sequence(
            [
                'featured' => true,
            ],
            [
                'featured' => false
            ]
        ));
    }
}
