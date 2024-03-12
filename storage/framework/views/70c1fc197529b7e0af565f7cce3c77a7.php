

<?php $__env->startSection('titulo', 'Editar Usuario'); ?>

<?php $__env->startSection('volver'); ?>
<a href="<?php echo e(route('usuarios')); ?>">&#11013; Volver</a>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('form'); ?>
<form method="post" action="<?php echo e(route('editUsuario')); ?>">
    <?php echo csrf_field(); ?>
    <input type="hidden" value="<?php echo e($usuario->id); ?>" name="id">

    <div class="form-row">
        <div class="form-element">
            <label for="nombreusuario">Nombre de Usuario</label>
            <input type="text" name="nombreusuario" id="nombreusuario" class="inputMod form-input" value="<?php echo e($usuario->nombreusuario); ?>">
        </div>
    </div>

    <div class="form-row">
        <div class="form-element">
            <label for="password">Contraseña</label>
            <input type="text" name="password" id="password" class="inputMod form-input" value="<?php echo e($usuario->password); ?>">
        </div>
    </div>

    <div class="form-row">
        <div class="form-element">
            <label for="telefono">Telefono</label>
            <input type="text" name="telefono" id="telefono" class="inputMod form-input" value="<?php echo e($usuario->telefono); ?>">
        </div>
        <div class="form-element">
            <label for="fechaentrega">Fecha de Entrega</label>
            <input type="date" name="fechaentrega" id="fechaentrega" class="inputMod form-input" value="<?php echo e($usuario->fechaentrega); ?>">
        </div>
    </div>

    <div class="form-row">
        <div class="form-element">
            <input type="submit" value="Guardar cambios" class="botonMod">
        </div>
    </div>
    
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('plantillas.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Laravel\biblioteca\resources\views/paginas/edit/editUsuario.blade.php ENDPATH**/ ?>