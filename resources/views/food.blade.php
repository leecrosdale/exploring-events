@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <div class="row">

                        @foreach($foods as $food)

                            <div class="col-md-3">
                                <div class="row">
                                    <div class="col-md-9 offset-1">
                                        {{ $food->name }}
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 img-thumbnail">
                                        <img src="https://source.unsplash.com/random" class="col-md-12" />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-9 offset-3">
                                        &pound; {{ $food->price / 100 }} - <a href="{{ route('buy', $food) }}">Buy</a>
                                    </div>
                                </div>

                            </div>

                        @endforeach

                        </div>



                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
