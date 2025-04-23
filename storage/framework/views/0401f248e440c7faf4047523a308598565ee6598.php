<?php $__env->startSection('content'); ?>
<div class="container">
    <h1>Halaman Pengguna Admin</h1>
    <?php if(Session::get('message')): ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <?php echo e(Session::get('message')); ?>

            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php endif; ?>
    <div class="row">
        <div class="card">
            <div class="card-header">
                <h4>Form Tambah Pengguna Admin</h4>
            </div>
            <div class="card-body">
                <form action="<?php echo e(route('listPenggunaAdministrasi.store')); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('POST'); ?>
                    <div class="mb-3">
                        <label for="">Nama Lengkap</label>
                        <input type="text" name="nama_lengkap" placeholder="nama lengkap" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="">Username</label>
                        <input type="text" name="username" placeholder="username" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="">Password</label>
                        <input type="password" name="password" class="form-control">
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
                <h4>List Pengguna Admin</h4>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Lengkap</th>
                            <th>Username</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no=1; ?>
                        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($no++); ?></td>
                            <td><?php echo e($item->nama_lengkap); ?></td>
                            <td><?php echo e($item->username); ?></td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>

                </table>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\radar-bogor-booking\resources\views/pengguna_admin/index.blade.php ENDPATH**/ ?>