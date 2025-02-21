<?php $__env->startSection('template_title'); ?>
    Condiciones
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                <?php echo e(__('Condiciones')); ?>

                            </span>

                             <div class="float-right">
                                <a href="<?php echo e(route('condiciones.create')); ?>" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  <?php echo e(__('Create New')); ?>

                                </a>
                              </div>
                        </div>
                    </div>
                    <?php if($message = Session::get('success')): ?>
                        <div class="alert alert-success m-4">
                            <p><?php echo e($message); ?></p>
                        </div>
                    <?php endif; ?>

                    <div class="card-body bg-white">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover table-success table-bordered border-success">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>

									<th >Nombre</th>
									<th >Descripcion</th>

                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $condiciones; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $condicione): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e(++$i); ?></td>

										<td ><?php echo e($condicione->nombre); ?></td>
										<td ><?php echo e($condicione->descripcion); ?></td>

                                            <td>
                                                <form action="<?php echo e(route('condiciones.destroy', $condicione->id)); ?>" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="<?php echo e(route('condiciones.show', $condicione->id)); ?>"><i class="fa fa-fw fa-eye"></i> <?php echo e(__('Show')); ?></a>
                                                    <a class="btn btn-sm btn-success" href="<?php echo e(route('condiciones.edit', $condicione->id)); ?>"><i class="fa fa-fw fa-edit"></i> <?php echo e(__('Edit')); ?></a>
                                                    <?php echo csrf_field(); ?>
                                                    <?php echo method_field('DELETE'); ?>
                                                    <button type="submit" class="btn btn-danger btn-sm" onclick="event.preventDefault(); confirm('Are you sure to delete?') ? this.closest('form').submit() : false;"><i class="fa fa-fw fa-trash"></i> <?php echo e(__('Delete')); ?></button>
                                                </form>
                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <?php echo $condiciones->withQueryString()->links(); ?>

            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\personas\resources\views/condicione/index.blade.php ENDPATH**/ ?>