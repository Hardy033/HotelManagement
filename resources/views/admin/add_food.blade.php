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
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Add Food</h6>
    </div>
    
    <form action="{{url('upload_food')}}" method="POST" enctype="multipart/form-data">
        @csrf

        <div style="padding:15px;">
            <label style="display: inline-blocks; width: 200px;">Food Name</label>
            <input type="text" name="fname" placeholder="Enter the food name" required="">
        </div>

        <div style="padding:15px;">
            <label style="display: inline-blocks; width: 200px;">Food price</label>
            <input type="number" name="fprice" placeholder="Enter the price" required="">
        </div>

        <div style="padding:15px;">
            <label style="display: inline-blocks; width: 300px;">Food Image</label>
            <input type="file" name="file" required="" >
        </div>

        <div style="padding:15px;">
            
            <input type="submit" style="color: black" class="btn btn-success">
        </div>
    </form>
                
</div>

<!-- Page level custom scripts -->

 @endsection