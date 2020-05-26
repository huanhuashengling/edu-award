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
        $this->call(UserSeeder::class);
        $this->call(AwardSeeder::class);
        $this->call(AwardTypeSeeder::class);
        $this->call(AwardLevelSeeder::class);
        $this->call(AwardRankSeeder::class);
        $this->call(SubjectSeeder::class);
        $this->call(SchoolSectionSeeder::class);
    }
}
