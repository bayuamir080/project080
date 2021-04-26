<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        <title>CRUD Data Ujian</title>
    </head>
    <body>
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                   <h3>Tambah Data</h3>
                </div>
                <div class="card-body">
                    <a href="/ujian" class="btn btn-primary">Kembali</a>
                    <br/>
                    <br/>
                    
                    <form method="post" action="/ujian/store">

                        <?php echo e(csrf_field()); ?>


                        <div class="form-group">
                            <label>Nama Matkul</label>
                            <input type="text" name="nama_mk" class="form-control">

                            <?php if($errors->has('nama_mk')): ?>
                                <div class="text-danger">
                                    <?php echo e($errors->first('nama_mk')); ?>

                                </div>
                            <?php endif; ?>

                        </div>

                        <div class="form-group">
                            <label>Dosen</label>
                            <input type="text" name="dosen" class="form-control">

                            <?php if($errors->has('dosen')): ?>
                                <div class="text-danger">
                                    <?php echo e($errors->first('dosen')); ?>

                                </div>
                            <?php endif; ?>

                        </div>

                        <div class="form-group">
                            <label>Jumlah Soal</label>
                            <input type="number" name="jumlah_soal" class="form-control">

                            <?php if($errors->has('jumlah_soal')): ?>
                                <div class="text-danger">
                                    <?php echo e($errors->first('jumlah_soal')); ?>

                                </div>
                            <?php endif; ?>

                        </div>

                        <div class="form-group">
                            <label>Keterangan</label>
                            <textarea name="keterangan" class="form-control"></textarea>

                             <?php if($errors->has('keterangan')): ?>
                                <div class="text-danger">
                                    <?php echo e($errors->first('keterangan')); ?>

                                </div>
                            <?php endif; ?>

                        </div>

                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Simpan">
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </body>
</html><?php /**PATH C:\xampp\htdocs\project080\resources\views/tambah.blade.php ENDPATH**/ ?>