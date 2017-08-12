@extends('layout')

@section('content')
    <section class="section">
        <div class="container">
            <div class="columns">
                @foreach($bikes as $bike)
                    <div class="column is-one-fifth">
                        @include('bikes.bike')
                    </div>
                @endforeach
            </div>
            {{ $bikes->links() }}
        </div>
    </section>
@endsection
