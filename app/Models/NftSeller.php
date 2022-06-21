<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NftSeller extends Model
{
    use HasFactory;

    protected $guarded = [];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function nfts(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Nft::class, 'nft_seller_id', 'id');
    }
}
