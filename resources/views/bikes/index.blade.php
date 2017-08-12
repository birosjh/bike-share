@extends('layout')

@section('content')
    <div class="content">
        <h1>Bike Sharing!</h1>
        <div class="columns">
            @foreach($bikes as $bike)
                <div class="column is-one-fifth">
                    @include('bikes.bike')
                </div>
            @endforeach
        </div>
    </div>

@endsection
