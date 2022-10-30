<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class toko_models extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         
        DB::table('toko_models')->insert([
            [
                    "kode_barang" => "skincare",
                    "nama_barang" => "skintific",
                    "detail" => "menjaga wajah tetap lembab",
                    "detail_lengkap" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur quia, dolores harum impedit atque tenetur totam illo ullam corrupti nulla cum quaerat hic sequi recusandae. Dolor aut, amet deleniti nesciunt ipsum, molestiae consequatur ducimus eum inventore nulla fuga? Doloremque, fuga id ipsum at ipsam mollitia minus fugit labore ratione? Alias, voluptate! Asperiores temporibus corrupti explicabo officiis? Ipsum alias impedit, distinctio unde obcaecati cupiditate quidem quasi aut ipsa modi ullam nulla eius dolorem minima necessitatibus excepturi dicta facere consequatur laborum earum! Est ipsam eligendi asperiores fugiat expedita facere, sapiente dignissimos. Nesciunt necessitatibus quia iure voluptate quae et odit maiores facilis illo.",
                    "harga" => 300000,
                    "stock" => 8,
                    "foto" => "produk1.jpg"
            ],

            [
                    "kode_barang" => "parfum",
                    "nama_barang" => "bellagio",
                    "detail" => "wanginya tahan seharian",
                    "detail_lengkap" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur quia, dolores harum impedit atque tenetur totam illo ullam corrupti nulla cum quaerat hic sequi recusandae. Dolor aut, amet deleniti nesciunt ipsum, molestiae consequatur ducimus eum inventore nulla fuga? Doloremque, fuga id ipsum at ipsam mollitia minus fugit labore ratione? Alias, voluptate! Asperiores temporibus corrupti explicabo officiis? Ipsum alias impedit, distinctio unde obcaecati cupiditate quidem quasi aut ipsa modi ullam nulla eius dolorem minima necessitatibus excepturi dicta facere consequatur laborum earum! Est ipsam eligendi asperiores fugiat expedita facere, sapiente dignissimos. Nesciunt necessitatibus quia iure voluptate quae et odit maiores facilis illo.",
                    "harga" => 30000,
                    "stock" => 12,
                    "foto" => "produk2.jpg"
            ]
        ]);
       
    }
}

