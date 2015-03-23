<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name') !!}
</div>

<div class="form-group">
    {!! Form::label('slug', 'Slug:') !!}
    {!! Form::text('slug') !!}
</div>

<div class="form-group">
    {!! Form::label('image', 'Image:') !!}
    {!! Form::text('image') !!}
</div>

<div class="form-group">
    {!! Form::label('etsy_url', 'Etsy Url:') !!}
    {!! Form::text('etsy_url') !!}
</div>

<div class="form-group">
    {!! Form::label('price', 'Price:') !!}
    {!! Form::text('price') !!}
</div>

<div class="form-group">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::textarea('description') !!}
</div>

<div class="form-group">
    {!! Form::submit($submit_text) !!}
</div>

