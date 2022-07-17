
<?php $__env->startSection('content'); ?>


<div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">All Appointments</h4>
                   
                    <div class="table-responsive">
                      <table class="table table-striped">
                        <thead>
                          <tr>
                            <th> Id</th>
                            <th>User</th>
                            <th> Name </th>
                            <th> Message </th>
                            <th> Doctor</th>
                            <th> Status </th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php $__currentLoopData = $appointments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $appointment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <tr>
                          
                            <td class="py-1">
                              <?php echo e($appointment->id); ?>

                            </td>
                            <td> <?php echo e($appointment->user->name); ?></td>
                            <td> <?php echo e($appointment->name); ?></td>
                            <td>
                            <?php echo e($appointment->message); ?>

                            </td>
                            <td> <?php echo e($appointment->doctor->name); ?></td>
                            <td> cancel </td>
                           
                          </tr>
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\hospital\resources\views/appointment/index.blade.php ENDPATH**/ ?>