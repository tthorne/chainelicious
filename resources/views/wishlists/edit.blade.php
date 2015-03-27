@extends('app')

@section('content')
    <section id="content">
        <div class="content-section">
            <div class="container">
                <div class="col-lg-12">
                    <h1>Edit Wish</h1>

                    {!! Form::model($wishlists, ['method' => 'PATCH', 'route' => ['wishlists.update', $wishlists->id], 'class'=>'form-horizontal']) !!}

                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <input type="hidden" class="form-control" name="user_id" value="{{ Auth::user()->id }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">{!! Form::label('category', 'What do you want to have created?') !!}</label>
                        <div class="col-md-6">
                            {!! Form::select('category', array('' => 'Select', '1' => 'Bracelet', '2' => 'Earrings', '3' => 'Necklace', '4' => 'Other Work')); !!}
                        </div>
                    </div>
                    @include('wishlists/partials/_form', ['submit_text' => 'Edit My A Wish'])
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