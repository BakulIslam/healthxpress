<?php $__env->startSection('meta'); ?>
    <title><?php echo e($product->title); ?></title>
    <meta name="description" content="<?php echo e($product->sub_title); ?>">
    <meta name="tags" content="<?php echo e($product->slug); ?>">

    <meta property="og:title" content="<?php echo e($product->title); ?>" />
    <meta property="og:description" content="<?php echo e($product->sub_title); ?>" />
    <meta property="og:image" content="<?php echo e(($product->thumbnail) ? asset('uploads/product/'.$product->thumbnail) : asset('frontend/assets/img/products/pr-33.png')); ?>" />
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/4.0.379/pdf_viewer.min.css" integrity="sha512-v7RQDI7qsfFNaXRzzylpsVV7ncQBdyozLze5YNgox/0z4Mc3Ellt2dBd0CbmufeD7IIh5TCJQ8ORAF/KvzVITg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
    .bakix-details-tab ul li a {
        font-size: 28px;
        font-weight: 500;
        color: #333333;
        padding: 0;
        text-transform: capitalize;
        position: relative;
        font-size: 15px;
        padding: 10px;
    }
    .bakix-details-tab ul li a.active:before {
        position: absolute;
        bottom: -13px;
        left: 0px;
        height: 3px;
        width: 95px;
        content: "";
        background: #4e97fd;
        transition: 0.3s;
    }
    .product-details-img, .shop-thumb-tab ul a{
        padding: 4px !important;
    }
    .product-desc p {
        color: #333;
        font-weight: 500;
    }

    p {
        color: #333;
    }
    .additional-info .table td, .additional-info .table th {
        padding: 8px 0;
        color: #666363;
    }
    .product-details-wrapper .product-text h4{
        font-size: 26px;
    }
    .shop-thumb-tab ul img{
        width: 100%;
        height: 100px;
    }
    .product-large-img img{
        max-height: 400px;
    }

    .pdfview{
        width: 100%;
        height: 120vh;
    }

    @media (max-width: 576px) {
        .shop-thumb-tab ul img{
            height: 70px;
        }
        .pdfview{
            height: 80vh;
        }
    }
