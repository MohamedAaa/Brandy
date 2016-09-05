@extends('admin.master')

@section('title')
	Settings
@endsection

@section('content')


<div class="content-wrapper">	
	<section class="content">
	<div class="row">
		<div class="col-md-12">
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Edit Settings {{ $settings->name }}</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                @include('errors.error')
                {!! Form::model($settings,['method'=>'PATCH','action'=>['SettingsCtrl@update',$settings->id],'role'=>'form','files'=>true]) !!}


				  <div class="box-body">
				    	<div class="form-group{{ $errors->has('site_name') ? ' has-error' : '' }}">
				    	    {!! Form::label('site_name', 'Site Name') !!}
				    	    {!! Form::text('site_name', null, ['class' => 'form-control']) !!}
				    	    <small class="text-danger">{{ $errors->first('site_name') }}</small>
				    	</div>

						<div class="form-group{{ $errors->has('welcome') ? ' has-error' : '' }}">
				    	    {!! Form::label('welcome', 'Welcome') !!}
				    	    {!! Form::text('welcome', null, ['class' => 'form-control']) !!}
				    	    <small class="text-danger">{{ $errors->first('welcome') }}</small>
				    	</div>

				    	<div class="form-group{{ $errors->has('site_desc') ? ' has-error' : '' }}">
				    	    {!! Form::label('site_desc', 'Description') !!}
				    	    {!! Form::textarea('site_desc', null, ['class' => 'form-control']) !!}
				    	    <small class="text-danger">{{ $errors->first('site_desc') }}</small>
				    	</div>

						<div class="form-group{{ $errors->has('website') ? ' has-error' : '' }}">
				    	    {!! Form::label('website', 'Website') !!}
				    	    {!! Form::text('website', null, ['class' => 'form-control']) !!}
				    	    <small class="text-danger">{{ $errors->first('website') }}</small>
				    	</div>

				    	<div class="form-group{{ $errors->has('call') ? ' has-error' : '' }}">
				    	    {!! Form::label('call', 'Call') !!}
				    	    {!! Form::text('call', null, ['class' => 'form-control']) !!}
				    	    <small class="text-danger">{{ $errors->first('call') }}</small>
				    	</div>

						<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
				    	    {!! Form::label('email', 'Email') !!}
				    	    {!! Form::text('email', null, ['class' => 'form-control']) !!}
				    	    <small class="text-danger">{{ $errors->first('email') }}</small>
				    	</div>

				    	<div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
				    	    {!! Form::label('address', 'Address') !!}
				    	    {!! Form::text('address', null, ['class' => 'form-control']) !!}
				    	    <small class="text-danger">{{ $errors->first('address') }}</small>
				    	</div>

				    	<div class="form-group{{ $errors->has('fb') ? ' has-error' : '' }}">
				    	    {!! Form::label('fb', 'Facebook') !!}
				    	    {!! Form::text('fb', null, ['class' => 'form-control']) !!}
				    	    <small class="text-danger">{{ $errors->first('fb') }}</small>
				    	</div>

				    	<div class="form-group{{ $errors->has('tw') ? ' has-error' : '' }}">
				    	    {!! Form::label('tw', 'Twitter') !!}
				    	    {!! Form::text('tw', null, ['class' => 'form-control']) !!}
				    	    <small class="text-danger">{{ $errors->first('tw') }}</small>
				    	</div>

				    	<div class="form-group{{ $errors->has('g_plus') ? ' has-error' : '' }}">
				    	    {!! Form::label('g_plus', 'Google +') !!}
				    	    {!! Form::text('g_plus', null, ['class' => 'form-control']) !!}
				    	    <small class="text-danger">{{ $errors->first('g_plus') }}</small>
				    	</div>

				    	<div class="form-group{{ $errors->has('in') ? ' has-error' : '' }}">
				    	    {!! Form::label('in', 'Linked In') !!}
				    	    {!! Form::text('in', null, ['class' => 'form-control']) !!}
				    	    <small class="text-danger">{{ $errors->first('in') }}</small>
				    	</div>
				   
				  </div><!-- /.box-body -->

				  <div class="box-footer">
				    <button type="submit" class="btn btn-primary">Edit</button>
				  </div>

                {{ Form::close() }}
              </div>
        	</div>
		</div>
	</section>    

</div>

@endsection