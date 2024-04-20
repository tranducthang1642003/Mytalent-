<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KeywordSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $keywords = ['keyword1', 'keyword2', 'keyword3', 'keyword4', 'keyword5', 'keyword6', 'keyword7', 'keyword8', 'keyword9', 'keyword10'];
        foreach ($keywords as $keyword) {
            DB::table('keywords')->insert([
                'keyword' => $keyword,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
