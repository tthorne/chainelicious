@extends('app')

@section('content')
    <section id="content">
        <div class="content-section">
            <div class="container">
                <div class="col-lg-12">
                    <h1>Order <span class="head">Edit Custom Work</span>!</h1>
                    {!! Form::model($customworks, ['method' => 'PATCH', 'route' => ['customworks.update', $customworks->id], 'class' => 'form-horizontal']) !!}
                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-group">
                            <label class="col-md-4 control-label">{!! Form::label('status', 'Status:') !!}</label>
                            <div class="col-md-6">
                                {!! Form::select('status', array('0' => 'Unread', '1' => 'Read', '2' => 'Started', '3' => 'Shipped')); !!}
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">{!! Form::label('notes', 'My Notes') !!}</label>
                        <div class="col-md-6">
                            {!! Form::textarea('notes') !!}
                        </div>
                    </div>
                    @include('customworks/partials/_form', ['submit_text' => 'Send Order'])
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
@endsection