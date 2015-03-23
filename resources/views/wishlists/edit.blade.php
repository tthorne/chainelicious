@extends('app')

@section('content')
    <section id="content">
        <div class="content-section">
            <div class="container">
                <div class="col-lg-12">
                    <h1>Edit Wish</h1>

                    {!! Form::model($wishlists, ['method' => 'PATCH', 'route' => ['wishlists.update', $wishlists->id]]) !!}

                    <div class="form-group">
                        {!! Form::label('description', 'Description:') !!}
                        {!! Form::textarea('description') !!}
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