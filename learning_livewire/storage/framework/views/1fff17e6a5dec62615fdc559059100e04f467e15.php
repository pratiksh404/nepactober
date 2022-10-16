
<?php $__env->startSection('content'); ?>
<?php
if (! isset($_instance)) {
    $dom = \Livewire\Livewire::mount('counter')->dom;
} elseif ($_instance->childHasBeenRendered('6UWCa0S')) {
    $componentId = $_instance->getRenderedChildComponentId('6UWCa0S');
    $componentTag = $_instance->getRenderedChildComponentTagName('6UWCa0S');
    $dom = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('6UWCa0S');
} else {
    $response = \Livewire\Livewire::mount('counter');
    $dom = $response->dom;
    $_instance->logRenderedChild('6UWCa0S', $response->id, \Livewire\Livewire::getRootElementTagName($dom));
}
echo $dom;
?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\WEB\learning_livewire\resources\views/counter.blade.php ENDPATH**/ ?>