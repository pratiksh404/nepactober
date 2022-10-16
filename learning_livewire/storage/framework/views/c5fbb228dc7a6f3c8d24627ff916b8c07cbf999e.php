
<?php $__env->startSection('content'); ?>
<?php
if (! isset($_instance)) {
    $dom = \Livewire\Livewire::mount('comment')->dom;
} elseif ($_instance->childHasBeenRendered('cyliwet')) {
    $componentId = $_instance->getRenderedChildComponentId('cyliwet');
    $componentTag = $_instance->getRenderedChildComponentTagName('cyliwet');
    $dom = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('cyliwet');
} else {
    $response = \Livewire\Livewire::mount('comment');
    $dom = $response->dom;
    $_instance->logRenderedChild('cyliwet', $response->id, \Livewire\Livewire::getRootElementTagName($dom));
}
echo $dom;
?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\WEB\learning_livewire\resources\views/comment.blade.php ENDPATH**/ ?>