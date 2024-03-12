

<?php $__env->startSection('titulo', 'Editar Autor'); ?>

<?php $__env->startSection('volver'); ?>
<a href="<?php echo e(route('autores')); ?>">&#11013; Volver</a>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('form'); ?>
<form method="post" action="<?php echo e(route('editAutor')); ?>">
    <?php echo csrf_field(); ?>
    <input type="hidden" value="<?php echo e($autor->id); ?>" name="id">

    <div class="form-row">
        <div class="form-element">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="nombre" class="inputMod form-input" value="<?php echo e($autor->nombre); ?>">
        </div>
        <div class="form-element">
            <label for="apellidos">Apellidos</label>
            <input type="text" name="apellidos" id="apellidos" class="inputMod form-input" value="<?php echo e($autor->apellidos); ?>">
        </div>
    </div>

    <div class="form-row">
        <div class="form-element">
            <label for="nacionalidad">Nacionalidad</label>
            <input type="text" name="nacionalidad" id="nacionalidad" class="inputMod form-input" value="<?php echo e($autor->nacionalidad); ?>">
        </div>
    </div>

    <div class="form-row">
        <div class="form-element">
            <label for="sexo">Sexo</label>
            <input type="text" name="sexo" id="sexo" class="inputMod form-input" value="<?php echo e($autor->sexo); ?>">
        </div>
        <div class="form-element">
            <label for="edad">Edad</label>
            <input type="number" name="edad" id="edad" class="inputMod form-input" value="<?php echo e($autor->edad); ?>">
        </div>
    </div>

    <div class="form-row">
        <div class="form-element">
            <input type="submit" value="Guardar cambios" class="botonMod">
        </div>
    </div>
    
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('plantillas.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Laravel\biblioteca\resources\views/paginas/edit/editAutor.blade.php ENDPATH**/ ?>