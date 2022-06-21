<?php

namespace Database\Seeders;

use App\Models\Nft;
use App\Models\NftSeller;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NftSellerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        NftSeller::factory(100)->create()->each(function ($seller) {
            Nft::factory(10)->create([
                'nft_seller_id' => $seller->id,
            ]);
        });
    }
}
