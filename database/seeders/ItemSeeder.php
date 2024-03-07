<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('items')->insert([
            [
            'name' => 'カット',
            'memo' => '内容',
            'price' =>6000 ,
            ],
            [
            'name' => 'カラー',
            'memo' => '内容',
            'price' =>8000 ,
            ],
            [
            'name' => 'パーマ',
            'memo' => '内容',
            'price' =>10000 ,
            ]   
            
        ]);
    }
}
