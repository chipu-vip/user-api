<?php
namespace App\Database\Seeds;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => '$2y$10$217.Lkl7kwE3aPNm6afhZ.AKUpu8wTMhKcXXtpXF0c9Obw3JnYPzO',
                'api_token' => 'zxcvbnmlkjhgfdsaqwertyuiopoiuytrewqasdfghjklmnbvcxzxcvbnmlkjhgfdsaqwer'
            ]
        ]);
    }
}
