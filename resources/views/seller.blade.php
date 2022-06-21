@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-lg-4">
            <div class="text-center">
                <h2>{{ $nftSeller->nickname }}</h2>
            </div>

            <div><b>Vardas: </b> {{ $nftSeller->first_name }}</div>
            <div><b>Pavardė: </b> {{ $nftSeller->first_name }}</div>
            <div><b>Miestas: </b> {{ $nftSeller->city }}</div>
            <div><b>Šalis: </b> {{ $nftSeller->country }}</div>
        </div>
        <div class="col-lg-8">

            <h2>Visi pardavėjo NFT</h2>


            @if(!$nftSeller->nfts->isEmpty())
                <div class="row">
                    @foreach($nftSeller->nfts as $nft)
                        <div class="col-lg-4">
                            <div><a href="{{ route('nft.show', $nft->id) }}">{{ $nft->name }}</a></div>
                            <div>
                                <img class="img-fluid" src="{{ $nft->image }}" alt="{{ $nft->name }}">
                            </div>
                        </div>
                    @endforeach

                </div>
            @else
                <div class="alert alert-danger">
                    Pardavėjas neturi jokių NFT
                </div>
            @endif
        </div>
    </div>

    <div class="mt-5">
        <a href="{{ route('home') }}" class="btn btn-primary btn-sm">Grįžti į paiešką</a>
    </div>
@endsection
