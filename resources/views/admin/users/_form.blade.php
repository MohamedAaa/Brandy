
  <div class="box-body">
    	<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
    	    {!! Form::label('name', 'Name User') !!}
    	    {!! Form::text('name', null, ['class' => 'form-control','v-model'=>'name','id'=>'name']) !!}
            {{-- <div class="errors" v-if="showErrors">
               <p v-if="$userValid.name.required" class="text-danger">@{{ $userValid.name.required }}</p>
            </div> --}}
    	    <small class="text-danger">{{ $errors->first('name') }}</small>
    	</div>

    	<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
    	    {!! Form::label('email', 'E-mail') !!}
    	    {!! Form::email('email', null, ['class' => 'form-control','v-model'=>'email']) !!}
    	    <small class="text-danger">{{ $errors->first('email') }}</small>
    	</div>

      <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
          {!! Form::label('password', 'Password') !!}
          {!! Form::password('password', ['class' => 'form-control','v-model'=>'password']) !!}
          <small class="text-danger">{{ $errors->first('password') }}</small>
          @if(isset($note))
              <small class="text-danger">{{ $note }}</small>
          @endif
      </div>
      
  </div><!-- /.box-body -->

  @if(isset($button))
  <div class="box-footer">
    <button type="submit" class="btn btn-primary">{{ $button }}</button>
  </div>
  @endif

