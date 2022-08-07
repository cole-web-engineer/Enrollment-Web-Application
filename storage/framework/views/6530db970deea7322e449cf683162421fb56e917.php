<!-- Content Section Starts Here -->
<div class="wrapper">
    <div class="container-fluid">

        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <div class="btn-group pull-right">
                        <ol class="breadcrumb hide-phone p-0 m-0">
                            <li class="breadcrumb-item"><a href=""<?php echo e(url('/admin')); ?>>Home</a></li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Dashboard</h4>
                </div>
            </div>
        </div>

        <!-- end page title end breadcrumb -->

        <div class="row">
            <div class="col-md-6 col-xl-3">
                <div class="mini-stat clearfix bg-white">
                    <span class="mini-stat-icon"><i class="ti-briefcase"></i></span>
                    <div class="mini-stat-info text-right text-light">
                        <span class="counter text-white"> <?php echo e($count); ?> </span> Total Applicants
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-3">
                <div class="mini-stat clearfix bg-success">
                    <span class="mini-stat-icon"><i class="ti-user"></i></span>
                    <div class="mini-stat-info text-right text-light">
                        <span class="counter text-white"> <?php echo e($preschool); ?> </span> Total Preschool Applicants
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-3">
                <div class="mini-stat clearfix bg-orange">
                    <span class="mini-stat-icon"><i class="ti-user"></i></span>
                    <div class="mini-stat-info text-right text-light">
                        <span class="counter text-white"> <?php echo e($primary); ?> </span> Total Primary School Applicants
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-3">
                <div class="mini-stat clearfix bg-info">
                    <span class="mini-stat-icon"><i class="ti-user"></i></span>
                    <div class="mini-stat-info text-right text-light">
                        <span class="counter text-white"> <?php echo e($highschool); ?> </span> Total High School Applicants
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8">
                <div class="card card-sec m-b-30">
                    <div class="card-body">
                        <h4 class="mt-0 header-title">Applicants Traffic</h4>

                        <div id="morris-area-example" style="height: 300px"></div>

                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card card-sec m-b-30">
                    <div class="card-body">
                        <h4 class="mt-0 header-title">Applicants</h4>

                        <ul class="list-inline widget-chart m-t-20 text-center">
                            <li>
                                <h4 class=""><b>TBA</b></h4>
                                <p class="text-muted m-b-0">Year 2018</p>
                            </li>
                            <li>
                                <h4 class=""><b><?php echo e($onenine); ?></b></h4>
                                <p class="text-muted m-b-0">Year 2019</p>
                            </li>
                            <li>
                                <h4 class=""><b><?php echo e($twozero); ?></b></h4>
                                <p class="text-muted m-b-0">Year 2020</p>
                            </li>
                        </ul>

                        <div id="morris-bar-example" style="height: 300px"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">

            <div class="col-xl-8">
                <div class="card card-sec m-b-30">
                    <div class="card-body">
                        <h4 class="mt-0 m-b-15 header-title">Recent Candidates</h4>

                        <div class="table-responsive">
                            <table class="table table-hover mb-0">
                                <thead>
                                <tr class="titles">
                                    <th><b>ID</b></th>
                                    <th><b>Parent</b></th>
                                    <th><b>Mobile</b></th>
                                    <th><b>Name</b></th>
                                    <th><b>Surname</b></th>
                                    <th><b>Grade</b></th>
                                    <th><b>Branch</b></th>
                                    <th><b>Print</b></th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $__currentLoopData = $recs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rec): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td class="c-table__cell"><?php echo e($rec->id); ?></td>
                                        <td class="c-table__cell"><?php echo e($rec->name); ?></td>
                                        <td class="c-table__cell"><?php echo e($rec->mobile); ?></td>
                                        <td class="c-table__cell"><?php echo e($rec->childfirstname); ?></td>
                                        <td class="c-table__cell"><?php echo e($rec->childlastname); ?></td>
                                        <td class="c-table__cell"><?php echo e($rec->grade); ?></td>
                                        <td class="c_table__cell"><?php echo e($rec->school_branch); ?></td>
                                        <!--  <td class="c-table__cell"><span class="badge badge-warning"></span></td> -->
                                        <td> <a href="#"> PDF </a> </td>
                                    </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-4">
                <div class="card card-sec m-b-30">
                    <div class="card-body">
                        <h4 class="mt-0 header-title">Number of Applicants Per Branch</h4>

                        <ul class="list-inline widget-chart m-t-20 text-center">
                            <li>
                                <h4 class=""><b><?php echo e($glendale_count); ?></b></h4>
                                <p class="text-muted m-b-0">Glendale</p>
                            </li>
                            <li>
                                <h4 class=""><b><?php echo e($eastview_count); ?></b></h4>
                                <p class="text-muted m-b-0">Eastview</p>
                            </li>
                        </ul>

                        <ul class="list-inline widget-chart m-t-20 text-center">
                            <li>
                                <h4 class=""><b><?php echo e($kempton_count); ?></b></h4>
                                <p class="text-muted m-b-0">Kempton</p>
                            </li>
                            <li>
                                <h4 class=""><b><?php echo e($jhb_count); ?></b></h4>
                                <p class="text-muted m-b-0">Turffontein</p>
                            </li>
                            <li>
                                <h4 class=""><b><?php echo e($pretoria_count); ?></b></h4>
                                <p class="text-muted m-b-0">Pretoria</p>
                            </li>
                        </ul>
                        <!-- <div  style="height: 265px"></div> -->
                        <ul class="list-inline widget-chart m-t-20 text-center">
                            <li>
                                <h4 class=""><b><?php echo e($randburg_count); ?></b></h4>
                                <p class="text-muted m-b-0">Randburg</p>
                            </li>
                            <li>
                                <h4 class=""><b><?php echo e($midrand_count); ?></b></h4>
                                <p class="text-muted m-b-0">Midrand</p>
                            </li>
                            <li>
                                <h4 class=""><b><?php echo e($germiston_count); ?></b></h4>
                                <p class="text-muted m-b-0">Germiston</p>
                            </li>
                        </ul>
                        <!-- Another Section -->
                        <ul class="list-inline widget-chart m-t-20 text-center">
                            <li>
                                <h4 class=""><b><?php echo e($newhavard_count); ?></b></h4>
                                <p class="text-muted m-b-0">New Havard</p>
                            </li>
                            <li>
                                <h4 class=""><b><?php echo e($roodepoort_count); ?></b></h4>
                                <p class="text-muted m-b-0">Roodepoort</p>
                            </li>
                            <li>
                                <h4 class=""><b><?php echo e($hazyview_count); ?></b></h4>
                                <p class="text-muted m-b-0">Hazyview</p>
                            </li>
                        </ul>

                    </div>
                </div>
            </div>

        </div>
        <!-- end row -->

    </div> <!-- end container -->
</div>
<!-- end wrapper -->
<!-- And It Ends Here -->