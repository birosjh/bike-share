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
                @if($bikes->count() < 4)
                    @for ($i = 0; $i < 4 - $bikes->count(); $i++)
                        <div class="column is-one-fifth"></div>
                    @endfor
                @endif
            </div>
            {{ $bikes->links() }}
        </div>
    </section>
@endsection
