<?php $__env->startSection('content'); ?>

    <body class="image-container set-full-height" style="background-image: url('assets/img/bg1.jpg')">

        <!-- pachedu code -->
        <a href="/">
            <div class="logo-container">
                <div class="logo">
                    <img src="assets/img/new_logo.png">
                </div>
                <div class="brand">
                    <strong>Taal-NET Online Application</strong>
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
                            <form action="<?php echo e(route('applicant.submit')); ?>" method="post" enctype="multipart/form-data">

                                <?php echo csrf_field(); ?>

                                <!-- include header partial -->
                                <?php echo $__env->make('wizard.header', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                                <!-- Tab content -->
                                <div class="tab-content">

                                    <!-- start -->
                                    <?php echo $__env->make('wizard.start', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>

                                    <!-- parent -->
                                    <?php echo $__env->make('wizard.parent', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>

                                    <!-- child -->
                                    <?php echo $__env->make('wizard.child', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>

                                    <!-- enrollment -->
                                    <?php echo $__env->make('wizard.enrollment', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>

                                    <!-- uploads -->
                                    <?php echo $__env->make('wizard.uploads', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>

                                    <!-- finish -->
                                    <?php echo $__env->make('wizard.finish', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>

                                </div>
                                    <!-- Wizard Footer -->
                                    <?php echo $__env->make('wizard.footer', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                            </form>
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