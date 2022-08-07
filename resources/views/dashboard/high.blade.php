<div class="wrapper">
    <div class="container-fluid">

        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <div class="btn-group pull-right">
                        <ol class="breadcrumb hide-phone p-0 m-0">
                            <li class="breadcrumb-item"><a href="/admin">Dashboard</a></li>
                            <li class="breadcrumb-item active">Pre-School</li>
                        </ol>
                    </div>
                    <h4 class="page-title">All High School Applicants</h4>
                </div>
            </div>
        </div>

        <!-- end page title end breadcrumb -->

        <div class="row">
            <div class="col-12">
                <div class="card m-b-30">
                    <div class="card-body">

                        <h4 class="mt-0 header-title">Complete List</h4>
                        <p></p>
                        <div class="table-rep-plugin">
                            <div class="table-responsive b-0" data-pattern="priority-columns">
                                <table id="tech-companies-1" class="table  table-striped">
                                    <thead>
                                    <tr>
                                        <!--<th>Company</th> -->
                                        <th data-priority="1">App ID</th>
                                        <th data-priority="1">Parent</th>
                                        <th data-priority="1">Email</th>
                                        <th data-priority="1">Mobile</th>
                                        <th data-priority="3">Name</th>
                                        <th data-priority="1">Surname</th>
                                        <th data-priority="3">Grade</th>
                                        <th data-priority="3">Gender</th>
                                        <th data-priority="6">D.O.B</th>
                                        <th data-priority="6">Enrol Type</th>
                                        <th data-priority="6">Branch</th>
                                        <th data-priority="6">City</th>
                                        <th data-priority="1">ID Upload</th>
                                        <th data-priority="3">Date</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach($highs as $high)
                                        <tr>
                                            <th>{{ $high->id }}</th>
                                            <td>{{ $high->name }}</td>
                                            <td>{{ $high->email }}</td>
                                            <td>{{ $high->mobile }}</td>
                                            <td> {{ $high->childfirstname }} </td>
                                            <td> {{ $high->childlastname  }} </td>
                                            <td> {{ $high->grade }} </td>
                                            <td> {{ $high->gender  }} </td>
                                            <td> {{ $high->DOB  }}</td>
                                            <td> {{ $high->enrol_type }}</td>
                                            <td> {{ $high->school_branch  }}</td>
                                            <td> {{ $high->city }}</td>
                                            <td><button class="btn-outline-info"><a target="_blank" href="{{ url("storage/uploads/ids/".$high->scannedidpassport) }}">View</a></button></td>
                                            <td> {{ $high->created_at->diffForHumans() }} </td>
                                        </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>

                        </div>

                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->

    </div> <!-- end container -->
</div>
<!-- end wrapper -->
