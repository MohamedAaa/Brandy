@extends('admin.master')

@section('title')
	Show Works
@endsection

@section('content')
<div class="content-wrapper">	
	<section class="content">
	<div class="row">
		<div class="col-md-12">
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title"> Works {{ $works->name }}</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                {!! Form::model($works,['method'=>'PATCH','action'=>['WorksCtrl@update',$works->id],'role'=>'form']) !!}
	                @include('admin.works._form')
                {{ Form::close() }}
              </div>
        	</div>
		</div>
	</section>    

</div>
@endsection