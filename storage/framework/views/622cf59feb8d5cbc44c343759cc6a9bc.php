

<?php $__env->startSection('titulo', 'Editar Alquiler'); ?>

<?php $__env->startSection('volver'); ?>
<a href="<?php echo e(route('alquileres')); ?>">&#11013; Volver</a>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('form'); ?>
<form method="post" action="<?php echo e(route('editAlquiler')); ?>">
    <?php echo csrf_field(); ?>
    <input type="hidden" value="<?php echo e($alquiler->id); ?>" name="id">

    <div class="form-row">
        <div class="form-element">
            <label for="usuario">Usuario</label>
            <select class="inputMod form-input" name="usuario" id="usuario">
                <?php $__currentLoopData = $usuarios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $usuario): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($usuario->id); ?>" <?php if($alquiler->usuario->id == $usuario->id) echo 'selected' ?>><?php echo e($usuario->nombreusuario); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>
        <div class="form-element">
            <label for="libro">Libro</label>
            <select class="inputMod form-input" name="libro" id="libro">
                <?php $__currentLoopData = $libros; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $libro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($libro->id); ?>" <?php if($alquiler->libro->id == $libro->id) echo 'selected' ?>><?php echo e($libro->titulo); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>
    </div>

    <div class="form-row">
        <div class="form-element">
            <label for="fechprestamo">Fecha de Préstamo</label>
            <input type="date" name="fechprestamo" id="fechprestamo" class="inputMod form-input" value="<?php echo e($alquiler->fechprestamo); ?>">
        </div>
        <div class="form-element">
            <label for="fechdevolucion">Fecha de Devolución</label>
            <input type="date" name="fechdevolucion" id="fechdevolucion" class="inputMod form-input" value="<?php echo e($alquiler->fechdevolucion); ?>">
        </div>
    </div>

    <div class="form-row">
        <div class="form-element">
            <input type="submit" value="Guardar cambios" class="botonMod">
        </div>
    </div>
    
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('plantillas.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Laravel\biblioteca\resources\views/paginas/edit/editalquiler.blade.php ENDPATH**/ ?>