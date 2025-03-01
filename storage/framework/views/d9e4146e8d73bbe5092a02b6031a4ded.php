<!-- Modal -->
<div class="modal fade" id="addCategoryModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary py-3">
                <h5 class="modal-title text-white" id="exampleModalLabel1">Add Category</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <input type="hidden" id="cat_id">
                <div class="row">
                    <div class="col mb-3">
                        <label for="name" class="form-label">Category Name <span class="text-danger">*</span></label>
                        <input type="text" id="category_name" name="category_name" class="form-control <?php $__errorArgs = ['category_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>  <?php $__errorArgs = ['slug'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('category_name')); ?>" placeholder="Enter Category Name"/>

                        <span class="text-danger category_name_Error"></span> <br>
                        <span class="text-danger slug_Error"></span>
                    </div>
                </div>
                <div class="row d-none">
                    <div class="col mb-3">
                        <label for="slug" class="form-label">Category Slug <span class="text-danger">*</span></label>
                        <input type="text" id="slug" name="slug" class="form-control <?php $__errorArgs = ['slug'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('slug')); ?>" placeholder="Enter Category Slug" />
                    </div>
                </div>
                <div class="row">
                    <div class="col mb-3">
                        <label for="image" class="form-label">Category Image <span class="text-danger">*</span></label>
                        <span class="text-success">( Image Size : 370 x 395 Pixel )</span>
                        <input type="file" name="image" id="image" class="form-control <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" onchange="document.getElementById('image_id').src = window.URL.createObjectURL(this.files[0])"/>
                        <span class="text-danger image_Error"></span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 mb-3">
                        <label for="image" class="form-label">Image View</label>
                    </div>
                    <div class="col-12">
                        <div class="img" style="margin: auto; text-align: center; vertical-align: middle; border: 1px solid #ddd; border-radius: 4px; padding: 4px; height: 250px; overflow: hidden;" >
                            <img id="image_id" class="img-fluid" style="height: 240px; width: auto;" src="<?php echo e(asset('admin/assets/img/no-image.png')); ?>" alt="">
                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-12 text-end">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                        <button type="button" id="formSubmit" class="btn btn-warning" onclick="resetForm();">Reset</button>
                        <button type="button" id="addCategory" class="btn btn-primary" onclick="addCategory();">Add</button>
                        <button type="button" id="UpdateCategory" class="btn btn-primary d-none" onclick="UpdateCategory();">Update</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->startPush('scripts'); ?>
    <script>
        $('#addCategoryModalBtn').click(function() {
            resetForm();
            $('#addCategory').removeClass('d-none');
            $('#UpdateCategory').addClass('d-none');
            $('#addCategoryModal').modal('show');
        });

        // Category Slug Making
        $('#category_name').keyup(function() {
            $('#slug').val($(this).val().toLowerCase().split(',').join('').replace(/\s/g,"-"));
        });

        // Reset Category Data
        function resetForm(){
            $('#category_name').val('');
            $('#slug').val('');
            $('#image').val('');

            $('.category_name_Error').text('');
            $('#category_name').removeClass('border-danger is-invalid');

            $('.slug_Error').text('');
            $('#slug').removeClass('border-danger is-invalid');
        }

        // Category Added
        function addCategory(){
            var category_name = $('#category_name').val();
            var slug = $('#slug').val();
            var image = $('#image')[0].files[0];

            var formData = new FormData();
            formData.append('category_name', category_name);
            formData.append('slug', slug);
            formData.append('image', image);
            formData.append('_token', $('meta[name="csrf-token"]').attr('content'));
            $.ajax({
                type: "POST",
                dataType: "json",
                data: formData, // Use FormData for files
                contentType: false,
                processData: false, // Important when using FormData
                url: "<?php echo e(route('category.store')); ?>",
                success: function(res) {
                    resetForm();
                    success_msg('Category Added Successfully');
                    $('.btn-close').click();
                    $('.DataTable').DataTable().ajax.reload();
                },
                error: function(error) {
                    var errors = error.responseJSON.errors;
                    if (errors.slug) {
                        $('.slug_Error').text(errors.slug);
                        $('#category_name').addClass('border-danger is-invalid');
                        $('#category_name').focus();
                        error_msg(''+errors.slug);
                    }
                    if (errors.category_name) {
                        $('.category_name_Error').text(errors.category_name);
                        $('#category_name').addClass('border-danger is-invalid');
                        $('#category_name').focus();
                        error_msg(''+errors.category_name);
                    }

                    // console.log(errors.category_name.);
                }
            });

        }
    </script>
<?php $__env->stopPush(); ?>
<?php /**PATH C:\xampp\htdocs\medi-world-app\resources\views/admin/modals/add-categroy.blade.php ENDPATH**/ ?>