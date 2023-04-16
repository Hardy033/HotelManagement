@extends('admin.layout')
@section('content')



    @if(session()->has('message'))
    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert">
            x
        </button>
        {{session()->get('message')}}
    </div>
    @endif

<div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Room List </h6>
                    </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <tr>
                                            
                                            <th>Room name</th>
                                            <th>Price</th>
                                            <th>Detail</th>
                                            <th>Room image</th>
                                            <th>Update</th>
                                            <th>Delete</th>
                                        </tr>

                                        @foreach($data as $room)
                                    
                                        <tr >
                                            <td>{{$room->room_name}}</td>
                                            <td>Rs{{$room->price}}</td>
                                            <td>{{$room->detail}}</td>
                                            <td><img height="100" width="100" src="roomimage/{{$room->image}}"></td>
                                            <td><a class="btn btn-primary" href="{{url('updateroom',$room->id)}}">update</a></td>
                                            <td><a class="btn btn-danger" onclick ="return confirm('are you sure to delete room ')" href="{{url('deleteroom',$room->id)}}">Delete</a></td>
                                        </tr>
                                        
                                        @endforeach
                                </table>
                            </div>
                        </div>
                
</div>

<script src="admin/vendor/chart.js/Chart.min.js"></script>

<!-- Page level custom scripts -->
<script src="admin/js/demo/chart-area-demo.js"></script>
<script src="admin/js/demo/chart-pie-demo.js"></script>

 @endsection