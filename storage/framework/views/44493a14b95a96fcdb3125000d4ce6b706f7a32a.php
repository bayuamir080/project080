<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        <title>Tugas CRUD</title>
    </head>
    <body>
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                    <h3>Tugas CRUD</h3>
                </div>
                <div class="card-body">
                    <a href="/ujian/tambah" class="btn btn-primary">Tambah</a>
                    <br/>
                    <br/>
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>Nama Matkul</th>
                                <th>Dosen</th>
                                <th>Jumlah Soal</th>
                                <th>Keterangan</th>
                                <th>Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $ujian; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $u): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($u->nama_mk); ?></td>
                                <td><?php echo e($u->dosen); ?></td>
                                <td><?php echo e($u->jumlah_soal); ?></td>
                                <td><?php echo e($u->keterangan); ?></td>
                                <td>
                                    <a href="/ujian/edit/<?php echo e($u->id); ?>" class="btn btn-warning">Edit</a>
                                    <a href="/ujian/hapus/<?php echo e($u->id); ?>" class="btn btn-danger">Hapus</a>
                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html><?php /**PATH C:\xampp\htdocs\project080\resources\views/ujian.blade.php ENDPATH**/ ?>