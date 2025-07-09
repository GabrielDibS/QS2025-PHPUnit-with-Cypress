<h1>Meu Carrinho</h1>

<ul>
    <?php $__currentLoopData = $carrinho->itens; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li>
            <?php echo e($item->produto->nome); ?> - <?php echo e($item->quantidade); ?> x R$ <?php echo e(number_format($item->produto->preco, 2, ',', '.')); ?>

            <form action="<?php echo e(route('carrinho.remover', $item->id)); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <?php echo method_field('DELETE'); ?>
                <button type="submit">Remover</button>
            </form>
        </li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php if($carrinho): ?>
        <?php $__currentLoopData = $carrinho->itens; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php else: ?>
        <p>O carrinho está vazio.</p>
    <?php endif; ?>
</ul>

<p>
    <strong>Total: R$ 
        <?php echo e(number_format($carrinho->itens->sum(fn($item) => $item->produto->preco * $item->quantidade), 2, ',', '.')); ?>

    </strong>
</p>
<?php /**PATH C:\Users\gabi\Downloads\QSDib2025\resources\views/carrinho/view.blade.php ENDPATH**/ ?>