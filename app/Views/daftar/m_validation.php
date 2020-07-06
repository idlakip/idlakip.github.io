<div class="col-sm-6">
    <!-- Jika berhasil -->
    <?php if (!empty(session()->getFlashdata('success'))) { ?>
        <div class="alert alert-success">
            <?php
            echo session()->getFlashdata('success');
            ?>
        </div>
    <?php } ?>
    <!-- Jika gagal -->
    <?php
    $inputs = session()->getFlashdata('inputs');
    $errors = session()->getFlashdata('errors');
    if (!empty($errors)) { ?>
        <div class="alert alert-danger">
            Ada kesalahan saat input data yaitu :
            <ul>
                <?php foreach ($errors as $error) { ?>
                    <li> <?= esc($error) ?></li>
                <?php } ?>
            </ul>
        </div>
    <?php } ?>
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Form Pendataran</h3>
        </div>
        <?= csrf_field(); ?>
        <?= form_open_multipart('daftar/save'); ?>
        <div class="card-body">

            <div class="form-group">
                <label>NRP</label>
                <input type="text" class="form-control" name="nrp" placeholder="NRP">
            </div>
            <div class="form-group">
                <label>Nama</label>
                <input type="text" class="form-control" name="nama" placeholder="Nama">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" name="email" placeholder="Email">
            </div>
            <div class="form-group">
                <label>Photo</label>
                <input type="file" class="form-control" name="photo">
            </div>



        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        <!-- </form> -->
        <?= form_close() ?>

    </div>
    <!-- /.card -->

</div>