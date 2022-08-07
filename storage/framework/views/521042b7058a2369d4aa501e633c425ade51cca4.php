<!-- Author: Sir Collins Eel -->


<?php $__env->startSection('content'); ?>

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
                            <h3 class="h3"><i class="fa fa-times"></i> <i class="fa fa-times"></i> <i class="fa fa-times"></i> Payment Failed !!! <i class="fa fa-times"></i><i class="fa fa-times"></i><i class="fa fa-times"></i></h3>
                            
                            <br>

                            
                                <p class="lead">
                                <i class="fa fa-quote-left"></i> Our Administrators will call you or SMS on the follow-up of your application.<br>
                                Expect A Response Within 48 hours !!! OR <a href="https://www.taalnetschools.co.za/pay-application-fee/"> <strong><u>CLICK HERE TO TRY AGAIN</u></strong> </a> <i class="fa fa-quote-right"></i> 
                            </p>
                            

                            <br>

                        </div>

                        <hr style="width: 50%;">

                        <div class="container">
                            <!-- <h4 class="h5"><i class="fa fa-quote-left"></i> NB: Application Fee is Non-Refundable - Pay Now & Secure Your Place Today !!! <i class="fa fa-quote-right"></i></h4> -->
                            <a class="btn btn-info btn-md" href="http://www.taalct.co.za" style="text-decoration: none !important;">Website</a></button> | <a class="btn btn-primary btn-md" href="/" style="text-decoration: none !important;">Home</a> | <a class="btn btn-info btn-md" href="http://applytvet.taalct.co.za">TVET</a> | <a class="btn btn-primary btn-md" href="http://matric.taalct.co.za">Matric</a> | <a class="btn btn-info btn-md" href="https://boardingschoolsa.co.za">Boarding</a> | <a class="btn btn-primary btn-md" href="https://elearning.taalct.co.za">E-Learning</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer Finale -->
    <?php echo $__env->make('partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    </body>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>