<?php $__env->startSection('template_title'); ?>
    <?php echo e(__('Create')); ?> Condicione
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title"><?php echo e(__('Create')); ?> Condicione</span>
                    </div>
                    <div class="card-body bg-white">
                        <form method="POST" action="<?php echo e(route('condiciones.store')); ?>"  role="form" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>

                            <?php echo $__env->make('condicione.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\personas\resources\views/condicione/create.blade.php ENDPATH**/ ?>