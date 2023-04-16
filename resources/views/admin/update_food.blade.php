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
  
    <form action="{{url('editfood',$data->id)}}" method="POST" enctype="multipart/form-data">
        @csrf

        <div style="padding:15px;">
            <label style="display: inline-blocks; width: 200px;">Food Name</label>
            <input type="text" name="fname"  value={{$data->food_name}} >
        </div>

        <div style="padding:15px;">
            <label style="display: inline-blocks; width: 200px;">Food price</label>
            <input type="number" name="fprice"  value={{$data->fprice}}>
        </div>

        <div style="padding:15px;">
            <label style="display: inline-blocks; width: 200px;">food Image</label>
            <img height="100" width="100" src="roomimage/{{$data->fimage}}">
        </div>

        <div style="padding:15px;">
            <label style="display: inline-blocks; width: 300px;">Change image</label>
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