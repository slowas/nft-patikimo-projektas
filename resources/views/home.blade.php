@extends('layouts.app')

@section('content')
    <div class="container">
        <h4>NFT paieska</h4>

        <form action="" method="get">
           <div class="row">
               <div class="col-lg-6">
                   <div class="form-group">
                       <label>Paieška</label>
                       <input class="form-control" name="q" value="{{ request('q') }}" placeholder="Įveskite NFT pavadinimą ar jos pradžią">
                   </div>
               </div>
               <div class="col-lg-6">
                    <div class="form-group">
                        <label>Patikimumas</label>
                        <select name="reliable" class="form-control">
                            <option @if(request('reliable')) selected @endif value="reliable">Patikimiausi</option>
                            <option @if(request('reliable')) selected @endif value="unreliable">Nepatikimiausi</option>
                        </select>
                    </div>
               </div>
           </div>
        </form>

        <div class="row mt-5 mb-5">
           @if(!$sellers->isEmpty())
                @foreach($sellers as $seller)
                    <div class="col-lg-3">
                        <div class="seller">
                            <div>
                                <a href="{{ route('seller.show', $seller->id) }}">
                                    <h5>{{ $seller->nickname }}</h5>

                                    <img class="img-fluid" src="{{ $seller->nfts->first()->image }}">
                                </a>
                            </div>
                            <div>

                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <div class="alert alert-danger">Pardavėju nėra.</div>
            @endif
        </div>

        <div class="text-center">
            {{ $sellers->links() }}
        </div>
    </div>
@endsection
