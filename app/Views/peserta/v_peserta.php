<div class="col-sm-12">
    <table id="tabeldata" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>No.</th>
                <th>Nama</th>
                <th>Lembaga</th>
                <th>Event</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1;
            foreach ($rekap as $key => $value) {  ?>
                <tr>
                    <td>
                        <?= $no++; ?>
                    </td>
                    <td><?= $value['pst_nama']; ?></td>
                    <td><?= $value['lbg_nama']; ?></td>
                    <td><?= $value['event_judul']; ?></td>
                    <td>
                        <a href="<?= base_url('peserta/edit/' . $value['peserta_id']); ?>" class="btn btn-sm btn-warning">Edit</a>
                        <a href="<?= base_url('peserta/delete/' . $value['peserta_id']); ?>" class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakin??')">Delete</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>