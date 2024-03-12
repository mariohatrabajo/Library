

<?php $__env->startSection('titulo', 'Editar Autor'); ?>

<?php $__env->startSection('tabla'); ?>
<form method="post" action="<?php echo e(route('editAutor')); ?>">
    <?php echo csrf_field(); ?>
    <input type="hidden" value="$autor->id">
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('plantillas.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Laravel\biblioteca\resources\views/paginas/editAutor.blade.php ENDPATH**/ ?>