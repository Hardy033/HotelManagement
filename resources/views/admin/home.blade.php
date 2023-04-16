@extends('admin.layout')
@section('content')
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">User List</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">                 
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>Remove User</th>
                    </tr>
                    
                    @foreach($users as $data)
                    <tr>
                        @if ($data->usertype==0)
                            <td>{{$data->id-1}}</td>
                            <td>{{$data->name}}</td>
                            <td>{{$data->email}}</td>
                            <td>{{$data->phone}}</td>
                            <td>{{$data->address}}</td>
                            <td><a class="btn btn-danger" onclick ="return confirm('are you sure to remove user ')" href="{{url('deleteuser',$data->id)}}">Remove</a></td>
                        @endif
                        
                    </tr>


                   @endforeach
            </table>
        </div>
    </div>
</div>

                    

</div>
                <!-- Page level plugins -->
<script src="admin/vendor/chart.js/Chart.min.js"></script>

<!-- Page level custom scripts -->
<script src="admin/js/demo/chart-area-demo.js"></script>
<script src="admin/js/demo/chart-pie-demo.js"></script>

 @endsection