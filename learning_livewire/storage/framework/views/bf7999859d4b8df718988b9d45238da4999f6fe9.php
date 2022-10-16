<div class="container p-4">
    <div>
        <?php if(session()->has('message')): ?>
        <div class="alert alert-success">
            <?php echo e(session('message')); ?>

        </div>
        <?php endif; ?>
    </div>
    <div class="form-group">
        <form action="" wire:submit.prevent="addComment">
            <div class="row">
                <div class="col-lg-10">
                    <img src="<?php echo e($image); ?>" width="200" alt="">
                    <input type="file" name="image" id="image" class="form-control" wire:change="$emit('imageeChosen')">
                    <?php $__errorArgs = ['newComment'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <span class="error"><?php echo e($message); ?></span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    <input type="text" name="newComment" id="body" placeholder="What's on your mind"
                        class="form-control" wire:model.lazy="newComment">
                </div>
                <div class="col-lg-2">
                    <button class="btn btn-primary" type="submit">Post</button>
                </div>
            </div>
        </form>
    </div>

    <div class="row p-2">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h3>Comments</h3>
                    <h3>Total : </h3>
                </div>
                <div class="card-body">
                    <ul class="list-group">
                        <?php $__currentLoopData = $comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li class="list-group-item">
                            <div class="row d-flex justify-content-between">
                                <div>
                                    <div><b><?php echo e($comment->user['name']); ?></b></div>
                                    <div class="px-2"><i><?php echo e($comment->updated_at->diffForHumans()); ?></i></div>
                                </div>
                                <button class="btn btn-danger" wire:click="remove(<?php echo e($comment->id); ?>)">Delete</button>
                            </div>
                            <div class="row p-2">
                                <?php echo e($comment->body); ?>

                            </div>
                        </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <?php echo e($comments->links()); ?>

</div>

<script>
    window.livewire.on('imageeChosen', () => {
let inputImage = document.getElementById('image');
let image = inputImage.files[0];
let reader = new FileReader();
reader.onloadend = () => {
    window.livewire.emit('imageUpload',reader.result)
}
reader.readAsDataURL(image)
})
</script><?php /**PATH D:\WEB\learning_livewire\resources\views/livewire/comment.blade.php ENDPATH**/ ?>