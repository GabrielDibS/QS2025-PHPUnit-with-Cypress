<?php $__env->startSection('content'); ?>
<h2>Pessoas</h2>
<a href="<?php echo e(route('pessoas.create')); ?>">Nova Pessoa</a>
<?php if(session('success')): ?>
    <p><?php echo e(session('success')); ?></p>
<?php endif; ?>
<table border="1">
    <tr>
        <th>Nome</th>
        <th>Email</th>
        <th>Telefone</th>
        <th>Ações</th>
    </tr>
    <?php $__currentLoopData = $pessoas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pessoa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <td><?php echo e($pessoa->nome); ?></td>
        <td><?php echo e($pessoa->email); ?></td>
        <td><?php echo e($pessoa->telefone); ?></td>
        <td>
            <a href="<?php echo e(route('pessoas.edit', $pessoa)); ?>">Editar</a>
            <form action="<?php echo e(route('pessoas.destroy', $pessoa)); ?>" method="POST" style="display:inline">
                <?php echo csrf_field(); ?>
                <?php echo method_field('DELETE'); ?>
                <button type="submit">Excluir</button>
            </form>
        </td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\gabi\Downloads\QSDib2025\resources\views/pessoas/index.blade.php ENDPATH**/ ?>