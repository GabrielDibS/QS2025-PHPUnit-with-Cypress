

<?php $__env->startSection('content'); ?>
<div class="container mt-4">
    <h2>Lista de Empresas</h2>
    <a href="<?php echo e(route('empresas.criar')); ?>" class="btn btn-success mb-3">Nova Empresa</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nome</th>
                <th>CNPJ</th>
                <th>Email de Contato</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $empresas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $empresa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($empresa->nome); ?></td>
                    <td><?php echo e($empresa->cnpj); ?></td>
                    <td><?php echo e($empresa->email_contato); ?></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\gabi\Downloads\QSDib2025\resources\views/empresas/list.blade.php ENDPATH**/ ?>