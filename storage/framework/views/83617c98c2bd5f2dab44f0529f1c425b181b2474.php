<?php
    $columnSpanClass = [
        '',
        'lg:col-span-1',
        'lg:col-span-2',
        'lg:col-span-3',
        'lg:col-span-4',
        'lg:col-span-5',
        'lg:col-span-6',
        'lg:col-span-7',
        'lg:col-span-8',
        'lg:col-span-9',
        'lg:col-span-10',
        'lg:col-span-11',
        'lg:col-span-12',
    ][$formComponent->getColumnSpan()]
?>

<div class="<?php echo e($columnSpanClass); ?>">
    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'forms::components.form','data' => ['schema' => $formComponent->getSchema(),'columns' => $formComponent->getColumns()]]); ?>
<?php $component->withName('forms::form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['schema' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($formComponent->getSchema()),'columns' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($formComponent->getColumns())]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
</div>
<?php /**PATH C:\Laravel\my-work-station\vendor\filament\filament\packages\forms\src/../resources/views/components/grid.blade.php ENDPATH**/ ?>