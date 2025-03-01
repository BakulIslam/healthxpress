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
       .product-grid{
        box-shadow: 0 0.5rem 1rem rgba(51, 51, 51, 0.15) !important;
        transition: 0.3s;
        border-radius: 6px;
        overflow: hidden;
        cursor: pointer;
    }
    .product-grid:hover{
        box-shadow: 0 0.5rem 1rem rgb(0 0 0 / 27%) !important;
        cursor: pointer;
    }
    .product-grid .product-02-img button .product-action:hover{
        cursor: pointer;
    }

    .product-grid .product-02-img button {
        width: 100%;
        border: none;
        height: 218px;
    }
    .product-grid .product-02-img button {
        width: 100%;
        border: none;
        height: 218px;
        padding-top: 5px;
    }
    .product-grid .product-02-img button .product-action{
        height: 100%;
    }
    .product-grid .product-02-img button .product-action a.action-btn{
        top: 100px !important;
        vertical-align: middle;
        margin: auto;
        margin-top: 100px;
    }

    .product-grid .product-02-img button a img {
        height: 200px;
        width: auto;
        border-radius: 5px;
    }

    .product-text h5 {
        font-size: 11px;
        color: #4e97fd;
        margin-bottom: 2px;
    }
    .product-text h5.product-model {
        font-size: 11px;
        color: #4e97fd;
        margin-bottom: 2px;
    }
    .product-text h4 a {
        font-size: 16px;
        text-transform: capitalize;
    }
    @media (max-width: 991px){
        .section-title{
            text-align: center;
        }
    }
    @media (max-width: 576px){
        .product-col{
            padding: 0px 10px;
        }
        .product-grid .product-02-img button{
            height: 116px;
        }
        .product-grid .product-02-img button a img{
            height: 114px;
        }
        .product-text h5{
            font-size: 10px;
        }
        .product-text h4 a{
            font-size: 14px;
        }
        .product-text h5.product-model {
            font-size: 12px;
        }
    }

</style>

<!-- shop-full-area-start -->
<div class="shhop-full-area pt-50 pb-30 pr-60 pl-60">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12">
                <div class="pro-ful-tab">
                    <div class="section-title mb-30 pb-2 border-bottom ">
                        <h2><?php echo e($pageTitle); ?></h2>
                        <p>Explore Products to</p>
                    </div>
                    <div class="product-tab-content">
                        <div class="row">
                            <?php $__empty_1 = true; $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <div class="col-xl-3 cl-lg-3 col-md-4 col-sm-6 col-6 product-col">
                                    <div class="product-grid product-03-wrapper grey-2-bg pos-rel text-center mb-30 shadow" style="padding: 0px;">
                                        <a href="<?php echo e(route('home.product.view', ['id' => $product->id, 'slug' => $product->slug])); ?>">
                                            <div class="product-02-img pos-rel">
                                                <button>
                                                    <div class="img">
                                                        <?php if($product->type == App\Helpers\Constant::PRODUCT_TYPE['normal']): ?>
                                                            <img src="<?php echo e(($product->thumbnail != null) ? asset('uploads/product/'.$product->thumbnail) : asset('frontend/assets/img/logo/fav.png')); ?>" alt="<?php echo e($product->slug); ?>">
                                                        <?php else: ?>
                                                            <img src="<?php echo e(asset('frontend/assets/img/ReAgent.png')); ?>" alt="<?php echo e($product->slug); ?>">
                                                        <?php endif; ?>
                                                    </div>
                                                    <div class="product-action">
                                                        <a class="action-btn" href="<?php echo e(route('home.product.view', ['id' => $product->id, 'slug' => $product->slug])); ?>"><i class="fas fa-eye"></i></a>
                                                    </div>
                                                </button>
                                            </div>
                                            <div class="product-text mt-0 text-left" style="padding: 15px 15px; border-radius: 4px;">
                                                <h5 title="<?php echo e($product->slug); ?>"><?php echo e($product->category->category_name); ?></h5>
                                                <h4 class="my-1"><a href="<?php echo e(route('home.product.view', ['id' => $product->id, 'slug' => $product->slug])); ?>"  title="<?php echo e($product->slug); ?>"><?php echo e(substr($product->title, 0, 30)); ?></a></h4>
                                                <h5 style="color: #333;" class="product-model" title="<?php echo e($product->slug); ?>"><?php echo e($product->sub_title); ?></h5>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                <div class="col-xl-3 cl-lg-3 col-md-4 col-sm-6 col-6 text-center">
                                    No More Products..
                                </div>
                            <?php endif; ?>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-12">
                            <?php echo $products->links(); ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- shop-full-area-area -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.frontend.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\medi-world-app\resources\views/frontend/products.blade.php ENDPATH**/ ?>