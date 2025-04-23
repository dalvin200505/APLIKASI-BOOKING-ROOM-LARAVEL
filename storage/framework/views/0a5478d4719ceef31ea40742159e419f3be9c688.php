<?php $__env->startSection('content'); ?>
<div class="container">
    <h1>Halaman Ruangan</h1>
    <div class="row">
        <div class="card">
            <div class="card-header">
                <h4>Form Edit Ruangan</h4>
            </div>
            <div class="card-body">
                <form action="<?php echo e(route('listRuangan.update', $data->id)); ?>" method="post" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('PUT'); ?>
                    <div class="mb-3">
                        <label for="">Nama Ruangan</label>
                        <input type="text" name="nm_room" placeholder="nama ruangan" class="form-control" value="<?php echo e($data->nm_room); ?>">
                      </div>
                      <div class="mb-3">
                        <label for="">Lokasi Ruangan</label>
                        <textarea name="lokasi" cols="20" rows="3" placeholder="lokasi ruangan" class="form-control"><?php echo e($data->lokasi); ?></textarea>
                      </div>
                      <div class="mb-3">
                        <label for="">Foto Ruangan</label>
                        <input type="file" name="foto_room" class="form-control">
                      </div>
                      <button type="submit" class="btn btn-primary">Edit</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\radar-bogor-booking\resources\views/ruangan/edit.blade.php ENDPATH**/ ?>