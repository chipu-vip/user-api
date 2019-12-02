<?php
namespace App\Database\Seeds;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contents')->insert([
            [
                'message_type' => 'MSG_TYPE',
                'message_code' => 'MSG_CODE',
                'content' => 'This is demo message'
            ]
        ]);
    }
}
