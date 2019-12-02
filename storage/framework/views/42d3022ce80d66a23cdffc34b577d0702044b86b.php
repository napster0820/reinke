<?php if(Session::has('errorAccess')): ?>
<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <?php echo e(Session::get('errorAccess')); ?>

    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<?php endif; ?><?php /**PATH C:\xampp\htdocs\reinke\resources\views/alerts/message_login.blade.php ENDPATH**/ ?>