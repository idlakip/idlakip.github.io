<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">

                <div class="card card-primary">
                    <div class="card-header">
                        <div class="card-title">
                            Gallery
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <?php $no = 1;
                            foreach ($dataupload as $key => $value) { ?>
                                <div class="col-sm-2">
                                    <a href="<?= base_url('folder_upload/' . $value['gambar']); ?>" data-toggle="lightbox" data-title="<?= $value['ket']; ?>" data-gallery="gallery">
                                        <img src="<?= base_url('folder_upload/' . $value['gambar']); ?>" class="img-fluid mb-2 sampul" alt="" />
                                    </a>
                                </div>

                            <?php } ?>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>