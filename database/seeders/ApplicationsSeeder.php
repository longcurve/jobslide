<?php

namespace Database\Seeders;

use App\Models\Application;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        Application::factory()->create([
            'date' => date(),
            'position' => 'Clerk',
            'company' => 'Retailed',
            'location => "Syracuse, NY',
            'contact_email' => 'johndoe@retailed.com',
            'contact_phone' => '556-748-8394',
            'interviews' => 'interviews',
            'calls' => 'calls'
        ]);
    }
}