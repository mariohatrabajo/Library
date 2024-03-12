<?php
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Biblioteca | <?php echo $__env->yieldContent('titulo'); ?></title>
        <link rel="icon" href="assets/icons/bookmark.svg">
        <link rel="stylesheet" type="text/css" href="assets/css/estilos.css">
        <link rel="stylesheet" type="text/css" href="assets/css/laravel_version.css">
        <link rel="stylesheet" type="text/css" href="../assets/css/estilos.css">
        <link rel="stylesheet" type="text/css" href="../assets/css/laravel_version.css">
        <meta charset="UTF-8">
    </head>
    <body>
            <header>
                <a href="<?php echo e(route('libros')); ?>">Libros</a>
                <a href="<?php echo e(route('autores')); ?>">Autores</a>
                <a href="<?php echo e(route('usuarios')); ?>">Usuarios</a>
                <a href="<?php echo e(route('alquileres')); ?>">Alquileres</a>
            </header>

            <h1><?php echo $__env->yieldContent('titulo'); ?></h1>

            <?php echo $__env->yieldContent('btn-busqueda'); ?>
            
            <?php echo $__env->yieldContent('tabla'); ?>
    </body>
</html><?php /**PATH C:\xampp\htdocs\Laravel\biblioteca\resources\views/plantillas/base.blade.php ENDPATH**/ ?>