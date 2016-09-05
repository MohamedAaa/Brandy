@extends('admin.master')

@section('title')
	Add Users
@endsection

@section('content')
<div class="content-wrapper">	
	<section class="content">
    	<div class="row">
    		<div class="col-md-12" id="Add">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Add Users </h3>
                    </div><!-- /.box-header -->
                      <!-- form start -->
                      {{-- ,'v-on:submit.prevent'=>'add' --}}
                      {{-- <test></test> --}}

                    {{-- <validator name="userValid"> --}}
                      {!! Form::open(['action'=>'HomeController@store','role'=>'form','v-on:submit.prevent'=>'add','id'=>'addUser']) !!}
                        @include('admin.users._form',['button'=>'Add'])
                      {{ Form::close() }}
                    {{-- </validator> --}}
                </div>
            </div>
    	</div>
	</section>    

</div>
@endsection

@section('script')

    <!-- Latest compiled and minified JavaScript -->
    <script type="text/javascript" src="{{ asset('vendor/jsvalidation/js/jsvalidation.js')}}"></script>

    {!! JsValidator::formRequest('App\Http\Requests\UserR','#addUser') !!}

@endsection





