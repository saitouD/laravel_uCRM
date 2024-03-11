<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Purchase;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserSeeder::class,
            ItemSeeder::class,
        ]);

        \App\Models\Customer::factory(1000)->create();

        

        $items = \App\Models\Item::all(); //商品テーブルの情報をget

        Purchase::factory(1000)->create()
        ->each(function(Purchase $purchase) use ($items) { //each関数：1件ずつ処理,　use:関数の外側で定義してる$itemsを使えるようにする。
            $purchase->items()->attach( //attach(purchaseテーブルにデータが登録されたタイミングで中間テーブルitem_purchaseにも同時に登録したいので入れてる)
                //↑のitems関数はPurchase.phpで定義したもの。
                $items->random(rand(1,3))->pluck('id')->toArray(),//$itemsの中から二、三個の情報を取り出してpluckでpurchaseのidに紐付け
                [ 'quantity' => rand(1, 5) ]//同時に、quantityに１から５のランダムな値を紐付け
            );
        });
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
