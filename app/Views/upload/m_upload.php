<div class="col-sm-12">
    <a href="<?= base_url('upload/gallery'); ?>" class="btn btn-sm btn-primary my-3">Lihat Data Gallery</a>
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
    <!-- Jika Upload gagal -->
    <?php
    $errors = $validation->getErrors();
    if (!empty($errors)) { ?>
        <div class="alert alert-danger">
            <?php
            echo $validation->listErrors();
            ?>
        </div>
    <?php } ?>

    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Upload Gambar</h3>
        </div>
        <?= csrf_field(); ?>
        <!-- /.card-header -->
        <!-- form start -->
        <!-- <form role="form" action="" method="POST"> -->
        <?= form_open_multipart(base_url('upload/save')); ?>
        <div class="card-body">

            <div class="form-group">
                <label>Nama</label>
                <input type="text" class="form-control" name="ket" placeholder="Keterangan" required>
            </div>

            <div class="form-group">
                <label>Gambar</label>
                <input type="file" class="form-control" name="gambar" required>
                <!-- <input type="file" class="form-control" name="file_upload" required> -->
            </div>


        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Upload</button>
        </div>
        <?= form_close() ?>

    </div>
    <!-- /.card -->
    <table id="tabeldata" class="table table-bordered table-striped">
        <!-- <table class="table table-bordered table-striped"> -->
        <thead>
            <tr>
                <th>No.</th>
                <th>Nama</th>
                <th>Gambar</th>

                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1;
            foreach ($data as $key => $u) { ?>
                <tr>
                    <td>
                        <?= $no++; ?>
                    </td>

                    <td><?= $u['ket']; ?></td>
                    <td>
                        <a href="<?= base_url('folder_upload/' . $u['gambar']); ?>" data-toggle="lightbox" data-title="<?= $u['ket']; ?>" data-gallery="gallery">

                            <!-- <img src="#" alt="white sample" class="sampul"> -->
                            <img src="<?= base_url('folder_upload/' . $u['gambar']); ?>" class="img-fluid mb-2 sampul" alt="" />
                    </td>

                    <td>
                        <a href="<?= base_url('upload/edit/' . $u['id']); ?>" class="btn btn-sm btn-warning">Edit</a>
                        <!-- <a href="<?= base_url('upload/delete/' . $u['id']); ?>" class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakin??')">Delete</a> -->
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
<!-- </div> -->