<?php

use Illuminate\Database\Seeder;
use App\Database\Seeds\UsersTableSeeder;
use App\Database\Seeds\ContentsTableSeeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([UsersTableSeeder::class, ContentsTableSeeder::class]);
    }
}
