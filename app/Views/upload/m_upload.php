<div class="col-sm-12">
    <!-- left column -->
    <!-- <div class="col-md-6"> -->
    <!-- general form elements -->
    <!-- Jika berhasil -->
    <?php if (!empty(session()->getFlashdata('succsess'))) { ?>
        <div class="alert alert-success">
            <?php
            echo session()->getFlashdata('success');
            ?>
        </div>
    <?php } ?>
    <!-- Jika Gagal -->
    <?php
    $errors->$validation->getErrors();
    if (!empty($errors)) { ?>
        <div class="alert alert-danger">
            <?php
            echo $validation->listError();
            ?>
        </div>
    <?php } ?>
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Upload Gambar</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <!-- <form role="form" action="" method="POST"> -->
        <?= form_open_multipart(base_url('upload/save')); ?>
        <div class="card-body">

            <div class="form-group">
                <label>Keterangan</label>
                <input type="text" class="form-control" name="ket" placeholder="Keterangan" required>
            </div>

            <div class="form-group">
                <label>Gambar</label>
                <input type="file" class="form-control" name="gambar" required>
                <!-- <input type="file" class="form-control" name="file_upload" required> -->
            </div>

            <!-- <div class="form-group"> -->
            <!-- <label for="customFile">Custom File</label> -->
            <!-- <label>File input</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="sampul" id="customFile">
                            <label class="custom-file-label" for="customFile"></label>
                        </div>
                        <div class="input-group-append">
                            <span class="input-group-text" id="">Upload</span>
                        </div>
                    </div>
                </div> -->


            <!-- <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div> -->
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Upload</button>
        </div>
        <?= form_close() ?>
        <!-- </form> -->
    </div>
    <!-- /.card -->

    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>No.</th>
                <th>Keterangan</th>
                <th>Gambar</th>

                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1;
            foreach ($dataupload as $key => $value) { ?>
                <tr>
                    <td>
                        <?= $no++; ?>
                    </td>

                    <td><?= $value['ket']; ?></td>
                    <td><?= $value['gambar']; ?></td>

                    <td>
                        <a href="<?= base_url('upload/edit/' . $value['id']); ?>" class="btn btn-sm btn-warning">Edit</a>
                        <a href="<?= base_url('upload/delete/' . $value['id']); ?>" class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakin??')">Delete</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
<!-- </div> -->