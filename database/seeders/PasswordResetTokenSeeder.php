<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PasswordResetTokenSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('password_reset_tokens')->insert([
            [
                'email' => 'agnanpes1@gmail.com',
                'token' => '$2y$12$LKKlxeseHitQc5toMqeK5OCS7tDJwS6A8mldbutXf9h...',
                'created_at' => '2025-08-21 16:44:24',
            ],
        ]);
    }
}
