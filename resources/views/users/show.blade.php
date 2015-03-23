@extends('app')

@section('content')
    <section id="content">
        <div class="content-section">
            <div class="container">
                <div class="col-lg-12">
                    <h1>{{ $users->first_name }} {{ $users->last_name }}</h1>
                    <p><strong>Email Address:</strong> {{ $users->email }}</p>
                    <p><strong>Street Address:</strong> {{ $users->street }}</p>
                    <p><strong>City:</strong> {{ $users->city }}</p>
                    <p><strong>State:</strong> {{ $users->state }}</p>
                    <p><strong>Zip:</strong> {{ $users->zip }}</p>
                    <p><strong>Phone:</strong> {{ $users->phone }}</p>

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