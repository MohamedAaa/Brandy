
  <div class="box-body">
    	<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
    	    {!! Form::label('name', 'Name works') !!}
    	    {!! Form::text('name', null, ['class' => 'form-control']) !!}
    	    <small class="text-danger">{{ $errors->first('name') }}</small>
    	</div>

      <div class="form-group{{ $errors->has('link') ? ' has-error' : '' }}">
          {!! Form::label('link', 'Link') !!}
          {!! Form::text('link', null, ['class' => 'form-control']) !!}
          <small class="text-danger">{{ $errors->first('link') }}</small>
      </div>

    	<div class="form-group{{ $errors->has('info') ? ' has-error' : '' }}">
    	    {!! Form::label('info', 'Information') !!}
    	    {!! Form::textarea('info', null, ['class' => 'form-control']) !!}
    	    <small class="text-danger">{{ $errors->first('info') }}</small>
    	</div>
      @if(isset($button))
    	<div class="form-group{{ $errors->has('img') ? ' has-error' : '' }}">
    	    {!! Form::label('img', 'Image') !!}
    	    {!! Form::file('img') !!}
    	    <p class="help-block">Upload Image</p>
    	    <small class="text-danger">{{ $errors->first('img') }}</small>
    	</div>
      @endif
      @if(isset($type) == 'edit' && $works->img != null )
      <a href="{{ url('admins/works/image/'.$works->id) }}">X</a>
        <img src="{{url('/')}}/image/works/{{$works->img}}" width="300px" height="150px">
      @endif
  </div><!-- /.box-body -->

  @if(isset($button))
  <div class="box-footer">
    <button type="submit" class="btn btn-primary">{{ $button }}</button>
  </div>
  @endif

