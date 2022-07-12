<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Administrator',
            'email' => 'admin@admin.com',
            'password' => 'admin',
            'role_id' => 1,
            'street' => 'Sample Street',
            'house_nr' => 1,
            'city' => 'Sample',
            'postal_code' => 34567,
            'job_title' => 'Admin',
        ]);
    }
}
