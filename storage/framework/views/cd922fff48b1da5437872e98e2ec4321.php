<?php $__env->startSection('content'); ?>
<style>
    table#product-extra-info tbody tr td {
        background: #f5f5f9;
        border: 1px solid #ddd;
        padding: 6px;
    }
    .note-dropdown-menu {
        z-index: 2222;
    }
</style>
<div class="container-xxl flex-grow-1 container-p-y">
    <!-- Responsive Table -->
    <div class="card">
        <div class="card-header border-bottom bg-primary d-flex py-3">
            <div class="w-50 my-auto">
                <h5 class="card-title mb-0 text-white"><?php echo e($pageTitle ?? 'N/A'); ?></h5>
            </div>
            <div class="w-50 my-auto text-end">
                <a href="<?php echo e(route('product.index')); ?>" type="button" class=" btn btn-light px-2" style=""><i style="margin-top: -2px; margin-right: 4px;" class='bx bx-list-ul'></i> Product List</a>
            </div>
        </div>
        <div class="card-body pt-2">
            <form action="<?php echo e(route('product.store')); ?>" method="POST" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                
                <div class="row">
                    <div class="col-12">
                        <div class="form-group mt-3">
                            <label for="title">Product Title <span class="text-danger"> *</span></label>
                            <input type="text" name="title" id="title" class="form-control <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="Enter Product Title" value="<?php echo e(old('title')); ?>">
                            <?php $__errorArgs = ['title'];
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
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="form-group mt-3">
                            <label for="slug">Product Slug <span class="text-danger"> *</span></label>
                            <input type="text" name="slug" id="slug" class="form-control <?php $__errorArgs = ['slug'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="Enter Product Slug" value="<?php echo e(old('slug')); ?>" readonly>
                            <?php $__errorArgs = ['slug'];
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
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="form-group mt-3">
                            <label for="sub_title">Product Sub Title <span class="text-danger"> *</span></label>
                            <input type="text" name="sub_title" id="sub_title" class="form-control <?php $__errorArgs = ['sub_title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="Enter Product Sub Title" value="<?php echo e(old('sub_title')); ?>">
                            <?php $__errorArgs = ['sub_title'];
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
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-sm-6 col-12">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group mt-3">
                                    <label for="category_id">Product Categoy <span class="text-danger"> *</span></label>
                                    <select name="category_id" id="category_id" class="form-control select2"></select>
                                    <?php $__errorArgs = ['category_id'];
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
                                <div class="form-group mt-3">
                                    <label for="subcategory_id">Product Sub Categoy <span class="text-dark">( Optional )</span></label>
                                    <select name="subcategory_id" id="subcategory_id" class="form-control select2"></select>
                                    <?php $__errorArgs = ['subcategory_id'];
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
                                <div class="form-group mt-3">
                                    <label for="brand_id">Product Brand <span class="text-dark">( Optional )</span></label>
                                    <select name="brand_id" id="brand_id" class="form-control select2"></select>
                                    <?php $__errorArgs = ['brand_id'];
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
                                <div class="form-group mt-3">
                                    <label for="origin_id">Product Origin <span class="text-dark">( Optional )</span></label>
                                    <select name="origin_id" id="origin_id" class="form-control select2"></select>
                                    <?php $__errorArgs = ['origin_id'];
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
                                <div class="form-group mt-3">
                                    <label for="country">Made In <span class="text-dark">( Optional )</span></label>
                                    <select name="country" id="country" class="form-control select2"></select>
                                    <?php $__errorArgs = ['country'];
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
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6 col-12">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group mt-3">
                                    <label for="thumbnail">Product Thumbnail <span class="text-danger">*</span></label>
                                    <input type="file" name="thumbnail" id="thumbnail" class="form-control" placeholder="Product Thumbnail">
                                    <?php $__errorArgs = ['thumbnail'];
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
                                <div class="form-group mt-3">
                                    <label for="featured_image">Product Featured Images<span class="text-dark">( Optional )</span></label>
                                    <input type="file" name="featured_image[]" id="featured_image" class="form-control" placeholder="Product Thumbnail" multiple>
                                    <?php $__errorArgs = ['featured_image'];
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
                                <div class="form-group mt-3">
                                    <label for="catalog">Uplad Product Catalog <span class="text-dark">( Optional )</span></label>
                                    <input type="file" name="catalog" id="catalog" class="form-control" placeholder="Upload Product Catalog">
                                    <?php $__errorArgs = ['catalog'];
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
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group mt-3 mb-0 pb-2 border-bottom">
                                    <label for="">Product Extra Information <span class="text-dark">( Optional )</span></label>
                                </div>
                            </div>
                            <div class="col-12">
                                
                                <table class="table table-borderd" id="product-extra-info">
                                    <tbody>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-12 mt-2">
                                <button type="button" class="btn btn-sm btn-primary" onclick="addInfo();">Add New</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 mt-3">
                        <textarea name="description" id="description"></textarea>
                    </div>
                    <div class="col-12 mt-3">
                        <div class="form-check form-switch mb-2">
                            <input class="form-check-input" name="policy" type="checkbox" id="privacy_policy" />
                            <label class="form-check-label" for="privacy_policy">Privacy Policy</label>
                        </div>
                    </div>
                    <div class="col-12 mt-1 d-none">
                        <div class="form-check form-switch mb-2">
                            <input class="form-check-input" name="terms" type="checkbox" id="terms" />
                            <label class="form-check-label" for="terms">Terms Of Service</label>
                        </div>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">Add Product</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!--/ Responsive Table -->
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
    <?php echo $__env->make('layouts.admin.all-select2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <script>
        jQuery(function(e) {
            'use strict';
            $(document).ready(function() {
                $('#description').summernote({height: 200});
            });
        });
    </script>
    <script>
        $(document).ready(function () {
            category();
            brand();
            origin();
            country();
        });

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="carf-token"]').attr('content')
            }
        });

        $('#category_id').change(function(){
            var cat_id =$('#category_id').val();
            sub_category(cat_id);
        });

        // $(function() {
        //     var dataTable;

        //     dataTable = $('.DataTable').DataTable({
        //         processing: true,
        //         serverSide: true,
        //         pageLength: 100,
        //         dom: 'Bfrtip',
        //         buttons: [
        //             // 'copy',
        //             'excel',
        //             'csv',
        //             'pdf',
        //             'print',
        //             'reset'
        //         ],
        //         ajax: {
        //             url: "<?php echo e(url()->current()); ?>",
        //             data: function(d) {
        //             },
        //             error: function(xhr, textStatus, errorThrown) {
        //                 // Handle the error, e.g., display a message or take appropriate action
        //                 console.error("Error: " + textStatus, errorThrown);
        //             },
        //         },

        //         columns: [
        //             {
        //                 data: 'sl',
        //                 name: 'sl',
        //                 className: 'text-center',
        //                 searchable: true,
        //                 orderable: true
        //             },
        //             {
        //                 data: 'product',
        //                 name: 'product',
        //                 className: 'text-left',
        //                 searchable: true,
        //                 orderable: true
        //             },
        //             {
        //                 data: 'action',
        //                 name: 'action',
        //                 className: 'text-center',
        //                 orderable: false
        //             }

        //         ]

        //     });

        // });

        // $.fn.dataTable.ext.buttons.reset = {
        //     text: '<i class="fas fa-undo d-inline"></i> Reset' , action: function ( e, dt, node, config ) {
        //         dt.clear().draw();
        //         dt.ajax.reload();
        //     }
        // };


        // // Get Data For Edit
        // function edit(id){
        //     var url = "<?php echo e(route('brand.edit', ':id')); ?>";
        //     url = url.replace(':id', id);
        //     $.ajax({
        //         type: "GET",
        //         url: url,
        //         success: function(data) {
        //             $('#brand_id').val(data.id);
        //             $('#brand_name').val(data.name);
        //             $('#addBrand').addClass('d-none');
        //             $('#UpdateBrand').removeClass('d-none');
        //             $('#addBrandModal').modal('show');
        //         }
        //     });
        // }

        // //  Update
        // function UpdateBrand(){
        //     var data_id = $('#brand_id').val();
        //     var name = $('#brand_name').val();
        //     var formData2 = new FormData();
        //     formData2.append('id', data_id);
        //     formData2.append('name', name);
        //     formData2.append('_token', $('meta[name="csrf-token"]').attr('content'));

        //     var url = '<?php echo e(route('brand.update', ':id')); ?>';
        //     url = url.replace(':id', data_id);
        //     $.ajax({
        //         type: "POST",
        //         dataType: "json",
        //         data: formData2, // Use FormData for files
        //         contentType: false,
        //         processData: false, // Important when using FormData
        //         url: url,
        //         success: function(res) {
        //             BrandResetForm();
        //             $('#brand_id').val('');
        //             success_msg('Brand Update Successfully');
        //             $('.brand_close').click();
        //             $('.DataTable').DataTable().ajax.reload();
        //         },
        //         error: function(error) {
        //             var errors = error.responseJSON.errors;
        //             if (errors.name) {
        //                 $('.brand_name_Error').text(errors.name);
        //                 $('#brand_name').addClass('border-danger is-invalid');
        //                 $('#brand_name').focus();
        //                 error_msg(''+errors.name);
        //             }
        //         }
        //     });
        // }

        // // Delete
        // function destroy(id){
        //     var url = "<?php echo e(route('brand.destroy', ':id')); ?>";
        //     url = url.replace(':id', id);
        //     Swal.fire({
        //         title: "Are you sure?",
        //         text: "You won't be able to revert this!",
        //         icon: "warning",
        //         showCancelButton: true,
        //         confirmButtonColor: "#3085d6",
        //         cancelButtonColor: "#d33",
        //         confirmButtonText: "Yes, delete it!"
        //         }).then((result) => {
        //             if (result.isConfirmed) {
        //                 $.ajax({
        //                     type: "GET",
        //                     url: url,
        //                     success: function(data) {
        //                         if(data === 'data_have'){
        //                             warning_msg('There is some data here so it cannot be deleted.');
        //                         }
        //                         else{
        //                             success_msg('Brand Deleted Successfully.');
        //                             $('.DataTable').DataTable().ajax.reload();
        //                         }
        //                     },
        //                     error: function(){
        //                         warning_msg('Brand Not Found!');
        //                     }
        //                 });
        //             }
        //      });
        // }
    </script>

    <script>
        // Slug Making
        $('#title').keyup(function() {
            $('#slug').val($(this).val().toLowerCase().split(',').join('').replace(/\s/g,"-"));
        });
        $(document).on("click", ".delete-row", function() {
            var row = $(this).closest("tr");
            var rowId = row.find("input[name='row_id']").val();
            row.remove();
        });
        function addInfo(){
            var rowCount = $("#product-extra-info tbody tr").length + 1; // initial row index number
            var newRow = $(
                '<tr>' +

                '<td class="text-center" style="width: 50%;"><input required type="text" class="form-control info_title" placeholder="Info Title" name="info_title[]"></td>' +

                '<td class="text-center" style="width: 50%;"><input required type="text" class="form-control info_details" placeholder="Info Details" name="info_details[]"></td>' +

                '<td class="text-center" style="width: 40px;"><input type="hidden" name="row_id[]" value="'+ rowCount +'"><button type="button" class="btn btn-sm btn-danger p-1 delete-row"><i class="bx bxs-message-square-x"></i></button></td>' +

                '</tr>'
            );
            $("#product-extra-info tbody").append(newRow);
        }
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\medi-world-app\resources\views/admin/pages/products/create.blade.php ENDPATH**/ ?>