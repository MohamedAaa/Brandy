@extends('admin.master')

@section('title')
	User {{ $users->name }}
@endsection

@section('content')
<div class="content-wrapper">	
	<section class="content">
	<div class="row">
		<div class="col-md-12">
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">User {{ $users->name }}</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                {!! Form::model($users,['method'=>'PATCH','action'=>['HomeController@update',$users->id],'role'=>'form']) !!}
	                @include('admin.users._form')
                {{ Form::close() }}
              </div>
        	</div>
		</div>
	</section>    

</div>
@endsection