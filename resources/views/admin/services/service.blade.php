@extends('admin.master')

@section('title')
	Services
@endsection

@section('content')
	 <div class="content-wrapper">

        <section class="content">

         <div class="row">
            <div class="col-xs-12">

              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">All Services</h3>
                  <a href="{{url('admins/services/create')}}" class="btn btn-info" style="float:right">Add</a>
                </div><!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                  <table class="table table-hover">
                    <tbody>
                    	<tr>
	                      <th>ID</th>
                        <th>Name</th>
                        <th>Content</th>
	                      <th>Option</th>
	                    </tr>
                      <?php $i=1 ; ?>
	                    @foreach($services as $service)

  	                    <tr>
  	                      <td>{{ $i++ }}</td>
                          <td>{{ $service->name }}</td>
                          <td>{{ $service->content }}</td>
  	                      <td>
                            {{ Form::open(['method'=>'DELETE','action'=>['ServicesCtrl@destroy',$service->id]]) }}
                            <a href="{{ url('admins/services/'.$service->id.'/edit')}}" class="btn btn-primary ">Edit</a> -
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
