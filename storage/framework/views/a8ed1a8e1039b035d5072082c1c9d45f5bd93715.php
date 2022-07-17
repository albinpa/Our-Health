

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex">


                    <div class="col-9">
                        <h1 class="text-center">Appointments</h1>
                    </div>
                    <div class="col-3">

                        <a href="/appointment/create" class="btn btn-primary ml-auto">Book Appoitment</a>

                    </div>
                </div>

                <div class="card-body">
                    <table style="width:700px;">
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Message</th>
                            <th>Doctor</th>
                            <th>Status</th>
                            
                            <th class="text-center">Cancel</th>
                        </tr>
                        <?php $__currentLoopData = $appointments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $appointment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($appointment->id); ?></td>
                            <td><?php echo e($appointment->name); ?></td>
                            <td><?php echo e($appointment->message); ?></td>
                            <td><?php echo e($appointment->doctor->name); ?></td>
                            <td><?php echo e($appointment->status); ?></td>
                            <td>
                                <form action="" method="post">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>


                                    <button style="float:center" type="submit"
                                        onclick="confirm('are you sure to delete?')"
                                        class="btn btn-danger" >Delete</button>
                                </form>
                            </td>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tr>

                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\hospital\resources\views/appointment/show.blade.php ENDPATH**/ ?>