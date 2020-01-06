<?php $__env->startSection('title', 'Registro'); ?>

<?php $__env->startSection('content'); ?>
    <div id="bg-register" class="container-fluid">
       <div class="row">
            <div class="col-8">
                 <img class="img-fluid" src="images/new_bg_register_reinke.jpg" alt="Fondo Reinke Registro">
            </div>
            <div class="col-4">
                <div class="wapper-register">
                    <h2>Registro</h2>
                    <form action="<?php echo e(url('registro')); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <?php echo $__env->make('alerts.message_register_errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <div class="form-group">
                            <label for="name">Nombre:</label>
                            <input type="text" class="form-control" id="name" placeholder="Nombre" name="name" value="<?php echo e(old('name')); ?>" required minlength="2" maxlength="100" pattern="[/^\s/a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{3,100}" title="Espacio en blanco no valido">
                        </div>
                        <div class="form-group">
                            <label for="email">Correo:</label>
                            <input type="email" class="form-control" id="email" placeholder="Correo" name="email" value="<?php echo e(old('email')); ?>" required maxlength="100" pattern="[a-zA-Z0-9.+_-]+@[a-zA-Z0-9.-]+\.[a-zA-Z.-]+">
                        </div>
                        <div class="form-group">
                            <label for="password">Contraseña:</label>
                            <input type="password" class="form-control" id="password" placeholder="Contraseña" name="password" required maxlength="255">
                        </div>
                        <div class="form-group">
                            <label for="password_confirmation ">Confirmar contraseña:</label>
                            <input type="password" class="form-control" id="password_confirmation" placeholder="Confirmar contraseña" name="password_confirmation" required maxlength="255">
                        </div>
                        <div class="form-group form-check">
                            <label class="form-check-label">
                                <input id="btn_privacy" class="form-check-input" type="checkbox" value="<?php echo e(old('privacy')); ?>" name="privacy" required> Acepto a las <a href="<?php echo e(url("politica")); ?>") }}>políticas de privacidad y uso</a> del sistema.
                            </label>
                        </div>
                            <button id="btn_register" class="btn btn-primary btn-block" type="submit">Registrar</button>
                    </form>
                </div>
             </div>   
       </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scipts'); ?>
    ##parent-placeholder-daa97b9c5577f0c1889807cb7d908bbdc813da71##
    <script src="js/register_validate.js"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\reinke\resources\views/register.blade.php ENDPATH**/ ?>