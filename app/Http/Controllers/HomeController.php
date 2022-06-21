<?php

namespace App\Http\Controllers;

use App\Models\Nft;
use App\Models\NftSeller;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
     */
    public function index(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        $sellers_ = NftSeller::whereHas('nfts', function (Builder $query) {
            if(request()->has('reliable')) {

            }

            if(request()->has('q')) {
                $query->where('name', 'like', '%' . request('q') . '%');
            }

        });

        $sellers = $sellers_->with('nfts')->paginate(20);
        return view('home', compact('sellers'));
    }

    /**
     * @param NftSeller $nftSeller
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\never
     */
    public function seller(NftSeller $nftSeller)
    {
        if($nftSeller) {
            return view('seller', compact('nftSeller'));
        } else {
            return abort(404);
        }
    }

    /**
     * @param Nft $nft
     * @return \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory|\never|\Illuminate\Contracts\Foundation\Application
     */
    public function nft(Nft $nft): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory|\never|\Illuminate\Contracts\Foundation\Application
    {
        if($nft) {
            return view('nft', compact('nft'));
        } else {
            return abort(404);
        }
    }
}
