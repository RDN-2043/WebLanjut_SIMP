<?= $this->extend('layout/templateAdmin'); ?>

<?= $this->section('content'); ?>

<?php
$id;
$isbn = "";
$judul = "";
$pengarang = "";
$penerbit = "";
$terbit = "";
$jumlah = 0;

if (!empty($buku)) {
    $id = $buku['id'];
    $isbn = $buku['isbn'];
    $judul = $buku['judul'];
    $pengarang = $buku['pengarang'];
    $penerbit = $buku['penerbit'];
    $terbit = $buku['terbit'];
    $jumlah = $buku['jumlah'];
}

?>

<div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Input New Books</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Please enter the data of the book with valid data!
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <form action="<?= base_url('simpanbuku'); ?>" method="post">
                                    <input class="form-control" name="id" type="hidden" value="<?= $id; ?>">
                                    <div class="form-group">
                                        <label>ISBN</label>
                                        <input class="form-control" name="isbn" value="<?= $isbn; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Judul</label>
                                        <input class="form-control" name="judul" value="<?= $judul; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Pengarang</label>
                                        <input class="form-control" name="pengarang" value="<?= $pengarang; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Penerbit</label>
                                        <input class="form-control" name="penerbit" value="<?= $penerbit; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Terbit</label>
                                        <input class="form-control" name="terbit" value="<?= $terbit; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Jumlah</label>
                                        <input class="form-control" name="jumlah" type="number" value="<?= $jumlah; ?>">
                                    </div>
                                    <button type="submit" class="btn btn-default">Simpan</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>