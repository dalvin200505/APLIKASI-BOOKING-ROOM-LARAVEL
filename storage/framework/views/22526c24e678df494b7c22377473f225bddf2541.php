<?php $__env->startSection('content'); ?>
<div class="container">
    <h1>Halaman Ruangan</h1>
    <?php if(Session::get('message')): ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <?php echo e(Session::get('message')); ?>

            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php endif; ?>
    <div class="row">
        <div class="card">
            <div class="card-header">
                <h4>Form Tambah Ruangan</h4>
            </div>
            <div class="card-body">
                <form action="<?php echo e(route('listRuangan.store')); ?>" method="post" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('POST'); ?>
                    <div class="mb-3">
                        <label for="">Nama Ruangan</label>
                        <input type="text" name="nm_room" placeholder="nama ruangan" class="form-control">
                      </div>
                      <div class="mb-3">
                        <label for="">Lokasi Ruangan</label>
                        <textarea name="lokasi" cols="20" rows="3" placeholder="lokasi ruangan" class="form-control"></textarea>
                      </div>
                      <div class="mb-3">
                        <label for="">Foto Ruangan</label>
                        <input type="file" name="foto_room" class="form-control">
                      </div>
                      <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="card">
            <div class="card-header">
                <h4>List Ruangan</h4>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Ruangan</th>
                            <th>Lokasi Ruangan</th>
                            <th>Foto Ruangan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no=1; ?>
                        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($no++); ?></td>
                            <td><?php echo e($item->nm_room); ?></td>
                            <td><?php echo e($item->lokasi); ?></td>
                            <td><img src="<?php echo e(url('Image/Ruangan/' .$item->foto_room)); ?>" alt="" style="width: 150px; height: 100px;"></td>
                            <td>
                                <form action="<?php echo e(route('listRuangan.destroy', $item->id)); ?>" method="POST">
                                    <a href="<?php echo e(route('listRuangan.edit',  $item->id)); ?>" class="btn btn-warning">edit</a>
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('yakin ingin menghapus <?php echo e($item->nm_room); ?>?')">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\radar-bogor-booking\resources\views/ruangan/index.blade.php ENDPATH**/ ?>