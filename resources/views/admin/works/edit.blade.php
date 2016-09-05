@extends('admin.master')

@section('title')
	Add Works
@endsection

@section('content')
<div class="content-wrapper">	
	<section class="content">
	<div class="row">
		<div class="col-md-12">
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Edit Works {{ $works->name }}</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                {!! Form::model($works,['method'=>'PATCH','action'=>['WorksCtrl@update',$works->id],'role'=>'form','files'=>true]) !!}
	                @include('admin.works._form',['button'=>'Edit','type'=>'edit'])
                {{ Form::close() }}
              </div>
        	</div>
		</div>
	</section>    

</div>
@endsection