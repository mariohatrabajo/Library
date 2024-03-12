

<?php $__env->startSection('titulo', 'Usuarios'); ?>

<?php $__env->startSection('btn-busqueda'); ?>
<form class="busqueda" action="<?php echo e(route('buscarUsuario')); ?>" method="get">
    <input type="text" class="inputMod inputBusqueda" name="busqueda">
    <button type="submit" class='boton buscar'><span class="rotate45">&#9906;</span></button>
</form>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('tabla'); ?>
<form method="get" action="<?php echo e(route('addUsuario')); ?>">
    <table>
        <thead>
            <tr>
                <th class='w300'>Nombre</th>
                <th class='w300'>Contraseña</th>
                <th class='w300'>Telefono</th>
                <th class='w300'>Fecha de Entrega</th>
                <th class='acciones'>Acciones</th>
            </tr>
        </thead>
        <tbody class="scroll">
            <?php $__currentLoopData = $usuarios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $usuario): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                <td class='w300'><?php echo e($usuario->nombreusuario); ?></td>
                <td class='w300'><?php echo e($usuario->password); ?></td>
                <td class='w300'><?php echo e($usuario->telefono); ?></td>
                <td class='w300'><?php echo e($usuario->fechaentrega); ?></td>
                <td class='acciones'>
                    <div>
                        <a href="<?php echo e(route('removeUsuario', $usuario->id)); ?>" class='boton eliminar'>&#10008;</a>
                        <a href="<?php echo e(route('editUsuarioForm', $usuario->id)); ?>" class='boton editar'>&#128393;</a>
                    </div>
                </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
        <tbody>
            <tr class="nuevoLibro">
                <td class='w300'><input class="input" type='text' name="nombreusuario" placeholder="Nombre de usuario"></td>
                <td class='w300'><input class="input" type='text' name="password" placeholder="Contraseña"></td>
                <td class='w300'><input class="input" type='text' name="telefono" placeholder="Telefono"></td>
                <td class='w300'><input class="input" type='date' name="fechaentrega"></td>
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
<?php echo $__env->make('plantillas.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Laravel\biblioteca\resources\views/paginas/usuarios.blade.php ENDPATH**/ ?>