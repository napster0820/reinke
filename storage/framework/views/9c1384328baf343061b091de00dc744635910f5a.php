<?php $__env->startSection('title', 'Iniciar sesión'); ?>

<?php $__env->startSection('content'); ?>
    <div class="container h-100">
        <div class="row">
            <div class="wapper-login">
                <div class="bg_account">
                    <form action="">
                        <h2 class="text-center">Iniciar sesión</h2>
                        <i class="fas fa-user-circle fa-7x"></i>
                        <input type="text" class="form-control form-control" placeholder="Email" required autofocus>
                        <input type="password" class="form-control form-control" placeholder="Password" required>
                        <br>
                    <a href="<?php echo e(url('datos')); ?>" class="btn btn-primary btn-block" type="submit">Ingresar</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\reinke\resources\views/welcome.blade.php ENDPATH**/ ?>