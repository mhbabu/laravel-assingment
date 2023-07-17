<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'user_type'     => 1,
            'name'          => 'System Admin',
            'email'         => 'admin@admin.com',
            'password'      => bcrypt('password'),
            'created_at'    => now(),
            'created_by'    => 1,
            'updated_at'    => now(),
            'updated_by'    => 1
        ]);
    }
}
