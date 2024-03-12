<?php
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Biblioteca | <?php echo $__env->yieldContent('titulo'); ?></title>
        <link rel="icon" href="../../assets/icons/bookmark.svg">
        <link rel="stylesheet" type="text/css" href="../../assets/css/estilos.css">
        <link rel="stylesheet" type="text/css" href="../../assets/css/laravel_version.css">
        <link rel="stylesheet" type="text/css" href="../../assets/css/edit.css">
        <meta charset="UTF-8">
    </head>
    <body>
            <header>
                <?php echo $__env->yieldContent('volver'); ?>
            </header>

            <h1><?php echo $__env->yieldContent('titulo'); ?></h1>

            <?php echo $__env->yieldContent('form'); ?>
    </body>
</html><?php /**PATH C:\xampp\htdocs\Laravel\biblioteca\resources\views/plantillas/form.blade.php ENDPATH**/ ?>