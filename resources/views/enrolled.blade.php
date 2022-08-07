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
                        <div class="container">
                            <h3 class="h3"><i class="fa fa-check"></i> <i class="fa fa-check"></i> <i class="fa fa-check"></i> Thank You For Your Application <i class="fa fa-check"></i><i class="fa fa-check"></i><i class="fa fa-check"></i></h3>
                            <hr class="small">
                            <h4 class="h4"><i class="fa fa-info-circle"></i><i class="fa fa-info-circle"></i><i class="fa fa-info-circle"></i> <i>Kindly Check Your Email for Further Instructions !!!</i> <i class="fa fa-info-circle"></i><i class="fa fa-info-circle"></i><i class="fa fa-info-circle"></i></h4>
                            <hr class="small">
                            <p class="lead">
                                <i class="fa fa-quote-left"></i> Our Administrators will call you or SMS on the approval of your application.<br>
                                Expect A Response Within 48 hours !!! <i class="fa fa-quote-right"></i>
                            </p>
                            <p class="lead">
                                <h5 class="h5">Our Call Center Number : +27 11 568 9074 | +27 11 975 2771</h5>
                            </p>
                        </div>
                        <div class="container">
                            <a class="btn btn-info btn-md" href="http://www.taalct.co.za" style="text-decoration: none !important;">Website</a></button> | <a class="btn btn-primary btn-md" href="/" style="text-decoration: none !important;">Home</a> | <a class="btn btn-info btn-md" href="http://applytvet.taalct.co.za">TVET</a> | <a class="btn btn-primary btn-md" href="http://matric.taalct.co.za">Matric</a> | <a class="btn btn-info btn-md" href="https://boardingschoolsa.co.za">Boarding</a> | <a class="btn btn-primary btn-md" href="https://elearning.taalct.co.za">E-Learning</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer Finale -->
    @include('partials.footer')

    </body>

@endsection