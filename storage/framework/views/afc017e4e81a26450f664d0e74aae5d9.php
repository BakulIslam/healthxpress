<?php $__env->startSection('content'); ?>
<div class="container-xxl flex-grow-1 container-p-y">
    <!-- Responsive Table -->
    <div class="card">
        <div class="card-header border-bottom bg-primary d-flex py-3">
            <h5 class="card-title mb-0 text-white"><?php echo e($pageTitle); ?></h5>
        </div>
        <div class="card-body pt-2">
           <div class="row">
                <div class="col-lg-12 mb-3">
                    <div class="card">
                        <div class="card-header border-bottom bg-primary d-flex py-3">
                            <h5 class="card-title mb-0 text-white">Content</h5>
                        </div>
                        <div class="card-body">
                            <form action="<?php echo e(route('settings.pages.about.store')); ?>" method="POST" enctype="multipart/form-data">
                                <?php echo csrf_field(); ?>
                                <div class="form-group mt-3">
                                    <label for="about_us_content">Content</label>
                                    <textarea name="about_us_content" id="about_us_content" class="form-control" rows="40" placeholder="Enter About Us Page Content"><?php echo e(($about_us->about_us_content) ? $about_us->about_us_content : ''); ?></textarea>

                                    <?php $__errorArgs = ['about_us_content'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="text-danger"><?php echo e($message); ?></span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                                </div>
                                <div class="form-group mt-3 text-end">
                                    <button type="submit" class="text-right btn btn-primary">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
           </div>
        </div>
    </div>
    <!--/ Responsive Table -->
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
    <script>
        jQuery(function(e) {
            'use strict';
            $(document).ready(function() {
                $('#about_us_content').summernote({height: 800});
            });
        });
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\medi-world-app\resources\views/admin/pages/settings/about-us.blade.php ENDPATH**/ ?>