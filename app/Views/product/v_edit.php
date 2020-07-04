<!-- <div class="col-sm-12"> -->
<!-- left column -->
<div class="col-md-6">
    <!-- general form elements -->
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Edit Data</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form role="form" action="<?= base_url('product/update/' . $product['product_id']); ?>" method="POST">
            <div class="card-body">
                <div class="form-group">
                    <label>Product Name</label>
                    <input type="text" class="form-control" name="product_name" value="<?= $product['product_name']; ?>" placeholder="Product Name" required>
                </div>

                <div class="form-group">
                    <label>Product Description</label>
                    <input type="text" class="form-control" name="product_description" value="<?= $product['product_description']; ?>" placeholder="Product Description" required>
                </div>


            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>
    </div>
    <!-- /.card -->
</div>
<!-- </div> -->