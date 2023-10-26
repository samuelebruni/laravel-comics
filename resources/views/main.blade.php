@extends('layouts.app')

@section('content')

    <div id="app_product">

        <div class="container">
    
            <div class="row d-flex pb-5">
                @foreach($comics as $comic )
                    <div class="col-2 mt-5">
                        <div class="card p-2">
                            <img class="card-img-top" src="{{$comic['thumb']}}" alt="">
                            <div>
                                <div class="text-white fw-bold">{{$comic['title']}}</div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="d-flex align-items-center justify-content-center pb-5">
                <button class="btn btn-primary rounded-0 fw-bold">LOAD MORE</button>
            </div>
        </div>
    </div>
    


@endsection