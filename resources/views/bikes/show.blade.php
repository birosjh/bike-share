@extends('layout')

@section('content')
    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column is-10 is-offset-1">
                    <div class="show card">
                        <header class="card-header">
                            <p class="card-header-title">
                                {{ $bike->code }}
                            </p>
                            <a href="/bikes" class="card-header-icon">
                                <span class="icon">
                                    <i class="fa fa-times"></i>
                                </span>
                            </a>
                        </header>
                        <div class="card-content">
                            <div class="columns">
                                <div class="column is-half">
                                    <figure class="image is-4by3">
                                      <img src="http://bulma.io/images/placeholders/1280x960.png" alt="Image">
                                    </figure>
                                </div>
                                <div class="column is-half has-text-centered">
                                    <p class="title">
                                        Type: {{ $bike->type }}
                                    </p>
                                    <p class="title">
                                        Color: {{ $bike->color }}
                                    </p>
                                    <p class="title">
                                        Price: ¥500/hr
                                    </p>
                                </div>
                            </div>
                        </div>
                        <footer class="card-footer">
                            <a class="card-footer-item" href="#">
                                <span>
                                    Rent
                                </span>
                            </a>
                        </footer>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
