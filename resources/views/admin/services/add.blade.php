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
            <h3 class="box-title">Add Services</h3>
          </div><!-- /.box-header -->
          <!-- form start -->
          {!! Form::open(['action'=>'ServicesCtrl@store','role'=>'form','files'=>true]) !!}
            @include('admin.services._form',['button'=>'Add'])
          {{ Form::close() }}
        </div>
    	</div>
		</div>

	</section>    

</div>
@endsection