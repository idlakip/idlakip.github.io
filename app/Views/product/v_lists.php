<div class="col-sm-12">
    <a href="<?= base_url('product/tambah'); ?>" class="btn btn-sm btn-primary my-3">Tambah Data</a>

    <div class="alert alert-success">
        <?= session()->getFlashdata('success'); ?>
    </div>
    <table id="example1" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>No.</th>
                <th>Nama Product</th>
                <th>Description Product</th>
                <th>Detail</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1;
            foreach ($product as $key => $value) { ?>
                <tr>
                    <td>
                        <?= $no++; ?>
                    </td>

                    <td><?= $value['product_name']; ?></td>
                    <td><?= $value['product_description']; ?></td>
                    <td><?= $value['created_at']; ?></td>
                    <td>
                        <a href="" class="btn btn-sm btn-warning">Edit</a>
                        <a href="" class="btn btn-sm btn-danger">Delete</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>