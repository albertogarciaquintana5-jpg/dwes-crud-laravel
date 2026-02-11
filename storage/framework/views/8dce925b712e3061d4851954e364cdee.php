

<?php $__env->startSection('content'); ?>
<div class="container py-4">
    <a href="<?php echo e(route('pets.index')); ?>" class="btn btn-outline-secondary mb-3">
        <i class="bi bi-arrow-left"></i> Volver
    </a>
    
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1 class="mb-4">
                <i class="bi bi-pencil-square"></i> Editar Mascota
            </h1>

            <div class="card shadow-sm">
                <div class="card-body">
                    <form action="<?php echo e(route('pets.update', $pet)); ?>" method="POST" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('PUT'); ?>
                        <?php echo $__env->make('pets._form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <div class="d-flex gap-2 mt-4">
                            <a href="<?php echo e(route('pets.index')); ?>" class="btn btn-secondary">
                                <i class="bi bi-x-circle"></i> Cancelar
                            </a>
                            <button type="submit" class="btn btn-primary">
                                <i class="bi bi-save"></i> Actualizar Mascota
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\DAW_EJERCICIOS\DWES\2eva\Crud-laravel\resources\views/pets/edit.blade.php ENDPATH**/ ?>