<?php $__env->startSection('content'); ?>
<h2>Nova Pessoa</h2>
<form action="<?php echo e(route('pessoas.store')); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <?php echo $__env->make('pessoas.form', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <button type="submit">Salvar</button>
</form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\gabi\Downloads\QSDib2025\resources\views/pessoas/create.blade.php ENDPATH**/ ?>