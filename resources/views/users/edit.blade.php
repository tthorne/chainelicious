@extends('app')

@section('content')
    <section id="content">
        <div class="content-section">
            <div class="container">
                <div class="col-lg-12">
                    <h1>Edit {{ $users->first_name }} {{ $users->last_name }}</h1>

                    {!! Form::model($users, ['method' => 'PATCH', 'route' => ['users.update', $users->id]]) !!}

                    <div class="form-group">
                        {!! Form::label('email', 'Email Address:') !!}
                        {!! Form::text('email') !!}
                    </div>

                    <hr>
                    <div class="form-group">
                        {!! Form::label('first_name', 'First Name:') !!}
                        {!! Form::text('first_name') !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('last_name', 'Last Name:') !!}
                        {!! Form::text('last_name') !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('street', 'Street Address:') !!}
                        {!! Form::text('street') !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('city', 'City:') !!}
                        {!! Form::text('city') !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('state', 'State:') !!}
                        {!! Form::text('state') !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('zip', 'Zip:') !!}
                        {!! Form::text('zip') !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('phone', 'Phone:') !!}
                        {!! Form::text('phone') !!}
                    </div>

                    <div class="form-group">
                        {!! Form::submit('Submit', array('class' => 'btn btn-default')) !!}
                    </div>
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
@stop