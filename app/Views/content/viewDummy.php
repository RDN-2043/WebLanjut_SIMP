<?= $this->extend('layout/templateAdmin'); ?>

<?= $this->section('content'); ?>

<div class="row">
    <div class="col-lg-8">
        <h4 class="page-header">Input Buku</h4>
    </div>
    <!-- /.col-lg-12 -->
</div>

<form>
    <div class="row">
        <div class="form-group col-sm-6">
            <label for="Judulbuku">Judul Buku</label>
            <input type="text" class="form-control" id="Judulbuku" placeholder="Judul Buku">
        </div>
        <div class="form-group col-md-6">
            <label for="Pengarang">Pengarang</label>
            <input type="text" class="form-control" id="Pengarang" placeholder="Nama Pengarang">
        </div>
    </div>
    <div class="form-group">
        <label for="Penerbit">Penerbit</label>
        <input type="text" class="form-control" id="Penerbit" placeholder="Penerbit">
    </div>
    <div class="form-group">
        <label for="TahunTerbit">Tahun Terbit</label>
        <input type="text" class="form-control" id="TahunTerbit" placeholder="dd,mm,yy">
    </div>
    <div class="form-group">
        <div class="form-group ">
            <label for="Jumlah">Jumlah</label>
            <input type="text" class="form-control" id="Jumlah" placeholder="Masukkan Jumlah">
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Tambahkan</button>
</form>

<?= $this->endSection(); ?>