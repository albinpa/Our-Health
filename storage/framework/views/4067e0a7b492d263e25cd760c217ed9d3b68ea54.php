
<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-8 offset-2">
                <div class="card">
                  <div class="card-body">
                    <div class="row d-flex">
                      <div class="col">
                      <h4 class="card-title mt-4 mb-4 pb-4"><?php echo e($blog->title); ?></h4>
                      </div>
                      <?php if($admin): ?>
                      <div class="col pt-3">
                      <form action="/blog/<?php echo e($blog->id); ?>" method="post">
                                            <?php echo csrf_field(); ?>
                                            <?php echo method_field('DELETE'); ?>


                                            <button style="float:right" type="submit" onclick="confirm('are you sure to delete?')"
                                                class="btn btn-danger">Delete</button>
                                        </form>
                      </div>
                      <?php endif; ?>
                    
                    
                    </div>
                    
                    <img style="width: 700px;" src="/storage/<?php echo e($blog->image); ?>" alt="">

                    <p class="my-4"><?php echo e($blog->article); ?></p>
                  </div>
                </div>

        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\hospital\resources\views/blog/show.blade.php ENDPATH**/ ?>