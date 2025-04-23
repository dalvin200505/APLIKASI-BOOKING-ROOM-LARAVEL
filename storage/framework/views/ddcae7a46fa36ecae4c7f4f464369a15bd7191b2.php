<?php $__env->startSection('content'); ?>
<div class="container">
    <h1>Halaman Cetak</h1>
    <div class="row">
        <div class="card">
            <div class="card-header">
                <h4>Form Cetak Ruangan</h4>
            </div>
            <div class="card-body">
                <table class="table">
                        <tr>
                            <th>Nama Ruangan</th>
                            <th>Nama yang Booking</th>
                            <th>No. Hp</th>
                            <th>Waktu Mulai</th>
                            <th>Waktu Berakhir</th>
                        </tr>
                        <tr>
                            <td><?php echo e($data->nama_ruangan); ?></td>
                            <td><?php echo e($data->nama_rebook); ?></td>
                            <td><<?php echo e($data->no_hp_rebook); ?></td>
                            <td><?php echo e($data->waktu_mulai); ?></td>
                            <td><?php echo e($data->waktu_berakhir); ?></td>

                        </tr>


            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\radar-bogor-booking\resources\views/booking/show.blade.php ENDPATH**/ ?>