<!-- MENU Start -->
<div class="navbar-custom">
    <div class="container-fluid">
        <div id="navigation">
            <!-- Navigation Menu-->
            <ul class="navigation-menu">

                <li class="has-submenu">
                    <a href="<?php echo e(url('/admin')); ?>"><i class="ti-home"></i>Dashboard</a>
                </li>

                <li class="has-submenu">
                    <a href="#"><i class="ti-light-bulb"></i>Per Branch</a>
                    <ul class="submenu megamenu">
                        <li>
                            <ul>
                                <li><a href="<?php echo e(url('/kemptonpark')); ?>"> <i class="ti-target"></i> Kempton Park</a></li>
                                <li><a href="<?php echo e(url('/jhbbranch')); ?>"> <i class="ti-target"></i> Turffontein</a></li>
                                <li><a href="<?php echo e(url('/pretoriabranch')); ?>"> <i class="ti-target"></i> Pretoria</a></li>
                                <li><a href="<?php echo e(url('/glendalebranch')); ?>"> <i class="ti-target"></i> Glendale </a></li>
                            </ul>
                        </li>
                        <li>
                            <ul>
                                <li><a href="<?php echo e(url('/randburgbranch')); ?>"> <i class="ti-ink-pen"></i> Randburg - St Johns</a></li>
                                <li><a href="<?php echo e(url('/midrandbranch')); ?>"> <i class="ti-ink-pen"></i> Taal-NET Midrand</a></li>
                                <li><a href="<?php echo e(url('/germistonbranch')); ?>"> <i class="ti-ink-pen"></i> Germiston - Buela Park</a></li>
                                <li><a href="<?php echo e(url('/eastviewbranch')); ?>"> <i class="ti-ink-pen"></i> Eastview </a></li>
                            </ul>
                        </li>
                        <li>
                            <ul>
                                <li><a href="<?php echo e(url('/newhavardcollege')); ?>"> <i class="ti-target"></i> New Harvard College</a></li>
                                <li><a href="<?php echo e(url('/roodepoortbranch')); ?>"> <i class="ti-target"></i> Roodepoort</a></li>
                                <li><a href="<?php echo e(url('/hazyviewbranch')); ?>"> <i class="ti-target"></i> Hazyview</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li class="has-submenu">
                    <a href="#"><i class="ti-crown"></i>Pre-School</a>
                    <ul class="submenu">
                        <li><a href="<?php echo e(url('/preschool')); ?>"> <i class="mdi mdi-archive"></i> Static </a></li>
                        <li><a href="<?php echo e(url('/preschoolist')); ?>"> <i class="mdi mdi-apps"></i> Dynamic</a></li>
                    </ul>
                </li>

                <li class="has-submenu">
                    <a href="#"><i class="ti-bookmark-alt"></i>Primary School</a>
                    <ul class="submenu">
                        <li><a href="<?php echo e(url('/primary')); ?>"> <i class="mdi mdi-archive"></i> Static </a></li>
                        <li><a href="<?php echo e(url('/primarylist')); ?>"> <i class="mdi mdi-apps"></i> Dynamic</a></li>
                    </ul>
                </li>

                <li class="has-submenu">
                    <a href="#"><i class="ti-files"></i>High School</a>
                    <ul class="submenu">
                        <li><a href="<?php echo e(url('/highschool')); ?>"> <i class="mdi mdi-archive"></i> Static </a></li>
                        <li><a href="<?php echo e(url('/highschoolist')); ?>"> <i class="mdi mdi-apps"></i> Dynamic </a></li>
                    </ul>
                </li>

                <li class="has-submenu">
                    <a href="#"><i class="dripicons-user"></i>| Welcome, <strong><?php echo e(Auth::user()->name); ?></strong></a>
                </li>

            </ul>
            <!-- End navigation menu -->
        </div> <!-- end #navigation -->
    </div> <!-- end container -->
</div> <!-- end navbar-custom -->