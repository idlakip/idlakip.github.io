<div class="col-12">
    <div class="card card-primary">
        <div class="card-header">

        </div>
        <div class="card-body">
            <div class="row">
                <?php $no = 1;
                foreach ($dataupload as $key => $value) { ?>
                    <div class="col-sm-2">
                        <a href="#" data-toggle="lightbox" data-title="sample 1 - white" data-gallery="gallery">
                            <img src="<?= base_url('folder_upload/' . $value['gambar']); ?>" class="img-fluid mb-2" alt="white sample" />
                        </a>

                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>