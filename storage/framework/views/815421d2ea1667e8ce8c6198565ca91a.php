<?php $__env->startSection('content'); ?>
<div class="container">
    <h1>Detalhes do Produto</h1>

    <div class="mb-3">
        <strong>Nome:</strong>
        <p><?php echo e($produto->nome); ?></p>
    </div>

    <div class="mb-3">
        <strong>Preço:</strong>
        <p>R$ <?php echo e(number_format($produto->preco, 2, ',', '.')); ?></p>
    </div>

    <div class="mb-3">
        <strong>Descrição:</strong>
        <p><?php echo e($produto->descricao ?? 'Sem descrição'); ?></p>
    </div>

    <a href="<?php echo e(route('produtos.index')); ?>" class="btn btn-secondary">Voltar</a>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\gabi\Downloads\QSDib2025\resources\views/produtos/show.blade.php ENDPATH**/ ?>