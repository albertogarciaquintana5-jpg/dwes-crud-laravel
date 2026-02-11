

<?php $__env->startSection('content'); ?>
<div class="container py-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1>Mis Mascotas</h1>
        <a href="<?php echo e(route('pets.create')); ?>" class="btn btn-primary">+ Registrar mascota</a>
    </div>

    <?php if(session('success')): ?>
        <div class="alert alert-success"><?php echo e(session('success')); ?></div>
    <?php endif; ?>

    <?php if($pets->count()): ?>
        <div class="table-responsive">
            <table class="table table-striped align-middle">
                <thead>
                    <tr>
                        <th>Imagen</th>
                        <th>Nombre</th>
                        <th>Especie</th>
                        <th>Edad</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $pets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pet): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td style="width:100px">
                                <?php if($pet->image): ?>
                                    <img src="<?php echo e(asset('storage/' . $pet->image)); ?>" alt="<?php echo e($pet->name); ?>" class="img-thumbnail" style="max-width:80px">
                                <?php endif; ?>
                            </td>
                            <td><?php echo e($pet->name); ?></td>
                            <td><?php echo e($pet->species); ?></td>
                            <td><?php echo e($pet->age ?? '-'); ?></td>
                            <td class="text-end">
                                <a href="<?php echo e(route('pets.show', $pet)); ?>" class="btn btn-sm btn-outline-primary">Ver</a>
                                <a href="<?php echo e(route('pets.edit', $pet)); ?>" class="btn btn-sm btn-outline-secondary">Editar</a>
                                <form action="<?php echo e(route('pets.destroy', $pet)); ?>" method="POST" class="d-inline" onsubmit="return confirm('¿Estás seguro de que deseas eliminar esta mascota?');">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                    <button class="btn btn-sm btn-danger">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
        <?php echo e($pets->links()); ?>

    <?php else: ?>
        <div class="text-center py-5">
            <div style="font-size:4rem; margin-bottom:20px;">🐾</div>
            <h3 class="text-muted mb-2">Aún no tienes mascotas registradas</h3>
            <p class="text-muted mb-4">¡Registra a tu primer amigo animal ahora!</p>
            <a href="<?php echo e(route('pets.create')); ?>" class="btn btn-primary btn-lg">
                <i class="bi bi-plus-circle"></i> Registrar tu primera mascota
            </a>
        </div>
    <?php endif; ?>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\DAW_EJERCICIOS\DWES\2eva\Crud-laravel\resources\views/pets/index.blade.php ENDPATH**/ ?>