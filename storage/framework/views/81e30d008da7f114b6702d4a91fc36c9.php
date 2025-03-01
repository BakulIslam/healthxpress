<?php $__env->startSection('meta'); ?>
    <title><?php echo e($pageTitle); ?> | <?php echo e((companyInfo()->meta_title) ? companyInfo()->meta_title : ''); ?></title>
    <meta name="description" content="<?php echo e((companyInfo()->meta_des) ? companyInfo()->meta_des : ''); ?>">
    <meta name="tags" content="<?php echo e((companyInfo()->meta_keywords) ? companyInfo()->meta_keywords : ''); ?>">

    <meta property="og:title" content="<?php echo e((companyInfo()->meta_title) ? companyInfo()->meta_title : ''); ?>" />
    <meta property="og:description" content="<?php echo e((companyInfo()->meta_des) ? companyInfo()->meta_des : ''); ?>" />
    <meta property="og:image" content="<?php echo e((companyInfo()->meta_image) ? asset('uploads/system/'.companyInfo()->meta_image) : asset('frontend/assets/img/logo/medi-world.png')); ?>" />
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<style>
    .missions h4{
        font-size: 18px;
        color: #2b72b9;
        font-weight: 700;
    }
    .missions p {
        font-size: 16px !important;
        color: #000000cf;
    }
</style>
<!-- breadcrumb-area-start -->
<div class="breadcrumb-area pt-125 pb-125" style="background-image:url(<?php echo e(asset('frontend/assets/img/bg/04.jpg')); ?>)">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="breadcrumb-wrapper">
                    <div class="breadcrumb-text">
                        <h2>About Us</h2>
                    </div>
                    <ul class="breadcrumb-menu">
                        <li><a href="<?php echo e(route('home')); ?>">home</a></li>
                        <li><span>About Us</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb-area-end -->

<!-- about-area-start -->
<div class="about-area about-pb pt-40 pb-40">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card p-4 box-shadow missions" style="box-shadow: 0 0 12px 0 rgba(0,0,0,0.08);">
                    <?php echo $data->about_us_content; ?>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- about-area-end -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.frontend.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\medi-world-app\resources\views/frontend/about-us.blade.php ENDPATH**/ ?>