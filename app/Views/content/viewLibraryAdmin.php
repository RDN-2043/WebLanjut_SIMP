<?= $this->extend('layout/templateAdmin'); ?>

<?= $this->section('content'); ?>
<?php

use App\Models\modelAkun;

$modelAkun = new modelAkun();
$akun = null;

if (session_status() === PHP_SESSION_NONE) {
  session_start();
}

if (isset($_SESSION['akun'])) {
  $akun = $_SESSION['akun'];
}

?>

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
                        <?php
                        if($akun['tipe'] == "User"){
                            $redirectTo = "/pinjam/" . $data['id'];
                            $btnName = "Pinjam";
                        }else {
                            $redirectTo = "/updatebuku/" . $data['id'];
                            $btnName = "Edit";
                        }

                        ?>
                        <form action="<?= $redirectTo; ?>">
                        <button type="submit" class="btn btn-primary <?= $data['jumlah'] == 0 ? "disabled" : ""; ?>"><i class="fa fa-paper-plane"></i><?= $btnName; ?></button>
                        <?php
                            /*if ($data['jumlah'] > 0) {
                                echo "<button type='submit' class='btn btn-primary'><i class='fa fa-paper-plane'></i>Pinjam</button>";
                            } else {
                                echo "<button type='submit' class='btn btn-primary disabled'><i class='fa fa-paper-plane'></i>Pinjam</button>";
                            }*/
                        ?>
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?= $this->endSection(); ?>