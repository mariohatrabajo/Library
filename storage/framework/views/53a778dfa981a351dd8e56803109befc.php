

<?php $__env->startSection('titulo', 'Alquileres'); ?>

<?php $__env->startSection('btn-busqueda'); ?>
<form class="busqueda" action="<?php echo e(route('buscarAlquiler')); ?>" method="get">
    <input type="text" class="inputMod inputBusqueda" name="busqueda">
    <button type="submit" class='boton buscar'><span class="rotate45">&#9906;</span></button>
</form>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('tabla'); ?>
<form method="get" action="<?php echo e(route('addAlquiler')); ?>">
    <table>
        <thead>
            <tr>
                <th class='w300'>Usuario</th>
                <th class='w300'>Libro</th>
                <th class='w150'>Fecha de Préstamo</th>
                <th class='w150'>Fecha de Devolución</th>
                <th class='acciones'>Acciones</th>
            </tr>
        </thead>
        <tbody class="scroll">
            <?php $__currentLoopData = $alquileres; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $alquiler): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                <td class='w300'><?php echo e($alquiler->usuario->nombreusuario); ?></td>
                <td class='w300'><?php echo e($alquiler->libro->titulo); ?></td>
                <td class='w150'><?php echo e($alquiler->fechprestamo); ?></td>
                <td class='w150'><?php echo e($alquiler->fechdevolucion); ?></td>
                <td class='acciones'>
                    <div>
                        <a href="<?php echo e(route('removeAlquiler', $alquiler->id)); ?>" class='boton eliminar'>&#10008;</a>
                        <a href="<?php echo e(route('editAlquilerForm', $alquiler->id)); ?>" class='boton editar'>&#128393;</a>
                    </div>
                </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
        <tbody>
            <tr class="nuevoLibro">
                <td class='w300'><select class="input inputAutor" name="usuario">
                    <option value="-1">Elige el usuario</option>
                    <?php $__currentLoopData = $usuarios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $usuario): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($usuario->id); ?>"><?php echo e($usuario->nombreusuario); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select></td>
                <td class='w300'><select class="input inputAutor" name="libro">
                    <option value="-1">Elige el libro</option>
                    <?php $__currentLoopData = $libros; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $libro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($libro->id); ?>"><?php echo e($libro->titulo); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select></td>
                <td class='w150'><input class="input" type='date' name="fechprestamo"></td>
                <td class='w150'><input class="input" type='date' name="fechdevolucion"></td>
                <td class="acciones">
                    <div>
                        <input type="submit" value="🞥" class='boton anadir'>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('plantillas.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Laravel\biblioteca\resources\views/paginas/alquileres.blade.php ENDPATH**/ ?>