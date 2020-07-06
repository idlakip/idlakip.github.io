<div class="col-sm-12">
    <a href="<?= base_url('uploads/gallery'); ?>" class="btn btn-sm btn-primary my-3">Lihat Data Gallery</a>
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
    <!-- Jika Uploads gagal -->


    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Uploads Multiple Gambar</h3>
        </div>
        <?= csrf_field(); ?>
        <!-- /.card-header -->
        <!-- form start -->
        <!-- <form role="form" action="" method="POST"> -->
        <?= form_open_multipart(base_url('uploads/save')); ?>
        <div class="card-body">

            <div class="form-group">
                <label>Judul</label>
                <input type="text" class="form-control" name="judul" value="Album " autofocus>
            </div>

            <div class="form-group">
                <label>Gambar</label>
                <input type="file" class="form-control" name="file_upload[]" multiple="true" required>
                <!-- <input type="file" class="form-control" name="file_uploads" required> -->
            </div>


        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Uploads</button>
        </div>
        <?= form_close() ?>

    </div>
    <!-- /.card -->

</div>
<!-- </div> -->