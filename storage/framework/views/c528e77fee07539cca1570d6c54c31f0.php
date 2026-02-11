<section>
    <header class="mb-3">
        <h3 class="h5">Eliminar cuenta</h3>
        <p class="text-muted mb-0">Esta acción es permanente. Introduce tu contraseña para confirmar.</p>
    </header>

    <form method="post" action="<?php echo e(route('profile.destroy')); ?>" onsubmit="return confirm('¿Seguro que quieres eliminar tu cuenta? Esta acción es permanente.');">
        <?php echo csrf_field(); ?>
        <?php echo method_field('delete'); ?>

        <div class="mb-3">
            <label for="password" class="form-label">Contraseña</label>
            <input id="password" name="password" type="password" class="form-control <?php if($errors->userDeletion->has('password')): ?> is-invalid <?php endif; ?>" placeholder="Contraseña" />
            <?php if($errors->userDeletion->has('password')): ?>
                <div class="invalid-feedback"><?php echo e($errors->userDeletion->first('password')); ?></div>
            <?php endif; ?>
        </div>

        <button type="submit" class="btn btn-danger">Eliminar cuenta</button>
    </form>
</section>
<?php /**PATH C:\xampp\htdocs\DAW_EJERCICIOS\DWES\2eva\Crud-laravel\resources\views/profile/partials/delete-user-form.blade.php ENDPATH**/ ?>