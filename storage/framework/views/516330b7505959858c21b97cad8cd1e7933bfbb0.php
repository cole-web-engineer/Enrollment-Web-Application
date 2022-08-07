<html>
<?php echo $__env->make('adminpartials.headdata', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<body>
<!-- Loader -->
<div id="preloader"><div id="status"><div class="spinner"></div></div></div>

<header id="topnav">

    <?php echo $__env->make('dashboard.topnav', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <?php echo $__env->make('dashboard.nav', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>

</header>

<?php echo $__env->yieldContent('content'); ?>

<?php echo $__env->make('adminpartials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('adminpartials.scriptsdata', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>

</body>

</html>