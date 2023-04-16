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
                        <h6 class="m-0 font-weight-bold text-primary">food List</h6>
                    </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" >
                                        <tr>
                                            <th>Food image</th>
                                            <th>food name</th>
                                            <th>Food Price</th>
                                            <th>Update</th>
                                            <th>Delete</th>
                                        </tr>

                                        @foreach($data as $food)
                                    
                                        <tr >
                                            <td><img height="100" width="100" src="roomimage/{{$food->fimage}}"></td>
                                            <td>{{$food->food_name}}</td>
                                            <td>Rs{{$food->fprice}}</td>
                                            <td><a class="btn btn-primary" href="{{url('updatefood',$food->id)}}">update</a></td>
                                            <td><a class="btn btn-danger" onclick ="return confirm('are you sure to delete room ')" href="{{url('deletefood',$food->id)}}">Delete</a></td>
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