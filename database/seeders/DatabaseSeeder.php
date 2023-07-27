<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Currency;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Currency::factory()->create([
            'name' => 'Japanese Yen (JPY)',
            'exchange_rate' => 107.17,
            'surcharge' => 7.5
        ]);
        Currency::factory()->create([
            'name' => 'British Pound (GBP)',
            'exchange_rate' => 0.711178,
            'surcharge' => 5
        ]);
        Currency::factory()->create([
            'name' => 'Euro (EUR)',
            'exchange_rate' => 0.884872,
            'surcharge' => 5
        ]);
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
