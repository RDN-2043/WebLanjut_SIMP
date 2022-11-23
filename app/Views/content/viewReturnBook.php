<?= $this->extend('layout/templateUser'); ?>

<?= $this->section('content'); ?>

<div class="container-xl">
    <div class="table-wrapper">
        <div class="table-title">
            <div class="row">
                <div class="col-sm-5">
                    <h2>History Peminjaman Buku</h2>
                </div>
            </div>
        </div>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Judul Buku</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $i = 1;
                foreach ($listBuku as $buku) :
                    $urlDelete = "kembalikanbuku/" . $buku['id'];
                ?>
                    <tr>
                        <td><?= $i++; ?></td>
                        <td><?= $buku['judul']; ?></td>
                        <td>Dipinjam</td>
                        <td>
                            <a href="<?= base_url($urlDelete); ?>" class="delete btn btn-danger" title="Delete" data-toggle="tooltip">Kembalikan</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<?= $this->endSection(); ?>