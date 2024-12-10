<?php if (isset($component)) { $__componentOriginal23a33f287873b564aaf305a1526eada4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal23a33f287873b564aaf305a1526eada4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layout','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('title', null, []); ?> 
        Detalle del Contacto
     <?php $__env->endSlot(); ?>
    
     <?php $__env->slot('cardTitle', null, []); ?> 
        Detalle del Contacto
        
     <?php $__env->endSlot(); ?>
    <p>
        <h2>DNI</h2>
        <b><?php echo e($contact->dni); ?></b>
    </p>
    <p>
        <h2>Nombre</h2>
        <b><?php echo e($contact->name); ?></b>
    </p>
    <p>
        <h2>Apellido</h2>
        <b><?php echo e($contact->surname); ?></b>
    </p>
    <p>
        <h2>Teléfono</h2>
        <b><?php echo e($contact->phone); ?></b>
    </p>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal23a33f287873b564aaf305a1526eada4)): ?>
<?php $attributes = $__attributesOriginal23a33f287873b564aaf305a1526eada4; ?>
<?php unset($__attributesOriginal23a33f287873b564aaf305a1526eada4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal23a33f287873b564aaf305a1526eada4)): ?>
<?php $component = $__componentOriginal23a33f287873b564aaf305a1526eada4; ?>
<?php unset($__componentOriginal23a33f287873b564aaf305a1526eada4); ?>
<?php endif; ?><?php /**PATH D:\laragon\www\Contactos\resources\views\contacts\show.blade.php ENDPATH**/ ?>