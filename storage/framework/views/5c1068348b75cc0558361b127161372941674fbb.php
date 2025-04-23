<?php $__env->startSection('content'); ?>
<div class="container">
    <h1>Halaman Booking Ruangan</h1>
    <?php if(Session::get('message')): ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <?php echo e(Session::get('message')); ?>

            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php endif; ?>
    <div class="row">
        <div class="card">
            <div class="card-header">
                <h4>List Booking Ruangan</h4>
            </div>
             <div class="card-body">

                <form action="<?php echo e(route('RebookRuangan.search')); ?>" method="GET">
                    <input type="text" name="search" placeholder="Cari nama Pembooking">
                    <button type="submit"class="btn btn-primary">Search</button>
                </form>
                <br>
                <table class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Ruangan</th>
                            <th>Nama yang Booking</th>
                            <th>No. Hp</th>
                            <th>Waktu Mulai</th>
                            <th>Waktu Berakhir</th>
                            <th>Cancel</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no=1; ?>
                        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($no++); ?></td>
                            <td><?php echo e($item->nama_ruangan); ?></td>
                            <td><?php echo e($item->nama_rebook); ?></td>
                            <td><a href="https://wa.me/<?php echo e($item->no_hp_rebook); ?>" target="_blank"><?php echo e($item->no_hp_rebook); ?></a></td>
                            <td><?php echo e($item->waktu_mulai); ?></td>
                            <td><?php echo e($item->waktu_berakhir); ?></td>
                            <td>
                                <form action="<?php echo e(route('RebookRuangan.destroy', $item->id)); ?>" method="POST">
                                    <a href="<?php echo e(route('RebookRuangan.show', $item->id)); ?>" class="btn btn-warning">cetak</a>
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('yakin ingin cancel ruangan untuk <?php echo e($item->nama_rebook); ?>?')">Cancel</button>
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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\radar-bogor-booking\resources\views/booking/index.blade.php ENDPATH**/ ?>