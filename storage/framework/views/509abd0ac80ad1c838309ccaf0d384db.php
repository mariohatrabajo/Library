

<?php $__env->startSection('titulo', 'Autores'); ?>

<?php $__env->startSection('btn-busqueda'); ?>
<form class="busqueda" action="<?php echo e(route('buscarAutor')); ?>" method="get">
    <input type="text" class="inputMod inputBusqueda" name="busqueda">
    <button type="submit" class='boton buscar'><span class="rotate45">&#9906;</span></button>
</form>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('tabla'); ?>
<form method="get" action="<?php echo e(route('addAutor')); ?>">
    <table>
        <thead>
            <tr>
                <th class='w200'>Nombre</th>
                <th class='w200'>Apellidos</th>
                <th class='w200'>Nacionalidad</th>
                <th class='w200'>Sexo</th>
                <th class='w150'>Edad</th>
                <th class='acciones'>Acciones</th>
            </tr>
        </thead>
        <tbody class="scroll">
            <?php $__currentLoopData = $autores; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $autor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                <td class='w200'><?php echo e($autor->nombre); ?></td>
                <td class='w200'><?php echo e($autor->apellidos); ?></td>
                <td class='w200'><?php echo e($autor->nacionalidad); ?></td>
                <td class='w200'><?php echo e($autor->sexo); ?></td>
                <td class='w150'><?php echo e($autor->edad); ?></td>
                <td class='acciones'>
                    <div>
                        <a href="<?php echo e(route('removeAutor', $autor->id)); ?>" class='boton eliminar'>&#10008;</a>
                        <a href="<?php echo e(route('editAutorForm', $autor->id)); ?>" class='boton editar'>&#128393;</a>
                    </div>
                </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
        <tbody>
            <tr class="nuevoLibro">
                <td class='w200'><input class="input" type='text' name="nombre" placeholder="Nombre"></td>
                <td class='w200'><input class="input" type='text' name="apellidos" placeholder="Apellidos"></td>
                <td class='w200'><input class="input" type='text' name="nacionalidad" placeholder="Nacionalidad"></td>
                <td class='w200'><input class="input" type='text' name="sexo" placeholder="Sexo"></td>
                <td class='w150'><input class="input" type='number' name="edad" placeholder="Edad"></td>
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
<?php echo $__env->make('plantillas.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Laravel\biblioteca\resources\views/paginas/autores.blade.php ENDPATH**/ ?>