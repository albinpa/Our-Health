
<?php $__env->startSection('content'); ?>
<div class="page-section bg-light">
    <div class="container">
        <div class="row">
        <div class="col-9">
                <h1 class="text-center mb-5">Latest News</h1>
            </div>
            <div class="col-3">
            <?php if($admin): ?>
                <a href="/blog/create" class="btn btn-primary ml-auto">Add News</a>
            <?php endif; ?>
            </div>
        </div>
        
        <div class="row mt-5">
        <?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-lg-4 py-2">
                
                <div class="card-blog">
                    <div class="header">
                        <div class="post-category">
                            <a href="/blog/<?php echo e($blog->id); ?>">Covid19</a>
                        </div>
                        <a href="/blog/<?php echo e($blog->id); ?>" class="post-thumb">
                            <img src="/storage/<?php echo e($blog->image); ?>" alt="">
                        </a>
                    </div>
                    <div class="body">
                        <h5 class="post-title"><a href="/blog/<?php echo e($blog->id); ?>"><?php echo e($blog->title); ?>

                                </a></h5>
                        <div class="site-info">
                            <div class="mr-2">
                                <span><?php echo e($blog->author); ?></span>
                            </div>
                            <span class=""></span> <?php echo e($blog->timestamp); ?>

                        </div>
                    </div>
                </div>
                
            </div>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</div> <!-- .page-section -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\hospital\resources\views/blog/index.blade.php ENDPATH**/ ?>