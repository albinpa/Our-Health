
<?php $__env->startSection('content'); ?>
<div class="page-section">
    <div class="container">
        <div class="row">
            <div class="col-9">
                <h1 class="text-center mb-5 wow fadeInUp">Our Doctors</h1>
            </div>
            <div class="col-3">
                <?php if($admin): ?>
                <a href="/doctor/create" class="btn btn-primary ml-auto">Add Doctor</a>
                <?php endif; ?>
            </div>
        <div class="row">
            

            

        <?php $__currentLoopData = $doctors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $doctor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>


            <div class="col-4" >
                <div class="item">
                    <div class="card-doctor">
                        <div class="header">
                            <img src="/storage/<?php echo e($doctor->image); ?>" alt="">
                            <div class="meta">
                                <a href="/doctor/<?php echo e($doctor->id); ?>"><span>View</span></a>
                                
                            </div>
                        </div>
                        <div class="body">
                            <p class="text-xl mb-0"><?php echo e($doctor->name); ?></p>
                            <span class="text-sm text-grey"><?php echo e($doctor->specialty); ?></span>
                            <p>Phone: <span><?php echo e($doctor->phone); ?></span></p>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        

        </div>
    </div>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\hospital\resources\views/doctor/index.blade.php ENDPATH**/ ?>