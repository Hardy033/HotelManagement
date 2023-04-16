@extends('admin.layout')
@section('content') 
<div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">feedback</h6>
                    </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    
                                        <tr>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Email</th>
                                            <th>Feedback</th>
                                            <th>star</th>
                                            
                                        </tr>
                                        @foreach($data as $feed)

                                        <tr>
                                            <td>{{$feed->fname}}</td>
                                            <td>{{$feed->lname}}</td>
                                            <td>{{$feed->email}}</td>
                                            <td>{{$feed->message}}</td>
                                            <td>{{$feed->star}}</td>
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