
  <div class="box-body">
    	<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
    	    {!! Form::label('name', 'Name Services') !!}
    	    {!! Form::text('name', null, ['class' => 'form-control']) !!}
    	    <small class="text-danger">{{ $errors->first('name') }}</small>
    	</div>

    	<div class="form-group{{ $errors->has('text') ? ' has-error' : '' }}">
    	    {!! Form::label('text', 'Text') !!}
    	    {!! Form::textarea('text', null, ['class' => 'form-control']) !!}
    	    <small class="text-danger">{{ $errors->first('text') }}</small>
    	</div>
  </div><!-- /.box-body -->

  @if(isset($button))
  <div class="box-footer">
    <button type="submit" class="btn btn-primary">{{ $button }}</button>
  </div>
  @endif

