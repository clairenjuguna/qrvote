@extends('admin.admin_master')
@section('admin')



<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->

        <!-- end page title -->




                <!-- end card -->
            </div>
            <!-- end col -->



            <!-- end col -->
        </div>
        <!-- end row -->

        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">




                        <body>
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-4 col-md-offset-4" style="margin-top:20px:">
                                        <h4>Welcome to dashboard you are logged in<h4>

                                            <table class="table">
                                                <thead>
                                                    <th>username</th>
                                                    <th>email</th>
                                                    <th>action</th>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>{{$data->username}}</td>
                                                        <td>{{$data->email}}</td>
                                           <td> <a href="logout">Logout</a></td>
                                         <hr>

                                        </div>
                                </div>
                            </div>


                          </body>
                    </div><!-- end card -->
                </div><!-- end card -->
            </div>
            <!-- end col -->

        </div>
        <!-- end row -->
    </div>

</div>
@endsection
