@extends('layout')

@section('content')
    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column is-half is-offset-one-quarter">
                    @yield('wrapped-content')
                </div>
            </div>
        </div>
    </section>
@endsection
