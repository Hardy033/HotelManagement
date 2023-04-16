@extends('admin.layout')
@section('content') 
<div class="card shadow mb-4" >
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Bookings</h6>
                    </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" style="padding:60px;">
                                    
                                        <tr>
                                            <th>Fname</th>
                                            <th>Lname</th>
                                            <th>Email</th>
                                            <th>Phone_no</th>
                                            <th>Check_in</th>
                                            <th>Check_out</th>
                                            <th>Room</th>
                                            <th>Adult</th>
                                            <th>child</th>
                                            <th>No_of_room</th>
                                            <th>status</th>
                                            <th>Price</th>
                                            <th>Cancel</th>
                                        </tr>

                                        
                                        @foreach($data as $resers)

                                        <?php
                                            $a = (int)$resers->check_in;
                                            $b = (int)$resers->check_out;
                                            $c = (int)$resers->number_of_room;
                                            $d = (int)$resers->Extra;
                                            $f = $a-$b;
                                            $Total = ($d + 5000)*$f*$c;
                                        ?>

                                        <tr>
                                            <td>{{$resers->fname}}</td>
                                            <td>{{$resers->lname}}</td>
                                            <td>{{$resers->email}}</td>
                                            <td>{{$resers->phone_no}}</td>
                                            <td>{{$resers->check_in}}</td>
                                            <td>{{$resers->check_out}}</td>
                                            <td>{{$resers->room}}</td>
                                            <td>{{$resers->adult}}</td>
                                            <td>{{$resers->child}}</td>
                                            <td>{{$resers->number_of_room}}</td>
                                            <td>{{$resers->status}}</td>
                                            <td>Rs<?php echo $Total; ?></td>
                                            <td><a class="bt btn-danger" onclick="return confirm('are you sure to cancel reservation')" href="{{url('cancel_reserve',$resers->id)}}">Cancel</a></td>
                                        </tr>

                                        @endforeach
                                </table>
                            </div>
                        </div>
                    </div>

    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    

    <!-- Bootstrap core JavaScript-->
    
    <!-- Core plugin JavaScript-->
    

    <!-- Custom scripts for all pages-->
    

    <!-- Page level plugins -->
    <script src="admin/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="admin/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="admin/js/demo/datatables-demo.js"></script>

@endsection