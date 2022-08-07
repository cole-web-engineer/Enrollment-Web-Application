<html>
<?php echo $__env->make('adminpartials.head', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<body>


<?php echo $__env->yieldContent('content'); ?>


<?php echo $__env->make('adminpartials.scripts', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>

</body>

</html>