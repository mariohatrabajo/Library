

<?php $__env->startSection('titulo', 'Libros'); ?>

<?php $__env->startSection('btn-busqueda'); ?>
<form class="busqueda" action="<?php echo e(route('buscarLibro')); ?>" method="get">
    <input type="text" class="inputMod inputBusqueda" name="busqueda">
    <button type="submit" class='boton buscar'><span class="rotate45">&#9906;</span></button>
</form>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('tabla'); ?>
<form method="get" action="<?php echo e(route('addLibro')); ?>">
    <table>
        <thead>
            <tr>
                <th class='w200'>Título</th>
                <th class='w300'>Descripción</th>
                <th class='w200'>Género</th>
                <th class='w200'>Autor</th>
                <th class='w150'>Precio</th>
                <th class='acciones'>Acciones</th>
            </tr>
        </thead>
        <tbody class="scroll">
            <?php $__currentLoopData = $libros; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $libro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td class='w200'><?php echo e($libro->titulo); ?></td>
                    <td class='w300'><?php echo e($libro->descripcion); ?></td>
                    <td class='w200'><?php echo e($libro->categoria); ?></td>
                    <td class='w200'><?php echo e($libro->autor->nombre); ?> <?php echo e($libro->autor->apellidos); ?></td>
                    <td class='w150'><?php echo e($libro->precio); ?>€</td>
                    <td class='acciones'>
                        <div>
                            <a href="<?php echo e(route('removeLibro', $libro->id)); ?>" class='boton eliminar'>&#10008;</a>
                            <a href="<?php echo e(route('editLibroForm', $libro->id)); ?>" class='boton editar'>&#128393;</a>
                        </div>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
        <tbody>
            <tr class="nuevoLibro">
                <td class='w200'><input class="input" type='text' name="titulo" placeholder="Título"></td>
                <td class='w300'><input class="input" type='text' name="descripcion" placeholder="Descripción"></td>
                <td class='w200'><input class="input" type='text' name="categoria" placeholder="Categoría"></td>
                <td class='w200'><select class="input inputAutor" name="autor">
                    <option value="-1">Elige el autor</option>
                    <?php $__currentLoopData = $autores; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $autor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($autor->id); ?>"><?php echo e($autor->nombre); ?> <?php echo e($autor->apellidos); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select></td>
                <td class='w150'><input class="input" type='number' name="precio" step="any" min="0" placeholder="Precio"></td>
                <td class="acciones">
                    <div>
                        <input type="submit" value="🞥" class='boton anadir'>
                    <div>
                </td>
            </tr>
        </tbody>
    </table>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('plantillas.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Laravel\biblioteca\resources\views/paginas/libros.blade.php ENDPATH**/ ?>