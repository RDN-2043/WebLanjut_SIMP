<?= $this->extend('layout/templateUser'); ?>

<?= $this->section('content'); ?>
<link rel="stylesheet" href="/css/viewPerpustakaan.css">
<div class="row">
    <div class="col-lg-8">
        <h4 class="page-header">Daftar Buku</h4>
    </div>
    <!-- /.col-lg-12 -->
</div>
<div class="row">
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
            foreach ($listBuku as $data) :
            ?>
                <tr>
                    <th class="align-middle text-center" scope="row"><?= $i++; ?></th>
                    <td class="align-middle text-center tdJudul"><?= $data['judul']; ?></td>
                    <td class="align-middle text-center"><?= $data['pengarang']; ?></td>
                    <td class="align-middle text-center"><?= $data['penerbit']; ?></td>
                    <td class="align-middle text-center"><?= $data['terbit']; ?></td>
                    <td class="align-middle text-center"><?= $data['isbn']; ?></td>
                    <td class="align-middle text-center"><?= $data['jumlah']; ?></td>
                    <td class="align-middle text-center">
                        <form action="/pinjam/<?= $data['id']; ?>">
                            <?php
                            if ($data['jumlah'] > 0) {
                                print "<button type='submit' class='btn btn-primary'><i class='fa fa-paper-plane'></i>Pinjam</button>";
                            } else {
                                print "<button type='submit' class='btn btn-primary disabled'><i class='fa fa-paper-plane'></i>Pinjam</button>";
                            }
                            ?>
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?= $this->endSection(); ?>