<?php $__env->startSection('title', 'Registro'); ?>

<?php $__env->startSection('content'); ?>
    <div id="bg-register" class="container-fluid">
       <div class="row">
            <div class="col-8">
                 <img class="img-fluid" src="images/new_bg_register_reinke.jpg" alt="">
            </div>
            <div class="col-4">
                <div class="wapper-register">
                    <h2>Registro</h2>
                    <form action="#" method="POST">
                        <?php echo csrf_field(); ?>
                        <div class="form-group">
                            <label for="name">Nombre:</label>
                            <input type="name" class="form-control" id="name" placeholder="Nombre" name="name" required maxlength="100">
                        </div>
                        <div class="form-group">
                            <label for="email">Correo:</label>
                            <input type="email" class="form-control" id="email" placeholder="Correo" name="email" required maxlength="100">
                        </div>
                        <div class="form-group">
                            <label for="pwd">Contraseña:</label>
                            <input type="password" class="form-control" id="pwd" placeholder="Contraseña" name="pswd" required maxlength="255">
                        </div>
                        <div class="form-group">
                            <label for="pwd">Confirmar contraseña:</label>
                            <input type="password" class="form-control" id="pwd" placeholder="Confirmar contraseña" name="pswd" required maxlength="255">
                        </div>
                        <div class="form-group form-check">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" name="privacidad"> Acepto las politicas
                            </label>
                        </div>
                            <button class="btn btn-primary btn-block" type="submit">Registrar</button>
                    </form>
                </div>
             </div>   
       </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\reinke\resources\views/register.blade.php ENDPATH**/ ?>