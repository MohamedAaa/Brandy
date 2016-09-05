@extends('admin.master')

@section('title')
	All Testimonial
@endsection

@section('content')
	 <div class="content-wrapper">

        <section class="content">

         <div class="row">
            <div class="col-xs-12">

              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">All Testimonials</h3>
                  <a href="{{url('admins/testimonials/create')}}" class="btn btn-info" style="float:right">Add</a>
                </div><!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                  <table class="table table-hover">
                    <tbody>
                    	<tr>
	                      <th>ID</th>
                        <th>Name</th>
                        <th>Text</th>
	                      <th>Option</th>
	                    </tr>
                      <?php $i=1 ; ?>
	                    @foreach($testimonials as $testimonial)
  	                    <tr>
  	                      <td>{{ $i++ }}</td>
                          <td><a href="{{ url('admins/testimonials/'.$testimonial->id) }}">{{ $testimonial->name }}</a></td>
                          <td>{{ substr($testimonial->text,0,100).'....' }}</td>
  	                      <td>
                            {{ Form::open(['method'=>'DELETE','action'=>['TestimonialsCtrl@destroy',$testimonial->id]]) }}
                            <a href="{{ url('admins/testimonials/'.$testimonial->id.'/edit')}}" class="btn btn-primary ">Edit</a> -
                            <button class="btn btn-danger ">Delete
                            </button>
                            {{ Form::close() }}
                          </td>
  	                    </tr>

	                    @endforeach
                  	</tbody>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div>

          </div>

        </section>

        </div>
@endsection
