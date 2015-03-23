@extends('app')

@section('content')
    <section id="content">
        <div class="content-section">
            <div class="container">
                <div class="col-lg-12">
                    <h1>Wishlists!</h1>
                    @if ( !$wishlists->count() )
                        You have no projects!
                    @else
                        <ul>
                            @foreach( $wishlists as $wishlist)

                                <li>
                                    <a href="{{ route('wishlists.show', $wishlist->id) }}">{{ $wishlist->id }}</a>
                                </li>
                            @endforeach
                        </ul>
                    @endif

                </div>
            </div>
        </div>
    </section>
    <!-- Breaker Section -->
    <section id="jumpring">
        <div class="jumpring-section">
            <div class="container">
                <div class="col-lg-12">
                    <img src="{{ URL::asset('img/jumpring.png') }}" class="img-responsive center" alt="Chainelicious">
                </div>
            </div>
        </div>
    </section>
@stop