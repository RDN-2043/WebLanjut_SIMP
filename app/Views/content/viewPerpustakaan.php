<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<link rel="stylesheet" href="/css/viewPerpustakaan.css">
<table class="table_responsive mx-auto mt-5">
    <thead>
        <tr>
            <th class="align-middle text-center" scope="col">NO</th>
            <th class="align-middle text-center" scope="col">Judul</th>
            <th class="align-middle text-center" scope="col">Pengarang</th>
            <th class="align-middle text-center" scope="col">Penerbit</th>
            <th class="align-middle text-center" scope="col">Tahun Terbit</th>
            <th class="align-middle text-center" scope="col">ISBN</th>
            <th class="align-middle text-center" scope="col">Jumlah</th>
            <th class="align-middle text-center" scope="col">Pinjam</th>
        </tr>
    </thead>
    <tbody class="table-group-divider">
        <?php
        $i = 1;
        foreach ($perpustakaan as $data) :
        ?>
            <tr>
                <th class="align-middle text-center" scope="row"><?= $i++; ?></th>
                <td class="align-middle text-center tdJudul"><?= $data['judul']; ?></td>
                <td class="align-middle text-center"><?= $data['pengarang']; ?></td>
                <td class="align-middle text-center"><?= $data['penerbit']; ?></td>
                <td class="align-middle text-center"><?= $data['terbit']; ?></td>
                <td class="align-middle text-center"><?= $data['isbn']; ?></td>
                <td class="align-middle text-center"><?= $data['jumlah']; ?></td>
                <td class="align-middle text-center"><button type="submit" class="btn btn-primary"><i class="fa fa-paper-plane"></i>Pinjam</button></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<?= $this->endSection(); ?>