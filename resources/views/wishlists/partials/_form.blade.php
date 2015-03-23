<div class="form-group">
    {!! Form::label('product_id', 'Product Id:') !!}
    {!! Form::text('product_id') !!}
</div>


<div class="form-group">
    {!! Form::label('user_id', 'User Id:') !!}
    {!! Form::text('user_id') !!}
</div>


<div class="form-group">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::textarea('description') !!}
</div>

<div class="form-group">
    {!! Form::submit($submit_text, array('class' => 'btn btn-default')) !!}
</div>

