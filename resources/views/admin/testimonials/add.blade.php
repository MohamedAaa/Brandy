@extends('admin.master')

@section('title')
	Add Testimonials
@endsection

@section('content')
<div class="content-wrapper">	
	<section class="content">
	<div class="row">

		<div class="col-md-12">
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Add Testimonials</h3>
          </div><!-- /.box-header -->
          <!-- form start -->
          {!! Form::open(['action'=>'TestimonialsCtrl@store','role'=>'form','files'=>true]) !!}
            @include('admin.testimonials._form',['button'=>'Add'])
          {{ Form::close() }}
        </div>
    	</div>
		</div>

	</section>    

</div>
@endsection