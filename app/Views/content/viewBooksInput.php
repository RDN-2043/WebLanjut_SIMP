<?= $this->extend('layout/templateAdmin'); ?>

<?= $this->section('content'); ?>

<?php
$id = null;
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

<div class="row">
    <div class="col-lg-8">
        <h4 class="page-header">Input Buku</h4>
    </div>
    <!-- /.col-lg-12 -->
</div>

<form action="<?= base_url('simpanbuku'); ?>" method="post">
    <input class="form-control" name="id" type="hidden" value="<?= $id; ?>">
    <div class="row">
        <div class="form-group col-sm-6">
            <label for="Judulbuku">ISBN</label>
            <input type="text" class="form-control" name="isbn" placeholder="ISBN" value="<?= $isbn; ?>">
        </div>
        <div class="form-group col-sm-6">
            <label for="Judulbuku">Judul Buku</label>
            <input type="text" class="form-control" name="judul" placeholder="Judul Buku" value="<?= $judul; ?>">
        </div>
        <div class="form-group col-md-6">
            <label for="Pengarang">Pengarang</label>
            <input type="text" class="form-control" name="pengarang" placeholder="Nama Pengarang" value="<?= $pengarang; ?>">
        </div>
    </div>
    <div class="form-group">
        <label for="Penerbit">Penerbit</label>
        <input type="text" class="form-control" name="penerbit" placeholder="Penerbit" value="<?= $penerbit; ?>">
    </div>
    <div class="form-group">
        <label for="TahunTerbit">Tahun Terbit</label>
        <input type="text" class="form-control" name="terbit" placeholder="dd,mm,yy" value="<?= $terbit; ?>">
    </div>
    <div class="form-group">
        <div class="form-group ">
            <label for="Jumlah">Jumlah</label>
            <input type="number" class="form-control" name="jumlah" placeholder="Masukkan Jumlah" value="<?= $jumlah; ?>">
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
</form>

<?= $this->endSection(); ?>