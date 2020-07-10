<div class="col-sm-12">




    <div class="row">
        <?php foreach ($berita as $key => $value) { ?>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">
                            <i class="fas fa-text-width"></i>
                            <?= $value['judul']; ?>
                        </h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <ul>
                            <li><?= $value['isi_berita']; ?></li>

                        </ul>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
        <?php } ?>

        <?php echo $pager->links('berita', 'paging'); ?>