<div class="form-group">
    <label class="col-md-4 control-label">{!! Form::label('description', 'Describe what its is you are wanting to have made. Include measurements, of wrists, length of necklace,
            metals you want used, and also any weaves that you would like used.') !!}</label>
    <div class="col-md-6">
        {!! Form::textarea('description') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-6 col-md-offset-4">
            {!! Form::submit($submit_text, array('class' => 'btn btn-default')) !!}
    </div>
</div>