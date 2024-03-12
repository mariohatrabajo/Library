

<?php $__env->startSection('titulo', 'Editar Libro'); ?>

<?php $__env->startSection('volver'); ?>
<a href="<?php echo e(route('libros')); ?>">&#11013; Volver</a>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('form'); ?>
<form method="post" action="<?php echo e(route('editLibro')); ?>">
    <?php echo csrf_field(); ?>
    <input type="hidden" value="<?php echo e($libro->id); ?>" name="id">

    <div class="form-row">
        <div class="form-element">
            <label for="titulo">Título</label>
            <input type="text" name="titulo" id="titulo" class="inputMod form-input" value="<?php echo e($libro->titulo); ?>">
        </div>
    </div>

    <div class="form-row">
        <div class="form-element">
            <label for="descripcion">Descripción</label>
            <textarea name="descripcion" id="descripcion" class="inputMod form-input" rows="3"><?php echo e($libro->descripcion); ?></textarea>
        </div>
    </div>

    <div class="form-row">
        <div class="form-element">
            <label for="autor">Autor</label>
            <select class="inputMod form-input" name="autor" id="autor">
                <?php $__currentLoopData = $autores; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $autor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($autor->id); ?>" <?php if($libro->autor->id == $autor->id) echo 'selected' ?>><?php echo e($autor->nombre); ?> <?php echo e($autor->apellidos); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>
        <div class="form-element">
            <label for="categoria">Género</label>
            <input type="text" name="categoria" id="categoria" class="inputMod form-input" value="<?php echo e($libro->categoria); ?>">
        </div>
    </div>

    <div class="form-row">
        <div class="form-element">
            <label for="precio">Precio</label>
            <input type='number' name="precio" id="precio" class="inputMod form-input" value="<?php echo e($libro->precio); ?>" step="any" min="0" placeholder="Precio">
        </div>
    </div>

    <div class="form-row">
        <div class="form-element">
            <input type="submit" value="Guardar cambios" class="botonMod">
        </div>
    </div>
    
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('plantillas.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Laravel\biblioteca\resources\views/paginas/edit/editLibro.blade.php ENDPATH**/ ?>