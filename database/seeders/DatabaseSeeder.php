<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\{
    User, Post,
    HomePage, AboutPage, ContactPage,
    ServicesList, ServicesPage
};

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::create([
        //     'name' => 'root',
        //     'email' => 'root@root.com',
        //     'password' => 'root',
        // ]);

        Post::factory(10)->create();

        // AboutPage::factory(1)->create();
        // ContactPage::factory(1)->create();
        // HomePage::factory(1)->create();
        // ServicesPage::factory(1)->create();
        // ServicesList::factory(6)->create();
    }
}
