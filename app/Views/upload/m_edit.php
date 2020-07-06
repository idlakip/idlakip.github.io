<div class="col-sm-12">
    <a href="<?= base_url('upload/gallery'); ?>" class="btn btn-sm btn-primary my-3">Lihat Gallery</a>
    <!-- left column -->
    <!-- <div class="col-md-6"> -->
    <!-- general form elements -->
    <!-- Jika berhasil -->
    <!-- Jika berhasil -->

    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Edit Nama Gambar</h3>
        </div>
        <?= csrf_field(); ?>
        <form role="form" action="<?= base_url('upload/update/' . $data['id']); ?>" method="POST">
            <div class="card-body">

                <div class="form-group">
                    <label>Nama Gambar</label>

                    <input type="text" class="form-control" name="ket" value="<?= (old('ket')) ? old('ket') : $data['ket'] ?>">
                </div>
                <div class="form-group">
                    <label>Gambar tidak dirubah</label>
                    <input type="text" class="form-control" name="gambar" value="<?= (old('gambar')) ? old('gambar') : $data['gambar'] ?>" disabled>
                </div>
            </div>

            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-success toastsDefaultSuccess">Update</button>
            </div>
        </form>
    </div>
    <!-- /.card -->


</div>
<!-- </div> -->