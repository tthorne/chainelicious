@foreach( $products as $product )

    <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
            <img src="{{ $product->image }}" alt="{{ $product->name }}" class="img-thumbnail img-responsive">
            <div class="caption">
                <h3>{{ $product->name }}</h3>
                <p><a href="{{ $product->etsy_url }}" class="btn btn-default" role="button" target="_blank">Buy</a> <a href="" class="btn btn-default" role="button" target="_blank">Add To Wishlist</a>
                    @if ( Auth::user()->admin===1 )
                        {!! Form::open(array('class' => 'form-inline', 'method' => 'DELETE', 'route' => array('categories.products.destroy', $category->slug, $product->slug))) !!}
                        {!! link_to_route('categories.products.edit', 'Edit', array($category->slug, $product->slug), array('class' => 'btn btn-info')) !!}
                        {!! Form::submit('Delete', array('class' => 'btn btn-danger')) !!}
                        {!! Form::close() !!}
                    @else
                    @endif
                </p>
                <p>{{ $product->description }}</p>
                <h3 class="subhead">{{ $product->price }}</h3>
            </div>
        </div>
    </div>
@endforeach