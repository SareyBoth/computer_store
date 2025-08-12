<?php $__env->startSection('title', 'Edit Laptop'); ?>

<?php $__env->startSection('content'); ?>
    <div class="box">
        <div class="box-header with-border mt-4">
            <h3 class="box-title"><b>Edit Laptop</b></h3>
        </div>

        <!-- Use PUT method for editing -->
        <form method="POST" action="<?php echo e(route('laptop.update', $laptop->id)); ?>" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>  <!-- Laravel uses PUT for updates -->

            <div class="box-body">

                <!-- Name Field -->
                <div class="row">
                    <div class="form-group col-6">
                        <label for="name">Name*</label>
                        <input type="text" class="form-control" id="name" name="name" 
                               value="<?php echo e(old('name', $laptop->name)); ?>" required>
                    </div>

                    <div class="form-group col-6">
                        <label for="price">Price*</label>
                        <input type="number" class="form-control" id="price" name="price" 
                               value="<?php echo e(old('price', $laptop->price)); ?>" required>
                    </div>
                </div>

                <!-- Image Upload with Preview -->
                <div class="form-group">
                    <div class="mt-3">
                        <img id="imagePreview" 
                             src="<?php echo e(asset($laptops->image ?? 'storage/default.jpg')); ?>" 
                             alt="Image Preview" class="img-thumbnail" style="max-width: 200px;">
                    </div>
                    <label for="image">Change Image</label>
                    <input type="file" class="form-control" id="image" name="image" onchange="previewImage(event)">
                </div>

                <div class="row">
                    <!-- Brand Field -->
                    <div class="form-group col-6">
                        <label for="brand">Brand*</label>
                            <select class="form-control" id="brand" name="brand" required>
                                <option value="" disabled>Select Brand</option>
                                <option value="asus" <?php echo e($laptop->brand == 'asus' ? 'selected' : ''); ?>>Asus</option>
                                <option value="rog" <?php echo e($laptop->brand == 'rog' ? 'selected' : ''); ?>>ROG</option>
                                <option value="msi" <?php echo e($laptop->brand == 'msi' ? 'selected' : ''); ?>>MSI</option>
                                <option value="lenovo" <?php echo e($laptop->brand == 'lenovo' ? 'selected' : ''); ?>>Lenovo</option>
                                <option value="microsoft" <?php echo e($laptop->brand == 'microsoft' ? 'selected' : ''); ?>>Microsoft</option>
                                <option value="alineware" <?php echo e($laptop->brand == 'alineware' ? 'selected' : ''); ?>>Alienware</option>
                                <option value="gigabyte" <?php echo e($laptop->brand == 'gigabyte' ? 'selected' : ''); ?>>Gigabyte</option>
                            </select>
                    </div>

                    <div class="form-group col-6">
                        <label for="cpu">CPU*</label>
                        <input type="text" class="form-control" id="cpu" name="cpu" 
                               value="<?php echo e(old('cpu', $laptop->cpu)); ?>" required>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-6">
                        <label for="ram">Ram*</label>
                        <input type="text" class="form-control" id="ram" name="ram" 
                               value="<?php echo e(old('ram', $laptop->ram)); ?>" required>
                    </div>

                    <div class="form-group col-6">
                        <label for="storage">Storage*</label>
                        <input type="text" class="form-control" id="storage" name="storage" 
                               value="<?php echo e(old('storage', $laptop->storage)); ?>" required>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-6">
                        <label for="graphic">Graphic*</label>
                        <input type="text" class="form-control" id="graphic" name="graphic" 
                               value="<?php echo e(old('graphic', $laptop->graphic)); ?>" required>
                    </div>

                    <div class="form-group col-6">
                        <label for="display">Display*</label>
                        <input type="text" class="form-control" id="display" name="display" 
                               value="<?php echo e(old('display', $laptop->display)); ?>" required>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-6">
                        <label for="os">Operation Software*</label>
                        <input type="text" class="form-control" id="os" name="os" 
                               value="<?php echo e(old('os', $laptop->os)); ?>" required>
                    </div>

                    <div class="form-group col-6">
                        <label for="battery">Battery*</label>
                        <input type="text" class="form-control" id="battery" name="battery" 
                               value="<?php echo e(old('battery', $laptop->battery)); ?>" required>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-6">
                        <label for="weight">Weight*</label>
                        <input type="text" class="form-control" id="weight" name="weight" 
                               value="<?php echo e(old('weight', $laptop->weight)); ?>" required>
                    </div>

                    <div class="form-group col-6">
                        <label for="warranty">Warranty*</label>
                        <input type="text" class="form-control" id="warranty" name="warranty" 
                               value="<?php echo e(old('warranty', $laptop->warranty)); ?>" required>
                    </div>
                </div>

                <div class="form-group col-6">
                    <label for="upgrade">Upgrade*</label>
                    <input type="text" class="form-control" id="upgrade" name="upgrade" 
                           value="<?php echo e(old('upgrade', $laptop->upgrade)); ?>" required>
                </div>

            </div>

            <div class="box-footer">
                <button type="submit" class="btn btn-primary btn-block">Update Laptop</button>
            </div>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<script>
function previewImage(event) {
    const reader = new FileReader();
    reader.onload = function() {
        const preview = document.getElementById('imagePreview');
        preview.src = reader.result; // Set new image preview
        preview.style.display = 'block'; 
    };
    reader.readAsDataURL(event.target.files[0]);
}
</script>

<?php echo $__env->make('adminlte::page', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/sareyboth/Desktop/computer store/resources/views/dashboard/laptop/edit.blade.php ENDPATH**/ ?>