</style>
 <!-- shop-banner-area start -->
 <section class="shop-banner-area pt-50 pb-70">
    <div class="container">
        <div class="row" style="background: #f7f7f7; border-radius: 4px;">
            <?php if($product->type == App\Helpers\Constant::PRODUCT_TYPE['normal']): ?>
                <div class="col-xl-6 col-lg-6 pt-3">
                    <div class="product-details-img mb-30">
                        <div class="tab-content" id="myTabContent2">
                            <div class="tab-pane fade show active" id="profile" role="tabpanel">
                                <div class="product-large-img">
                                    <img src="<?php echo e(($product->thumbnail) ? asset('uploads/product/'.$product->thumbnail) : asset('frontend/assets/img/products/pr-33.png')); ?>" alt="<?php echo e($product->slug); ?>">
                                </div>
                            </div>
                            <?php $__currentLoopData = $product->featuredImages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="tab-pane fade" id="featuredImages-<?php echo e($image->id); ?>" role="tabpanel">
                                    <div class="product-large-img">
                                        <img src="<?php echo e(($image->image) ? asset('uploads/product/'.$image->image) : asset('frontend/assets/img/products/pr-33.png')); ?>" alt="<?php echo e($product->slug); ?>">
                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                    <div class="shop-thumb-tab">
                        <ul class="nav" id="myTab2" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-selected="false">
                                    <img src="<?php echo e(($product->thumbnail) ? asset('uploads/product/'.$product->thumbnail) : asset('frontend/assets/img/products/pr-33.png')); ?>" alt="<?php echo e($product->slug); ?>">
                                </a>
                            </li>
                            <?php $__currentLoopData = $product->featuredImages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li class="nav-item">
                                    <a class="nav-link" id="home-tab<?php echo e($image->id); ?>" data-toggle="tab" href="#featuredImages-<?php echo e($image->id); ?>" role="tab" aria-selected="true">
                                        <img src="<?php echo e(($image->image) ? asset('uploads/product/'.$image->image) : asset('frontend/assets/img/products/pr-33.png')); ?>" alt="<?php echo e($product->slug); ?>">
                                    </a>
                                </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 pt-3">
                    <div class="product-details-wrapper mb-30">
                        <div class="product-text">
                            <h4 title="<?php echo e($product->title); ?>"><?php echo e($product->title); ?></h4>
                        </div>
                        <div class="product-variant">
                            <div class="product-desc">
                                <p style="font-size: 20px;"><?php echo e($product->sub_title); ?></p>
                            </div>
                            <div class="additional-info mt-3">
                                <div class="table-responsive">
                                    <h4>Information</h4>
                                    <table class="table">
                                        <tbody>
                                            <?php if($product->catalog != NULL): ?>
                                                <tr>
                                                    <th>Catalog</th>
                                                    <td class="product_dimensions"><a href="<?php echo e(route('catalog.product.download', $product->id)); ?>" class="btn btn-sm btn-success"><i class="fas fa-download"></i> Download</a></td>
                                                </tr>
                                            <?php endif; ?>
                                            <tr>
                                                <th>Category</th>
                                                <td class="product_dimensions"><?php echo e($product->category->category_name); ?></td>
                                            </tr>
                                            <?php if($product->subcategory_id != NULL): ?>
                                                <tr>
                                                    <th>Sub Category</th>
                                                    <td class="product_dimensions"><?php echo e($product->subcategory->subcategory); ?></td>
                                                </tr>
                                            <?php endif; ?>
                                            <?php if($product->brand_id != NULL): ?>
                                                <tr>
                                                    <th>Brand</th>
                                                    <td class="product_dimensions"><?php echo e($product->brand->name); ?></td>
                                                </tr>
                                            <?php endif; ?>
                                            <?php if($product->origin_id != NULL): ?>
                                                <tr>
                                                    <th>Origin</th>
                                                    <td class="product_dimensions"><?php echo e($product->origin->name); ?></td>
                                                </tr>
                                            <?php endif; ?>
                                            <?php if($product->country != NULL): ?>
                                                <tr>
                                                    <th>Assembly</th>
                                                    <td class="product_dimensions"><?php echo e($product->country); ?></td>
                                                </tr>
                                            <?php endif; ?>

                                            <?php $__currentLoopData = $product->product_info; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $info): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr>
                                                    <th><?php echo e($info->info_title); ?></th>
                                                    <td class="product_dimensions"><?php echo e($info->info_details); ?></td>
                                                </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php else: ?>
                <div class="col-xl-12 col-lg-12 pt-3">
                    <div class="product-details-wrapper mb-30">
                        <div class="product-text">
                            <h4 title="<?php echo e($product->title); ?>"><?php echo e($product->title); ?></h4>
                        </div>
                        <div class="product-variant">
                            <div class="product-desc">
                                <p style="font-size: 20px;"><?php echo e($product->sub_title); ?></p>
                            </div>
                            <div class="additional-info mt-3">
                                <div class="table-responsive">
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <th>Category</th>
                                                <td class="product_dimensions"><?php echo e($product->category->category_name); ?></td>
                                            </tr>
                                            <?php if($product->subcategory_id != NULL): ?>
                                                <tr>
                                                    <th>Sub Category</th>
                                                    <td class="product_dimensions"><?php echo e($product->subcategory->subcategory); ?></td>
                                                </tr>
                                            <?php endif; ?>

                                            <?php if($product->thumbnail != NULL): ?>
                                                <tr>
                                                    <th>Catalog</th>
                                                    <td class="product_dimensions"><a href="<?php echo e(route('reagent.product.download', $product->id)); ?>" class="btn btn-sm btn-success"><i class="fas fa-download"></i> Download</a></td>
                                                </tr>
                                            <?php endif; ?>

                                        </tbody>
                                    </table>
                                </div>
                                <?php if($product->description != NULL): ?>
                                    <style>
                                        .additional-info .table td, .additional-info .table th{
                                            padding: 8px 10px;
                                        }
                                    </style>
                                    <div class="row">
                                        <div class="col-12 text-center">
                                            <h4 class="text-center mb-0">List of items</h4>
                                        </div>
                                    </div>
                                    <div class="event-text">
                                        <?php echo $product->description; ?>

                                    </div>
                                <?php endif; ?>

                            </div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>
<!-- shop-banner-area end -->

<?php if($product->type == App\Helpers\Constant::PRODUCT_TYPE['normal']): ?>
    <!-- product-desc-area start -->
    <section class="product-desc-area pb-30">
        <div class="container">
            <div class="row" style="background: #f7f7f7; border-radius: 4px;">
                <div class="col-xl-12 col-lg-12 mb-30 px-4 py-3">
                    <div class="bakix-details-tab">
                        <ul class="nav text-center pb-10 mb-50" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="desc-tab" data-toggle="tab" href="#id-desc" role="tab" aria-controls="home" aria-selected="true">Description </a>
                            </li>
                            <?php if($product->policy == App\Helpers\Constant::POLICY_STATUS['active']): ?>
                                <li class="nav-item">
                                    <a class="nav-link" id="id-add-in" data-toggle="tab" href="#id-add" role="tab" aria-controls="profile" aria-selected="false">Privacy Policy</a>
                                </li>
                            <?php endif; ?>
                        </ul>
                    </div>
                    <div class="tab-content" id="myTabContent">
                        <?php if($product->policy == App\Helpers\Constant::POLICY_STATUS['active']): ?>
                            <div class="tab-pane fade" id="id-add" role="tabpanel" aria-labelledby="id-add-in">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="event-text">
                                            <?php echo companyInfo()->policy; ?>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>
                        <div class="tab-pane fade show active" id="id-desc" role="tabpanel" aria-labelledby="desc-tab">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="event-text">
                                        <?php echo $product->description; ?>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- product-desc-area end -->
<?php endif; ?>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('js'); ?>

<?php $__env->stopPush(); ?>


<?php echo $__env->make('layouts.frontend.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\medi-world-app\resources\views/frontend/product-view.blade.php ENDPATH**/ ?>