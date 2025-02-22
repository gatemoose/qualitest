<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\HomePage;
use App\Models\AboutPage;
use App\Models\ContactPage;
use App\Models\ServicesList;
use App\Models\ServicesPage;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // AboutPage::factory(1)->create();
        // ContactPage::factory(1)->create();
        // HomePage::factory(1)->create();
        // ServicesPage::factory(1)->create();
        ServicesList::factory(10)->create();
    }
}
