@extends('app')

@section('content')
    <section id="content">
        <div class="content-section">
            <div class="container">
                <div class="col-lg-12">
                    <h1>Wishlists!</h1>
                    @if ( !$wishlists->count() )
                        Sorry there are no wishlist items!
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
                                    <td><strong>@if ( $list->category===1 )
                                                Bracelet
                                            @elseif ( $list->category===2 )
                                                Earrings
                                            @elseif ( $list->category===3 )
                                                Necklace
                                            @elseif ( $list->category===4 )
                                                Other
                                            @endif - {{ $list->created }}</strong>
                                        <p>{{ $list->description }}</p>
                                        <p><a href="/users/{{ $list->user_id }}">{{ $list->first }} {{ $list->last }}</a></p></td>
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