<?php $__env->startSection('title', 'Iniciar sesión'); ?>

<?php $__env->startSection('content'); ?>
    <div class="container h-100">
        <div class="row">
            <div class="wapper-login">
                <div class="bg_account">
                    <form action="<?php echo e(url('auth')); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <?php echo $__env->make('alerts.message_login', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <h2 class="text-center">Iniciar sesión</h2>
                        <i class="fas fa-user-circle fa-7x"></i>
                        <div class="form-group">
                            <label for="email">Correo:</label>
                            <input type="email" class="form-control form-control" placeholder="Correo" name="email" value="<?php echo e(old('correo')); ?>" maxlength="100" required autofocus>
                        </div>
                        <div class="form-group">
                            <label for="password">Contraseña:</label>
                            <input type="password" id="passoword" class="form-control form-control" placeholder="Contraseña" name="password" maxlength="100" required>
                        </div>
                        <br/>
                        <div class="form-group">
                            <button class="btn btn-primary btn-block" type="submit">Ingresar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\reinke\resources\views/auth/login.blade.php ENDPATH**/ ?>