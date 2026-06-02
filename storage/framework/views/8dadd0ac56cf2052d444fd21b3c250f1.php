

<?php $__env->startSection('title', 'Dashboard'); ?>

<?php $__env->startSection('content'); ?>

<h1 class="mb-4">Dashboard Perpustakaan</h1>

<div class="row mb-4">

    <div class="col-md-4">
        <div class="card border-primary">
            <div class="card-body">
                <h5>Total Buku</h5>
                <h2><?php echo e($totalBuku); ?></h2>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card border-success">
            <div class="card-body">
                <h5>Buku Tersedia</h5>
                <h2><?php echo e($bukuTersedia); ?></h2>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card border-danger">
            <div class="card-body">
                <h5>Buku Habis</h5>
                <h2><?php echo e($bukuHabis); ?></h2>
            </div>
        </div>
    </div>

</div>

<div class="row mb-4">

    <div class="col-md-4">
        <div class="card border-info">
            <div class="card-body">
                <h5>Total Anggota</h5>
                <h2><?php echo e($totalAnggota); ?></h2>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card border-success">
            <div class="card-body">
                <h5>Anggota Aktif</h5>
                <h2><?php echo e($anggotaAktif); ?></h2>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card border-secondary">
            <div class="card-body">
                <h5>Anggota Nonaktif</h5>
                <h2><?php echo e($anggotaNonaktif); ?></h2>
            </div>
        </div>
    </div>

</div>

<div class="row mt-4">

    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                5 Buku Terbaru
            </div>

            <ul class="list-group list-group-flush">
                <?php $__currentLoopData = $bukuTerbaru; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $buku): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li class="list-group-item">
                        <?php echo e($buku->judul); ?>

                    </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    </div>

    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                5 Anggota Terbaru
            </div>

            <ul class="list-group list-group-flush">
                <?php $__currentLoopData = $anggotaTerbaru; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $anggota): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li class="list-group-item">
                        <?php echo e($anggota->nama); ?>

                    </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    </div>

</div>

<div class="card mt-4">
    <div class="card-header">
        Quick Links
    </div>

    <div class="card-body">

        <a href="<?php echo e(route('buku.index')); ?>"
           class="btn btn-primary me-2">
            Kelola Buku
        </a>

        <a href="<?php echo e(route('anggota.index')); ?>"
           class="btn btn-success me-2">
            Kelola Anggota
        </a>

        <a href="<?php echo e(route('home')); ?>"
           class="btn btn-secondary">
            Home
        </a>

    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\semester 4\matkul pemweb2\kuliah\kuliahku\resources\views/dashboard/index.blade.php ENDPATH**/ ?>