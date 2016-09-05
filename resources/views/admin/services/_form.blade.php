
  <div class="box-body">
    	<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
    	    {!! Form::label('name', 'Name Services') !!}
    	    {!! Form::text('name', null, ['class' => 'form-control']) !!}
    	    <small class="text-danger">{{ $errors->first('name') }}</small>
    	</div>

    	<div class="form-group{{ $errors->has('content') ? ' has-error' : '' }}">
    	    {!! Form::label('content', 'Conent') !!}
    	    {!! Form::textarea('content', null, ['class' => 'form-control']) !!}
    	    <small class="text-danger">{{ $errors->first('content') }}</small>
    	</div>
      @if(isset($button))
    	<div class="form-group{{ $errors->has('img') ? ' has-error' : '' }}">
    	    {!! Form::label('img', 'Image') !!}
    	    {!! Form::file('img') !!}
    	    <p class="help-block">Upload Image</p>
    	    <small class="text-danger">{{ $errors->first('img') }}</small>
    	</div>
      @endif
      @if(isset($type) == 'edit' && $services->img != null )
      <a href="{{ url('admins/services/image/'.$services->id) }}">X</a>
        <img src="{{url('/')}}/image/services/{{$services->img}}" width="300px" height="150px">
      @endif
  </div><!-- /.box-body -->

  @if(isset($button))
  <div class="box-footer">
    <button type="submit" class="btn btn-primary">{{ $button }}</button>
  </div>
  @endif

