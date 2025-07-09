<p>
    Nome: <input type="text" name="nome" value="<?php echo e(old('nome', $pessoa->nome ?? '')); ?>">
</p>
<p>
    Email: <input type="email" name="email" value="<?php echo e(old('email', $pessoa->email ?? '')); ?>">
</p>
<p>
    Telefone: <input type="text" name="telefone" value="<?php echo e(old('telefone', $pessoa->telefone ?? '')); ?>">
</p>
<?php /**PATH C:\Users\gabi\Downloads\QSDib2025\resources\views/pessoas/form.blade.php ENDPATH**/ ?>