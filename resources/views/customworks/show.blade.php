@extends('app')

@section('content')
    <section id="content">
        <div class="content-section">
            <div class="container">
                <div class="col-lg-12">
                    <h1>Custom Work!</h1>
                    @foreach( $customworks as $list )
                        <p><strong>Date Created:</strong> {{ $list->created }}<br/>
                            <strong>Date Updated:</strong> {{ $list->updated }}<br/>
                            <strong>Status:</strong>
                            @if ( $list->status===0 )
                                Unread
                            @elseif ( $list->status===1 )
                                Read
                            @elseif ( $list->status===2 )
                                Started
                            @elseif ( $list->status===3 )
                                Paid For
                            @elseif ( $list->status===4 )
                                Shipped
                            @endif
                    </p>

                    <hr>
                    <p><strong>Description</strong><br/>
                        {{ $list->description }}
                    </p>
                        <hr>
                        <h2>Customer Information</h2>
                        <p><b>Name:</b> {{ $list->first }} {{ $list->last }}<br/>
                            <strong>Phone:</strong> {{ $list->phone }}<br/>
                            <strong>Email:</strong> {{ $list->email }}<br/>
                        <b>Address:</b><br/>
                        {{ $list->street }}
                        <br>{{ $list->city }}, {{ $list->state }} {{ $list->zip }}</p>


                    @endforeach
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