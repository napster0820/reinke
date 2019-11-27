<?php $__env->startSection('title', 'Iniciar sesión'); ?>

<?php $__env->startSection('content'); ?>
    <div class="container h-100">
        <div class="row">
            <div class="wapper-login">
                <div class="bg_account">
                <form action="<?php echo e(url('auth')); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <h2 class="text-center">Iniciar sesión</h2>
                        <i class="fas fa-user-circle fa-7x"></i>
                        <input type="email" class="form-control form-control" placeholder="Correo" name="email" value="<?php echo e(old('correo')); ?>" maxlength="100" required autofocus>
                        <input type="password" class="form-control form-control" placeholder="Contraseña" name="password" maxlength="100" required>
                        <br>
                        <button class="btn btn-primary btn-block" type="submit">Ingresar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\reinke\resources\views/auth/login.blade.php ENDPATH**/ ?>