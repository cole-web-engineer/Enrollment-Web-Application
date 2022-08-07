<!-- Author: Sir Collins Eel -->
@extends('layouts.app')

@section('content')

    <body class="image-container set-full-height" style="background-image: url('assets/img/bg2.jpg')">

    <!-- pachedu code -->
    <a href="/">
        <div class="logo-container">
            <div class="logo">
                <img src="assets/img/new_logo.png">
            </div>
            <div class="brand">
                <strong>Taal-NET | Apply |</strong>
            </div>
        </div>
    </a>

    <!-- Signature -->
    <a href="/" class="made-with-mk">
        <div class="brand">CH</div>
        <div class="made-with">Developed By <strong>Taal-NET</strong> </div>
    </a>

    <!-- Big Container -->
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
                <!-- Wizard Container -->
                <div class="wizard-container">
                    <div class="card wizard-card" data-color="blue" id="wizard">
                        <!-- Form Part -->
                        <div class="wizard-header">
                            <h2 class="wizard-title">
                                <i class="material-icons md-36">school</i>&nbsp;Taal-NET Group of Schools<i class="material-icons md-36">school</i>
                            </h2>
                            <hr style="width: 50%;">
                            <h5 class="strong"><i class="fa fa-quote-left"></i> PreSchool | Primary School | High School | Matric Upgrade | TVET | Distance Learning
                                <i class="fa fa-quote-right"></i></h5>
                        </div>
                        <!-- Content -->
                        <!-- 1st Row -->
                            <div class="container-fluid">
                                <div class="col-md-6 col-md-offset-3">

                                    <div class="col-md-6" style="padding-right: 50px;">
                                        <a href="/apply">
                                            <div class="choice" data-toggle="wizard-radio" rel="tooltip" title="To Apply for PreSchool, Primary & High School">
                                                <div class="icon">
                                                    <i class="material-icons">school</i>
                                                </div>
                                                <h5 class="h5">PreSchool Primary High School </h5>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-6" style="padding-left: 50px;">
                                        <a href="https://matric.taalct.co.za">
                                            <div class="choice" data-toggle="wizard-radio" rel="tooltip" title="Select this if you want to Upgrade Your Matric.">
                                                <input type="radio" name="job" value="Code">
                                                <div class="icon">
                                                    <i class="material-icons">local_library</i>
                                                </div>
                                                <h5 class="h5">Matric Rewrite (Upgrade)</h5>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <!-- end of first row -->
                                <!-- Last Row -->
                                <br>
                                <div class="col-sm-6 col-sm-offset-3">
                                    <div class="col-sm-12">
                                        <a href="http://applytvet.taalct.co.za">
                                            <div class="choice" data-toggle="wizard-radio" rel="tooltip" title="Select this option if you want to do Engineering or Business Courses.">
                                                <input type="radio" name="job" value="Code">
                                                <div class="icon">
                                                    <i class="material-icons">layers</i>
                                                </div>
                                                <h5 class="h5">Engineering Courses & Business Courses</h5>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        <!-- end of last row -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer Finale -->
    @include('partials.footer')

    </body>

@endsection