@extends('app')

@section('content')
    <section id="content">
        <div class="content-section">
            <div class="container">
                <div class="col-lg-12">
                    <h1>{{ $category->name }}</h1>
                    <div class="row">
                        @if ( !$category->products->count() )
                            Sorry, we haven't add any products to this category yet.
                        @else
                            @foreach( $category->products as $product )

                                <div class="col-sm-6 col-md-4">
                                    <div class="thumbnail">
                                        <img src="{{ $product->image }}" alt="{{ $product->name }}" class="img-thumbnail img-responsive">
                                        <div class="caption">
                                            <h3>{{ $product->name }}</h3>
                                            <p><a href="{{ $product->etsy_url }}" class="btn btn-default" role="button" target="_blank">Buy</a></p>

                                            </a>
                                                @if (Auth::guest())
                                            <p></p>
                                            @else
                                                @if ( Auth::user()->admin===1 )
                                                    {!! Form::open(array('class' => 'form-inline', 'method' => 'DELETE', 'route' => array('categories.products.destroy', $category->slug, $product->slug))) !!}
                                                    {!! link_to_route('categories.products.edit', 'Edit', array($category->slug, $product->slug), array('class' => 'btn btn-info')) !!}
                                                    {!! Form::submit('Delete', array('class' => 'btn btn-danger')) !!}
                                                    {!! Form::close() !!}
                                                    @else
                                                    @endif
                                            @endif
                                            <p>{{ $product->description }}</p>
                                            <h3 class="subhead">{{ $product->price }}</h3>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>

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
@endsection