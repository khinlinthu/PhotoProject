@extends('backend')

@section('content')

  <main class="app-content">
    <div class="app-title">
      <div>
        <h1><i class="fa fa-dashboard"></i> Blank Page</h1>
        <p>Start a beautiful journey here</p>
      </div>
      <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
        <li class="breadcrumb-item"><a href="{{route('photocontest.index')}}">Blank Page</a></li>
      </ul>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="tile">
          <h2 class="d-inline-block">User List</h2>
          
          <table class="table mt-3 table-bordered dataTable">
            <thead>
                @php
                    $num = 1;
                @endphp
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>E-mail</th>
                    <th>Phone</th>
                    <th>Role</th>
                    <th>Action</th>
                    
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $num++ }}</td>
                        <td>{{ $user->name }}</td>
                        <td>
                            <span class="text-dark">{{ $user->email }}</span>
                        </td>
                        <td>{{ $user->phone }}</td>
                        <td>
                            <span class="badge badge-dark">{{ $user->getRoleNames()[0] }}</span>
                        </td>
                        <td>
                            <div class="btn-group btn-group-sm" role="group" aria-label="...">
                                <a href="{{ route('user.show', $user->id) }}" class="btn btn-primary">Detail</a>
                                <a href="{{ route('user.role', $user->id) }}" class="btn btn-info">Manage Role</a>
                           
                        
                           <form method="post" action="{{route('user.destroy',$user->id)}}" class="d-inline-block" onsubmit="return confirm('Are you Sure to Delete?')">
		                    @csrf
		                    @method('DELETE')
		                    <input type="submit" name="btnsubmit" value="Delete" class="btn btn-danger">
		                  </form>  
		                   </div>                       
                        <td>
                    </tr>
                @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </main>
@endsection

@section('script')
  <script type="text/javascript" src="{{asset('backend_asset/js/plugins/jquery.dataTables.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('backend_asset/js/plugins/dataTables.bootstrap.min.js')}}"></script>
  <script type="text/javascript">
    $('.dataTable').DataTable();
  </script>
@endsection