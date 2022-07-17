
<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-6">
            <div class="item">
                <div class="card-doctor">
                    <div class="header">
                        <img src="/storage/<?php echo e($doctor->image); ?>" alt="">

                    </div>
                    <div class="body">
                        <div class="row">
                            <div class="col">
                                <p class="text-xl mb-0"><?php echo e($doctor->name); ?></p>
                                <span class="text-sm text-grey"><?php echo e($doctor->specialty); ?></span>
                                <p>Phone: <span><?php echo e($doctor->phone); ?></span></p>
                            </div>
                            <div class="col">
                            <?php if($admin): ?>
                                <div class="row">
                                    <div class="col">

                                        <div><a href="/doctor/<?php echo e($doctor->id); ?>/edit" class="btn btn-primary">Edit</a>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <form action="/doctor/<?php echo e($doctor->id); ?>" method="post">
                                            <?php echo csrf_field(); ?>
                                            <?php echo method_field('DELETE'); ?>


                                            <button type="submit" onclick="confirm('are you sure to delete?')"
                                                class="btn btn-danger">Delete</button>
                                        </form>
                                    </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\hospital\resources\views/doctor/show.blade.php ENDPATH**/ ?>