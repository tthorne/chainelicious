@extends('app')

@section('content')
    <section id="content">
        <div class="content-section">
            <div class="container">
                <div class="col-lg-12">
                    <h1>Edit <span class="head">{{ $users->first_name }} {{ $users->last_name }}'s</span></h1>

                    {!! Form::model($users, ['method' => 'PATCH', 'route' => ['users.update', $users->id], 'class' => 'form-horizontal']) !!}

                    <div class="form-group">
                        {!! Form::label('email', 'Email Address:', array('class' => 'col-md-4 control-label')) !!}
                        <div class="col-md-6">
                        {!! Form::text('email') !!}
                        </div>
                    </div>

                    <hr>
                    <div class="form-group">
                        {!! Form::label('first_name', 'First Name:', array('class' => 'col-md-4 control-label')) !!}
                        <div class="col-md-6">
                        {!! Form::text('first_name') !!}
                        </div>
                    </div>

                    <div class="form-group">
                        {!! Form::label('last_name', 'Last Name:', array('class' => 'col-md-4 control-label')) !!}
                        <div class="col-md-6">
                        {!! Form::text('last_name') !!}
                        </div>
                    </div>

                    <div class="form-group">
                        {!! Form::label('street', 'Street Address:', array('class' => 'col-md-4 control-label')) !!}
                        <div class="col-md-6">
                        {!! Form::text('street') !!}
                        </div>
                    </div>

                    <div class="form-group">
                        {!! Form::label('city', 'City:', array('class' => 'col-md-4 control-label')) !!}
                        <div class="col-md-6">
                        {!! Form::text('city') !!}
                        </div>
                    </div>

                    <div class="form-group">
                        {!! Form::label('state', 'State:', array('class' => 'col-md-4 control-label')) !!}
                        <div class="col-md-6">
                        {!! Form::text('state') !!}
                        </div>
                    </div>

                    <div class="form-group">
                        {!! Form::label('zip', 'Zip:', array('class' => 'col-md-4 control-label')) !!}
                        <div class="col-md-6">
                        {!! Form::text('zip') !!}
                        </div>
                    </div>

                    <div class="form-group">
                        {!! Form::label('phone', 'Phone:', array('class' => 'col-md-4 control-label')) !!}
                        <div class="col-md-6">
                        {!! Form::text('phone') !!}
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                        {!! Form::submit('Submit', array('class' => 'btn btn-default')) !!}
                        </div>
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