@extends('app')

@section('content')
    <section id="content">
        <div class="content-section">
            <div class="container">
                <div class="col-lg-12">
                    <h1>New {{ $category->name }}</h1>

                    {!! Form::model(new App\Product, ['route' => ['categories.products.store', $category->slug], 'class'=>'']) !!}
                    @include('products/partials/_form', ['submit_text' => 'Add Product'])
                    {!! Form::close() !!}

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