@extends('app')

@section('content')
    <section id="content">
        <div class="content-section">
            <div class="container">
                <div class="col-lg-12">
                    <h1>Categories!</h1>
                    @if ( !$categories->count() )
                        You have no projects!
                    @else
                        <ul>
                            @foreach( $categories as $category)
                                <li><a href="{{ route('categories.show', $category->slug) }}">{{ $category->name }}</a></li>
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