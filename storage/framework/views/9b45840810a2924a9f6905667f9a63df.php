<section>
    <header class="mb-3">
        <h3 class="h5">Actualizar contraseña</h3>
        <p class="text-muted mb-0">Usa una contraseña larga y segura.</p>
    </header>

    <form method="post" action="<?php echo e(route('password.update')); ?>">
        <?php echo csrf_field(); ?>
        <?php echo method_field('put'); ?>

        <div class="mb-3">
            <label for="update_password_current_password" class="form-label">Contraseña actual</label>
            <input id="update_password_current_password" name="current_password" type="password" class="form-control <?php if($errors->updatePassword->has('current_password')): ?> is-invalid <?php endif; ?>" autocomplete="current-password" />
            <?php if($errors->updatePassword->has('current_password')): ?>
                <div class="invalid-feedback"><?php echo e($errors->updatePassword->first('current_password')); ?></div>
            <?php endif; ?>
        </div>

        <div class="mb-3">
            <label for="update_password_password" class="form-label">Nueva contraseña</label>
            <input id="update_password_password" name="password" type="password" class="form-control <?php if($errors->updatePassword->has('password')): ?> is-invalid <?php endif; ?>" autocomplete="new-password" />
            <?php if($errors->updatePassword->has('password')): ?>
                <div class="invalid-feedback"><?php echo e($errors->updatePassword->first('password')); ?></div>
            <?php endif; ?>
        </div>

        <div class="mb-3">
            <label for="update_password_password_confirmation" class="form-label">Confirmar contraseña</label>
            <input id="update_password_password_confirmation" name="password_confirmation" type="password" class="form-control <?php if($errors->updatePassword->has('password_confirmation')): ?> is-invalid <?php endif; ?>" autocomplete="new-password" />
            <?php if($errors->updatePassword->has('password_confirmation')): ?>
                <div class="invalid-feedback"><?php echo e($errors->updatePassword->first('password_confirmation')); ?></div>
            <?php endif; ?>
        </div>

        <div class="d-flex align-items-center gap-3">
            <button type="submit" class="btn btn-primary">Guardar</button>

            <?php if(session('status') === 'password-updated'): ?>
                <span class="text-success">Guardado.</span>
            <?php endif; ?>
        </div>
    </form>
</section>
<?php /**PATH C:\xampp\htdocs\DAW_EJERCICIOS\DWES\2eva\Crud-laravel\resources\views/profile/partials/update-password-form.blade.php ENDPATH**/ ?>