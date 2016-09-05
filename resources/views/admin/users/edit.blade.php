@extends('admin.master')

@section('title')
	Edit user {{ $users->name }}
@endsection

@section('content')
<div class="content-wrapper">	
	<section class="content">
	<div class="row">
		<div class="col-md-12">
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Edit user {{ $users->name }}</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <validator name="userValid">
                {!! Form::model($users,['method'=>'PATCH','action'=>['HomeController@update',$users->id],'role'=>'form']) !!}
	                @include('admin.users._form',['button'=>'Edit','type'=>'edit','note'=>'leave it even not change'])
                {{ Form::close() }}
                </validator>
              </div>
        	</div>
		</div>
	</section>    

</div>
@endsection