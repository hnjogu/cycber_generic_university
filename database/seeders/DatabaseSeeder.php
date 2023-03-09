<?php

namespace Database\Seeders;

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
        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(UniClassSeeder::class);
        $this->call(GradesSeeder::class);
        $this->call(VulnerabilitySeeder::class);
        $this->call(ExtraGradesTableSeeder::class);
    }
}
