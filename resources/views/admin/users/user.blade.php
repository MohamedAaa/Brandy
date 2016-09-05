@extends('admin.master')

@section('title')
	Users
@endsection

@section('content')
	 <div class="content-wrapper">

        <section class="content">
         <div class="row">
            <div class="col-xs-12">

              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">All Users</h3>
                  

                  <a href="{{url('admins/users/create')}}" class="btn btn-info" style="float:right">Add</a>
                </div><!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                  <table class="table table-hover">
                    <tbody>
                    	<tr>
	                      <th>ID</th>
                        <th>Name</th>
                        <th>E-mail</th>
	                      <th>Option</th>
	                    </tr>
                      <?php $i=1 ; ?>
	                    @foreach($users as $user)

  	                    <tr>
  	                      <td>{{ $i++ }}</td>
                          <td>{{ $user->name }}</td>
                          <td>{{ $user->email }}</td>
  	                      <td>
                            {{ Form::open(['method'=>'DELETE','action'=>['HomeController@destroy',$user->id]]) }}
                            <a href="{{ url('admins/users/'.$user->id.'/edit')}}" class="btn btn-primary ">Edit</a> -
                            <button class="btn btn-danger ">Delete
                            </button>
                            {{ Form::close() }}
                          </td>
  	                    </tr>

	                    @endforeach
                  	</tbody>
                  </table>
                      {!! $users->links() !!}
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div>

          </div>

        </section>

        </div>
@endsection
