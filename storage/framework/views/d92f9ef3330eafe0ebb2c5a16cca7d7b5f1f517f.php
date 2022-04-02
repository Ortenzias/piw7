

<?php $__env->startSection('title', 'Formulario' . $usuario->id); ?>

<?php $__env->startSection('content'); ?>
    <h1>Vista del formulario del usuario <?php echo e($usuario->user_id); ?></h1>
    <a href="<?php echo e(route('inicio.index')); ?>">Volver a inicio</a>

    <p><strong>Datos del usuario</strong><?php echo e($usuario->datos_json); ?></p>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\quisV2\resources\views/uis/show.blade.php ENDPATH**/ ?>