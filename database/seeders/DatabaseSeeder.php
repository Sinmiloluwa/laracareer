<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Listing;
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
        \App\Models\User::factory(3)->create();

        Listing::factory(6)->create();

        Listing::create([
            'title' => 'Laravel Senior Developer',
            'tags' => 'laravel,vue,tailwind',
            'company' => 'Optimus',
            'location' => 'Nigeria,Lagos',
            'email' => 'emmasimons141@gmail.com',
            'website' => 'https://www.optimus.com',
            'description' => 'Be creative and buid reusable code and deploy'
        ]);

        Listing::create([
            'title' => 'Laravel Developer',
            'tags' => 'laravel',
            'company' => 'Renager',
            'location' => 'Nigeria, Ibadan',
            'email' => 'hr@renager.com',
            'website' => 'https://www.renager.com',
            'description' => 'Renager is looking for a mid-level backend developer to buil and deploy REST APIs'
        ]);

        Listing::create([
            'title' => 'Fullstack Developer',
            'tags' => 'laravel,tailwind,',
            'company' => 'Halistice',
            'location' => 'Nigeria, Ibadan',
            'email' => 'info@halistice.com',
            'website' => 'https://www.halistice.com',
            'description' => 'Halistice is looking for a mid-level backend developer to buil and deploy REST APIs'
        ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
