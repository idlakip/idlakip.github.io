<!-- <div class="col-sm-12"> -->
<!-- left column -->
<div class="col-md-6">
    <!-- general form elements -->
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Tambah Data</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form role="form" action="<?= base_url('product/save'); ?>" method="POST">
            <div class="card-body">
                <div class="form-group">
                    <label>Product Name</label>
                    <input type="text" class="form-control" name="product_name" placeholder="Product Name" required>
                </div>

                <div class="form-group">
                    <label>Product Description</label>
                    <input type="text" class="form-control" name="product_description" placeholder="Product Description" required>
                </div>

                <div class="form-group">
                    <!-- <label for="customFile">Custom File</label> -->
                    <label>File input</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="sampul" id="customFile">
                            <label class="custom-file-label" for="customFile"></label>
                        </div>
                        <div class="input-group-append">
                            <span class="input-group-text" id="">Upload</span>
                        </div>
                    </div>
                </div>



                <!-- <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div> -->
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
    <!-- /.card -->
</div>
<!-- </div> -->