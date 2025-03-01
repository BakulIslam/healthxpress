<footer>
    <div class="footer-area pt-80 pb-45">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-6">
                    <div class="footer-wrapper mb-30">
                        <h3 class="footer-title" style="border-left: 4px solid #4e97fd; padding-left: 7px;">About Company</h3>
                        <div class="footer-text">
                            <p><?php echo companyInfo()->about_company; ?></p>
                        </div>
                        <div class="footer-icon">
                            

                            <?php if(socials()->email != NULL): ?>
                                <a target="_blank" href="mailto:<?php echo e(socials()->email); ?>">
                                    <i style="font-size: 18px;" class="far fa-envelope"></i>
                                </a>
                            <?php endif; ?>
                            <?php if(socials()->facebook != NULL): ?>
                                <a target="_blank" href="<?php echo e(socials()->facebook); ?>">
                                    <i style="font-size: 18px;" class="fab fa-facebook-square"></i>
                                </a>
                            <?php endif; ?>
                            <?php if(socials()->instagram != NULL): ?>
                                <a target="_blank" href="<?php echo e(socials()->instagram); ?>">
                                    <i style="font-size: 18px;" class="fab fa-instagram"></i>
                                </a>
                            <?php endif; ?>
                            <?php if(socials()->linkedin != NULL): ?>
                                <a target="_blank" href="<?php echo e(socials()->linkedin); ?>">
                                    <i style="font-size: 18px;" class="fab fa-linkedin"></i>
                                </a>
                            <?php endif; ?>
                            <?php if(socials()->x != NULL): ?>
                                <a target="_blank" href="<?php echo e(socials()->x); ?>">
                                    <i style="font-size: 18px;" class="fab fa-twitter-square"></i>
                                </a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="footer-wrapper ml-80 mb-30">
                        <h3 class="footer-title" style="border-left: 4px solid #4e97fd; padding-left: 7px;">Latest Product</h3>
                        <div class="footer-link">
                            <ul>
                                <?php $__empty_1 = true; $__currentLoopData = latest_product(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                    <li><a href="<?php echo e(route('home.product.view', ['id' => $product->id, 'slug' => $product->slug])); ?>"><?php echo e($product->title); ?></a></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                    <li class="text-center">No More..</li>
                                <?php endif; ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-5 col-md-5">
                    <div class="footer-wrapper ml-80 mb-30">
                        <h3 class="footer-title" style="border-left: 4px solid #4e97fd; padding-left: 7px;">Location</h3>
                        <div class="footer-link">
                            <ul class="ml-2">
                                <li><div class="d-flex"><i class='fas fa-map-marker-alt' style="color: #4789e5; vertical-align: middle; margin-top: 10px; padding-right: 10px; font-size: 22px;"></i> <span><?php echo companyInfo()->address; ?></span></div></li>

                                <li><div class="d-flex"><i class="fas fa-envelope" style="color: #4789e5; vertical-align: middle; margin-top: 10px; padding-right: 10px; font-size: 20px;"></i> <span>
                                <?php
                                    $addressesArray = explode(',', companyInfo()->email);
                                    foreach ($addressesArray as $address) {
                                        echo trim($address) . "<br>";
                                    }
                                ?>
                                </span></div></li>

                                <li><div class="d-flex"><i class="fas fa-phone" style="color: #4789e5; vertical-align: middle; margin-top: 10px; padding-right: 10px; font-size: 19px;"></i><span>
                                <?php
                                    $phoneArray = explode(',', companyInfo()->phone);
                                    foreach ($phoneArray as $phone) {
                                        echo trim($phone) . "<br>";
                                    }
                                ?>
                                </span></div></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom-area mr-70 ml-70 pt-25 pb-25">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6">
                    <div class="copyright">
                        <p>Copyright <i class="far fa-copyright"></i> <?php echo e(date('Y')); ?> <a href="<?php echo e(route('home')); ?>" style="color: #4E97FD;">Health Xpress</a>. All Rights Reserved</p>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6">
                    <div class="footer-bottom-link f-right">
                        <ul>
                            <li><a href="<?php echo e(route('home')); ?>">Home </a></li>
                            <li><a href="<?php echo e(route('home.aboutus')); ?>">About Us</a></li>
                            <li><a href="<?php echo e(route('home.products')); ?>">Products</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<?php /**PATH C:\xampp\htdocs\medi-world-app\resources\views/layouts/frontend/footer.blade.php ENDPATH**/ ?>