<?php $__env->startSection('title','Trinan'); ?>

<?php $__env->startSection('content'); ?>

<link rel="stylesheet" href="<?php echo e(asset('css/principal.css')); ?>">
<div class="image-container">
    <div class="centered-content">
        <img src="<?php echo e(asset('imagenes/logototaltrinan.png')); ?>" alt="Imagen" class="centered-image">
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\personas\resources\views/welcome.blade.php ENDPATH**/ ?>