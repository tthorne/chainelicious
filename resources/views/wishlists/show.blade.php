@extends('app')

@section('content')
    <section id="content">
        <div class="content-section">
            <div class="container">
                <div class="col-lg-12">
                    <h1>Wishlists!</h1>
                    @if ( !$wishlists->count() )
                        You have no items in your wishlist!
                    @else
                        <table class="table table-striped">
                            <tr>
                                <th>Product Name</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            @foreach( $wishlists as $list )
                                <tbody>
                                <tr>
                                    <td><strong>{{ $list->product }}</strong>
                                        <p>{{ $list->description }}</p></td>
                                    <td>{!! Form::open(array('class' => 'form-inline', 'method' => 'DELETE', 'route' => array('wishlists.destroy', $list->id))) !!}
                                        {!! link_to_route('wishlists.edit', 'Edit', array($list->id), array('class' => 'btn btn-info')) !!}
                                        {!! Form::submit('Delete', array('class' => 'btn btn-danger')) !!}
                                        {!! Form::close() !!}</td>
                                </tr>
                                </tbody>

                            @endforeach
                        </table>
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
@stop