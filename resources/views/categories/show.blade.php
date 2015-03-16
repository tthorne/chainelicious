@extends('app')

@section('content')
    <section id="content">
        <div class="content-section">
            <div class="container">
                <div class="col-lg-12">
                    <h1>{{ $category->name }}</h1>

                    @if ( !$category->products->count() )
                        Your project has no tasks.
                    @else
                        <ul>
                            @foreach( $category->products as $product )
                                <li><a href="{{ route('categories.products.show', [$category->slug, $products->slug]) }}">{{ $product->name }}</a></li>
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