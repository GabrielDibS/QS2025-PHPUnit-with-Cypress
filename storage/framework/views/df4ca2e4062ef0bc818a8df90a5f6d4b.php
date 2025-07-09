<?php $__env->startSection('content'); ?>
<div class="container">
    <h1>Produtos</h1>
    <a href="<?php echo e(route('produtos.create')); ?>" class="btn btn-primary mb-3">Novo Produto</a>

    <?php if(session('success')): ?>
        <div class="alert alert-success"><?php echo e(session('success')); ?></div>
    <?php endif; ?>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Preço</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $produtos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $produto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($produto->nome); ?></td>
                <td>R$ <?php echo e(number_format($produto->preco, 2, ',', '.')); ?></td>
                <td>
                    <a href="<?php echo e(route('produtos.show', $produto)); ?>" class="btn btn-info btn-sm">Ver</a>
                    <a href="<?php echo e(route('produtos.edit', $produto)); ?>" class="btn btn-warning btn-sm">Editar</a>
                    <form action="<?php echo e(route('produtos.destroy', $produto)); ?>" method="POST" style="display:inline;">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <button class="btn btn-danger btn-sm" onclick="return confirm('Tem certeza?')">Excluir</button>
                    </form>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\gabi\Downloads\QSDib2025\resources\views/produtos/index.blade.php ENDPATH**/ ?>