
<?php $__env->startSection('content'); ?>
<div class="col-6 offset-3">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title text-center mt-4 mb-4 pb-4">Publish News</h4>
                    
                    <form action="/blog" method="post" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                      <div class="mb-4">
                      <label for="author">Author</label>

                    <input id="author" type="text" class="form-control <?php $__errorArgs = ['author'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="author" value="<?php echo e(old('author')); ?>" required autocomplete="author" autofocus>

                                <?php $__errorArgs = ['author'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            
                      </div>
                      <div class="form-group mb-4">
                        <label for="title">Title</label>
                        <input id="title" type="text" class="form-control <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="title" value="<?php echo e(old('title')); ?>" required autocomplete="title" autofocus>

                                <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                      </div>
                      
                      <div class="form-group mb-4">
                        <label for="article">Publish your article...</label>
                        <textarea class="form-control <?php $__errorArgs = ['article'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="article" rows="4" name="article" value="<?php echo e(old('article')); ?>" required autocomplete="article" autofocus></textarea>
                        <?php $__errorArgs = ['article'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                      </div>
                      <div class="form-group mb-4">
                        <label>File upload</label>
                        <input type="file" name="image" class="form-control-file">
                        
                      </div>
                      <div class="row ">
                          <div class="col text-center">
                          <button type="submit" class="btn btn-primary">Submit</button>
                          </div>
                         <div class="col">
                         <button type="reset" class="btn btn-dark">Reset</button>
                         </div>
                      
                      </div>
                      
                    </form>
                  </div>
                </div>
              </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\hospital\resources\views/blog/create.blade.php ENDPATH**/ ?>