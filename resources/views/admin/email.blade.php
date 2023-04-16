@extends('admin.layout')
@section('content') 
<div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Mail</h6>
                    </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    
                                        <tr>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Subject</th>
                                            <th>Message</th>
                                        </tr>
                                        @foreach($data as $email)

                                        <tr>
                                            <td>{{$email->yname}}</td>
                                            <td>{{$email->yemail}}</td>
                                            <td>{{$email->subject}}</td>
                                            <td>{{$email->message}}</td>
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