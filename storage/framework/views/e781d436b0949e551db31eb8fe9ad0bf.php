

<?php $__env->startSection('title', 'Drinks Table'); ?>

<?php $__env->startSection('content_header'); ?>
    <div class="d-flex justify-content-between mx-4">
        <h1>Drinks Table</h1>
        <div>
            <form action="<?php echo e(route('accessory.create')); ?>" method="GET" style="display: inline;">
                <button type="submit" class="btn btn-dark">
                    Create New
                </button>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="">
        <!-- /.card-header -->
        <div class="card-body">
            <table id="example" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>NO</th>
                        <th>Name</th>
                        <th>brand</th>
                        <th>Image</th>
                        <th>Price</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $accessorys; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($loop->iteration); ?></td>
                            <td><?php echo e($index->name); ?></td>
                            <td><?php echo e(ucwords($index->brand)); ?></td>
                            <td>
                                <img src="<?php echo e(asset('' . $index->image)); ?>" alt="Drink Image" style="max-width: 100px; max-height: 100px;">
                            </td>
                            <td><?php echo e(ucwords($index->price)); ?></td>
                            <td>
                                <a href="<?php echo e(route('accessory.edit', $index->id)); ?>" class="btn btn-secondary btn-sm">Update</a>
                                <!-- Delete Form -->
                                <form action="<?php echo e(route('accessory.destroy', $index->id)); ?>" method="POST" style="display: inline;">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this drink?');">
                                        Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->

    <!-- Pagination Links -->
    <div class="pagination-container mt-5 mb-5 d-flex justify-content-end">
        <?php echo e($accessorys->links('pagination::bootstrap-4')); ?>

    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/dataTables.bootstrap4.min.css">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    <script>
        $(document).ready(function() {
            $('#example').DataTable({
                "paging": true,
                "lengthChange": true,
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });

            // Confirmation dialog for delete
            $('.delete-form').on('submit', function(e) {
                e.preventDefault(); // Prevent form submission
                if (confirm('Are you sure you want to delete this record?')) {
                    this.submit(); // Submit the form if confirmed
                }
            });
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('adminlte::page', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/sareyboth/Desktop/computer store/resources/views/dashboard/accessory/index.blade.php ENDPATH**/ ?>