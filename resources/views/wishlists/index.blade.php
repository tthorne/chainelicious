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
                                <th></th>
                                <th></th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            @foreach( $wishlists as $list )
                                <tbody>
                                <tr>
                                    <td><a href="/wishlists/{{ $list->id }}">{{ $list->product }}</a></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
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