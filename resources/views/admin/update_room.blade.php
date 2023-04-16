@extends('admin.layout')
@section('content')
<div class="container" align="center" style="padding-top: 50px">
        @if(session()->has('message'))
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert">
                x
            </button>
            {{session()->get('message')}}
        </div>
        @endif
  
    <form action="{{url('editroom',$data->id)}}" method="POST" enctype="multipart/form-data">
        @csrf

        <div style="padding:15px;">
            <label style="display: inline-blocks; width: 200px;">Room Name:</label>
            <input type="text" name="name"  value={{$data->room_name}} >
        </div>

        <div style="padding:15px;">
            <label style="display: inline-blocks; width: 200px;">Price:</label>
            <input type="number" name="price"  value={{$data->price}}>
        </div>

        <div style="padding:15px;">
            <label for="roomdetail" style="display: inline-blocks; width: 200px;">Details:</label>
            <textarea  name="detail"  value={{$data->detail}}></textarea>
        </div>

        <div style="padding:23px;">
            <label style="display: inline-blocks; width: 300px;">Room Image:</label>
            <img height="100" width="100" src="roomimage/{{$data->image}}">
        </div>

        <div style="padding:15px;">
            <label style="display: inline-blocks; width: 300px;">Change image:</label>
            <input type="file" name="file" >
        </div>

        <div style="padding:15px;">
            
            <input type="submit" style="color: black" class="btn btn-success">
        </div>
</form>
</div>   

<script src="admin/vendor/chart.js/Chart.min.js"></script>

<!-- Page level custom scripts -->
<script src="admin/js/demo/chart-area-demo.js"></script>
<script src="admin/js/demo/chart-pie-demo.js"></script>

 @endsection