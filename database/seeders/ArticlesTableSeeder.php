<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articles_table1')->insert([
            'title' => 'titletitle1',
            'contents' => 'contentscontents1',
        ]);
        DB::table('articles_table1')->insert([
            'title' => 'titletitle2',
            'contents' => 'contentscontents2',
        ]);        
    }
}
