@extends('app')

@section('content')

    <h1 class="page-heading">Prepare a DMCA Notice</h1>
    @include('errors.list')
    {!! Form::open(['method' => 'GET', 'action' => 'NoticesController@confirm']) !!}
    <div class="form-group">
        {!! Form::label('provider_id', 'Provider') !!}
        {!! Form::select('provider_id', [], null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('infringing_title', 'Infringing Title') !!}
        {!! Form::text('infringing_title', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('infringing_link', 'Infringing Link') !!}
        {!! Form::text('infringing_link', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('original_link', 'original Link') !!}
        {!! Form::text('original_link', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('original_description', 'original Description') !!}
        {!! Form::text('original_description', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Preview Notice', ['class' => 'btn btn-primary form-control']) !!}
    </div>

    {!! Form::close() !!}
@endsection