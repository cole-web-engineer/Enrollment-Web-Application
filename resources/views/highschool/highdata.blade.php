@extends('dashboard.datatable')

@section('content')

    <div class="wrapper">
        <div class="container-fluid">

            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <div class="btn-group pull-right">
                            <ol class="breadcrumb hide-phone p-0 m-0">
                                <li class="breadcrumb-item"><a href="/admin">Dashboard</a></li>
                                <li class="breadcrumb-item active">High School</li>
                            </ol>
                        </div>
                        <h4 class="page-title">All High School Applicants - Dynamic Data</h4>
                    </div>
                </div>
            </div>
            <!-- end page-title end-breadcrumb -->
            <div class="row">
                <div class="col-12">
                    <div class="card m-b-30">
                        <div class="card-body">

                            <h4 class="mt-0 header-title">Complete List</h4>
                            <p></p>

                            <table id="highdata" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                <tr>
                                    <th><b>No.</b></th>
                                    <th><b>Parent</b></th>
                                    <th><b>Email</b></th>
                                    <th><b>Phone</b></th>
                                    <th><b>Child Name</b></th>
                                    <th><b>Child Surname</b></th>
                                    <th><b>Grade</b></th>
                                    <th><b>Scholar</b></th>
                                    <th><b>Start Year</b></th>
                                    <th><b>Level</b></th>
                                    <th><b>Campus</b></th>
                                    <th><b>Date</b></th>
                                </tr>
                                </thead>
                                <tfoot>
                                <tr>
                                    <th><b>No.</b></th>
                                    <th><b>Parent</b></th>
                                    <th><b>Email</b></th>
                                    <th><b>Phone</b></th>
                                    <th><b>Child Name</b></th>
                                    <th><b>Child Surname</b></th>
                                    <th><b>Grade</b></th>
                                    <th><b>Scholar</b></th>
                                    <th><b>Start Year</b></th>
                                    <th><b>Level</b></th>
                                    <th><b>Campus</b></th>
                                    <th><b>Date</b></th>
                                </tr>
                                </tfoot>
                            </table>

                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->
        </div> <!-- end container -->
    </div>

    @endsection