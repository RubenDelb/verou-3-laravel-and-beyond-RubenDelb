<?php

namespace Database\Seeders;

use App\Models\Reservation;
use App\Models\Tool;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        User::factory(20)->create();
        Tool::factory(200)->create();
        Reservation::factory(55)->create();
    }
}
