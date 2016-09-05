@extends('admin.master')

@section('title')
	Testimonial
@endsection

@section('content')
<div class="content-wrapper">	
	<section class="content">
	<div class="row">
		<div class="col-md-12">
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Testimonial {{ $testimonials->name }}</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                {!! Form::model($testimonials,['role'=>'form']) !!}
	                @include('admin.testimonials._form')
                {{ Form::close() }}
              </div>
        	</div>
		</div>
	</section>    

</div>
@endsection