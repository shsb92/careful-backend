<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Administrator',
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin'),
            'role_id' => 1,
            'street' => 'Sample Street',
            'house_nr' => 1,
            'city' => 'Sample',
            'postal_code' => 34567,
            'job_title' => 'Admin',
        ])->createToken( str()->random(40) )->plainTextToken;
    }
}
