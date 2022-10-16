<?php if($paginator->hasPages()): ?>
    <ul class="pagination" role="navigation">
        
        <?php if($paginator->onFirstPage()): ?>
            <li class="page-item disabled" aria-disabled="true" aria-label="<?php echo app('translator')->get('pagination.previous'); ?>">
                <span class="page-link" aria-hidden="true">
                    <span class="d-none d-md-block">&lsaquo;</span>
                    <span class="d-block d-md-none"><?php echo app('translator')->get('pagination.previous'); ?></span>
                </span>
            </li>
        <?php else: ?>
            <li class="page-item">
                <button type="button" class="page-link" wire:click="previousPage" rel="prev" aria-label="<?php echo app('translator')->get('pagination.previous'); ?>">
                    <span class="d-none d-md-block">&lsaquo;</span>
                    <span class="d-block d-md-none"><?php echo app('translator')->get('pagination.previous'); ?></span>
                </button>
            </li>
        <?php endif; ?>

        
        <?php $__currentLoopData = $elements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $element): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            
            <?php if(is_string($element)): ?>
                <li class="page-item disabled d-none d-md-block" aria-disabled="true"><span class="page-link"><?php echo e($element); ?></span></li>
            <?php endif; ?>

            
            <?php if(is_array($element)): ?>
                <?php $__currentLoopData = $element; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page => $url): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($page == $paginator->currentPage()): ?>
                        <li class="page-item active d-none d-md-block" aria-current="page"><span class="page-link"><?php echo e($page); ?></span></li>
                    <?php else: ?>
                        <li class="page-item d-none d-md-block"><button type="button" class="page-link" wire:click="gotoPage(<?php echo e($page); ?>)"><?php echo e($page); ?></button></li>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        
        <?php if($paginator->hasMorePages()): ?>
            <li class="page-item">
                <button type="button" class="page-link" wire:click="nextPage" rel="next" aria-label="<?php echo app('translator')->get('pagination.next'); ?>">
                    <span class="d-block d-md-none"><?php echo app('translator')->get('pagination.next'); ?></span>
                    <span class="d-none d-md-block">&rsaquo;</span>
                </button>
            </li>
        <?php else: ?>
            <li class="page-item disabled" aria-disabled="true" aria-label="<?php echo app('translator')->get('pagination.next'); ?>">
                <span class="page-link" aria-hidden="true">
                    <span class="d-block d-md-none"><?php echo app('translator')->get('pagination.next'); ?></span>
                    <span class="d-none d-md-block">&rsaquo;</span>
                </span>
            </li>
        <?php endif; ?>
    </ul>
<?php endif; ?>
<?php /**PATH D:\WEB\learning_livewire\vendor\livewire\livewire\src\views/pagination-links.blade.php ENDPATH**/ ?>