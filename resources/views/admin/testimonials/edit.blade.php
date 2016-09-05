@extends('admin.master')

@section('title')
	Edit Testimonials
@endsection

@section('content')
<div class="content-wrapper">	
	<section class="content">
	<div class="row">
		<div class="col-md-12">
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Edit Testimonials {{ $testimonials->name }}</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                {!! Form::model($testimonials,['method'=>'PATCH','action'=>['TestimonialsCtrl@update',$testimonials->id],'role'=>'form','files'=>true]) !!}
	                @include('admin.testimonials._form',['button'=>'Edit','type'=>'edit'])
                {{ Form::close() }}
              </div>
        	</div>
		</div>
	</section>    

</div>
@endsection