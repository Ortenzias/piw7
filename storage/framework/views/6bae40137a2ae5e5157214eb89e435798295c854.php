

<?php $__env->startSection('title', 'Formularios'); ?>

<?php $__env->startSection('content'); ?>
    <h1>Vista de los multiples formularios</h1>

    <ul>
        <?php $__currentLoopData = $documentos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $documento): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li>
                <a href="<?php echo e(route('show.formulario', $documento->user_id)); ?>"><?php echo e($documento->user_id); ?></a>
            </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
    <?php echo e($documentos->links()); ?> 
    
<?php $__env->stopSection(); ?>

<!-- 
 <a href="<?php echo e(route('busqueda.search')); ?>> </a>        
    -->
<?php echo $__env->make('layouts.plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\quisV2\resources\views/uis/showMore.blade.php ENDPATH**/ ?>