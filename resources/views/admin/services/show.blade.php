@extends('admin.master')

@section('title')
	Add Services
@endsection

@section('content')
<div class="content-wrapper">	
	<section class="content">
	<div class="row">
		<div class="col-md-12">
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Edit Services {{ $services->name }}</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                {!! Form::model($services,['method'=>'PATCH','action'=>['ServicesCtrl@update',$services->id],'role'=>'form','files'=>true]) !!}
	                @include('admin.services._form')
                {{ Form::close() }}
              </div>
        	</div>
		</div>
	</section>    

</div>
@endsection