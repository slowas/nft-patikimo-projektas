@extends('layouts.app')

@section('content')'

    <div class="text-center">
        <h3>NFT "{{ $nft->name }}"</h3>
    </div>

    <div class="row">
        <div class="col-lg-4">

            <div>
                <img class="img-fluid" src="{{ $nft->image }}" alt="{{ $nft->image }}">
            </div>

            <div class="text-center">
                <h5 class="border">{{ $nft->name }}</h5>
            </div>


        </div>
        <div class="col-lg-8">
            <h2>NFT informacija</h2>


            <div><b>Pavadinimas</b>: {{ $nft->name }}</div>
            <div><b>Pardavėjas</b>: {{ $nft->seller->name }}</div>
            <div><b>Transakcijos adresas</b>: {{ $nft->transaction_address }}</div>
            <div><b>Bloko ID</b>: {{ $nft->token_id }}</div>
            <div><b>Blokų grandinė</b>: {{ $nft->block_chain }}</div>
            <div>
                <b>Aprašymas</b>
                <p>
                    {{ $nft->description  }}
                </p>
            </div>



            <div class="mt-5">
                <a href="{{ route('seller.show', $nft->nft_seller_id) }}" class="btn btn-primary btn-sm">Grįžti pas pardavėja</a>
                <a href="{{ route('home') }}" class="btn btn-primary btn-sm">Grįžti į paiešką</a>
            </div>
        </div>
    </div>

@endsection
