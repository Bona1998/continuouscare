<!DOCTYPE html>
 <html > 
    <?php echo $__env->make('layouts.frontend.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<body>
    <?php echo $__env->make('layouts.frontend.warp', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

     <?php echo $__env->yieldContent('content'); ?>

<?php echo $__env->make('layouts.frontend.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.frontend.footer-scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
 </body>
</html><?php /**PATH /home/creaspo/Projects/continuouscare/resources/views/layouts/mainlayout.blade.php ENDPATH**/ ?>