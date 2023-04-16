@extends('admin.layout')
@section('content')

<div class="container" align="center" style="padding-top: 70px">

    @if(session()->has('message'))
    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert">
            x
        </button>
        {{session()->get('message')}}
    </div>
    @endif
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Add Room</h6>
    </div>
    <form action="{{url('upload_room')}}" method="POST" enctype="multipart/form-data">
        @csrf

        <div style="padding:15px;">
            <label style="display: inline-blocks; width: 200px;">Room Name</label>
            <input type="text" name="name" placeholder="Enter the Room name" required="">
        </div>

        <div style="padding:15px;">
            <label style="display: inline-blocks; width: 200px;">Price</label>
            <input type="number" name="price" placeholder="Enter the price" required="">
        </div>

        <div style="padding:15px;">
            <label for="roomdetail" style="display: inline-blocks; width: 200px;">Detail </label>
            <textarea  name="detail" placeholder="Enter detail here..."></textarea>
        </div>

        <div style="padding:15px;">
            <label style="display: inline-blocks; width: 300px;">Room Image</label>
            <input type="file" name="file" required="" >
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