<div class="col-sm-12">
    <a href="<?= base_url('berita/tambah'); ?>" class="btn btn-sm btn-primary my-3">Tambah Data</a>
    <?php
    if (!empty(session()->getFlashdata('success'))) { ?>

        <div class="alert alert-success">
            <?= session()->getFlashdata('success'); ?>
        </div>
    <?php  }; ?>



    <div class="row">
        <?php foreach ($berita as $key => $value) { ?>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">
                            <i class="fas fa-text-width"></i>
                            Unordered List
                        </h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <ul>
                            <li>Lorem ipsum dolor sit amet</li>

                        </ul>
                    </div>
                    <!-- /.card-body -->
                </div>

            </div>
        <?php } ?>
        <?php $pager->links(); ?>