<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
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
        if (!User::where('email', 'admin@gmail.com')->exists()) {
            User::create([
                'name' => 'Kenn Secusana',
                'email' => 'admin@gmail.com',
                'email_verified_at' => Carbon::now(),
                'password' => bcrypt('admin123'),
                'role' => 'Admin'
            ]);
        }
        $this->call(SettingSeeder::class);
        // \App\Models\User::factory(10)->create();
    }
}
