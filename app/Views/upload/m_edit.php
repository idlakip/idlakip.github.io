<div class="col-sm-12">
    <a href="<?= base_url('upload/gallery'); ?>" class="btn btn-sm btn-primary my-3">Lihat Gallery</a>
    <!-- left column -->
    <!-- <div class="col-md-6"> -->
    <!-- general form elements -->
    <!-- Jika berhasil -->
    <?php if (!empty(session()->getFlashdata('success'))) { ?>
        <div class="alert alert-success">
            <?php
            echo session()->getFlashdata('success');
            ?>
        </div>
    <?php } ?>

    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Edit Nama Gambar</h3>
        </div>
        <form role="form" action="<?= base_url('upload/update/' . $upload['id']); ?>" method="POST">
            <div class="card-body">

                <div class="form-group">
                    <label>Nama Gambar</label>

                    <input type="text" class="form-control" name="ket" value="<?= $upload['ket']; ?>" required>
                </div>
                <!-- <div class="form-group">
                    <label>Gambar</label>
                    <input type="file" class="form-control" name="gambar" value="#">
                </div> -->
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