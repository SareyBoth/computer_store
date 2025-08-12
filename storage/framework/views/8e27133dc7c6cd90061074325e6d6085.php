<?php $__env->startSection('title', 'Edit Accessory'); ?>

<?php $__env->startSection('content'); ?>
    <div class="box">
        <div class="box-header with-border mt-4">
            <h3 class="box-title"><b>PC Hardware Edit Form</b></h3>
        </div>
        <form method="POST" action="<?php echo e(route('pc_hardware.update', $pcHardware->id)); ?>" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>
            <div class="box-body">

                <!-- Name Field -->
                <div class="row">
                    <div class="form-group col-6">
                        <label for="name">Name*</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter Accessory name" value="<?php echo e(old('name', $pcHardware->name)); ?>" required>
                    </div>

                    <div class="form-group col-6">
                        <label for="price">Price*</label>
                        <input type="number" class="form-control" id="price" name="price" placeholder="Enter Price" value="<?php echo e(old('price', $pcHardware->price)); ?>" required>
                    </div>
                </div>

                <div class="row">
                    <!-- Brand Field -->
                    <div class="form-group col-6">
                        <label for="type">Type*</label>
                        <select class="form-control" id="type" name="type" required>
                            <option value="" disabled>Select Type</option>
                            <option value="cpu" <?php echo e($pcHardware->type == 'cpu' ? 'selected' : ''); ?>>CPU</option>
                            <option value="ram" <?php echo e($pcHardware->type == 'ram' ? 'selected' : ''); ?>>Ram</option>
                            <option value="cooler" <?php echo e($pcHardware->type == 'cooler' ? 'selected' : ''); ?>>Cooler</option>
                            <option value="intel" <?php echo e($pcHardware->type == 'intel' ? 'selected' : ''); ?>>Intel MotherBoard</option>
                            <option value="amd" <?php echo e($pcHardware->type == 'amd' ? 'selected' : ''); ?>>AMD MotherBoard</option>
                            <option value="gpu" <?php echo e($pcHardware->type == 'gpu' ? 'selected' : ''); ?>>GPU</option>
                            <option value="psu" <?php echo e($pcHardware->type == 'psu' ? 'selected' : ''); ?>>PSU</option>
                            <option value="storage" <?php echo e($pcHardware->type == 'storage' ? 'selected' : ''); ?>>Storage</option>
                            <option value="case" <?php echo e($pcHardware->type == 'case' ? 'selected' : ''); ?>>Case</option>
                            <option value="monitor" <?php echo e($pcHardware->type == 'monitor' ? 'selected' : ''); ?>>Monitor</option>
                        </select>
                    </div>

                    <div class="form-group col-6">
                        <label for="description">Description*</label>
                        <input type="text" class="form-control" id="description" name="description" placeholder="Enter Description" value="<?php echo e(old('description', $pcHardware->description)); ?>" required>
                    </div>
                </div>

                <!-- Image Upload with Preview -->
                <div class="form-group">
                    <div class="mt-3">
                        <img id="imagePreview" src="<?php echo e(asset($pcHardware->image)); ?>" alt="Image Preview" class="img-thumbnail" style="max-width: 200px; display: block;">
                    </div>
                    <label for="image">Change Image</label>
                    <input type="file" class="form-control" id="image" name="image" onchange="previewImage(event)">
                </div>

            </div>

            <div class="box-footer">
                <button type="submit" class="btn btn-success btn-block">Update Accessory</button>
            </div>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<script>
function previewImage(event) {
    const reader = new FileReader();
    reader.onload = function() {
        const preview = document.getElementById('imagePreview');
        preview.src = reader.result; // Set the image source to the result of FileReader
        preview.style.display = 'block'; // Ensure the preview is visible
    };
    reader.readAsDataURL(event.target.files[0]); // Read the file as a Data URL
}

// Functions for checkboxes if needed
function checkAll(name) {
    const checkboxes = document.querySelectorAll(`input[name="${name}[]"]`);
    checkboxes.forEach(checkbox => checkbox.checked = true);
}
function clearAll(name) {
    const checkboxes = document.querySelectorAll(`input[name="${name}[]"]`);
    checkboxes.forEach(checkbox => checkbox.checked = false);
}
</script>

<?php echo $__env->make('adminlte::page', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/sareyboth/Desktop/computer store/resources/views/dashboard/pc-hardware/edit.blade.php ENDPATH**/ ?>