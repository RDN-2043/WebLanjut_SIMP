<?= $this->extend('layout/templateUser'); ?>

<?= $this->section('content'); ?>

<link href="https://fonts.googleapis.com/css?family=Quicksand:400,700&display=swap" rel="stylesheet">

<link rel="stylesheet" href="/css/all.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

<link rel="stylesheet" href="/css/libs.min.css">
<link rel="stylesheet" href="/css/style.min.css">

<!-- Bootstrap Core CSS -->
<link rel="stylesheet" href="/css/bootstrap.min.css">

<!-- Custom CSS -->
<link rel="stylesheet" href="/css/viewMasterAdmin.css">

<!-- Custom Fonts -->
<link rel="stylesheet" href="/css/font-awesome.min.css" type="text/css">


<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />

<section class="products">
    <div class="container">
        <div class="products__inner">
            <?php
            $i = 0;
            foreach ($listBuku as $buku) :
                $i++;
            ?>
                <div class="content-blocks">
                    <div class="content__block" data-order="<?= $i; ?>">
                        <div class="content__desc">

                            <div class="content__desc-title">
                                <?= $buku['judul']; ?>
                            </div>

                            <div class="content__desc-name">
                                <div class="content__desc-theme">
                                    <?= $buku['terbit']; ?>
                                </div>
                            </div>

                            <div class="content__desc-text">
                                <?= $buku['pengarang']; ?>
                            </div>

                            <div class="content__desc-title">
                                <a class="button-deskripsi btn btn-warning" href="<?= base_url('infobuku/' . $buku['id']); ?>"><b>INFO</b></a>
                                <a class="button-pinjam btn btn-success" href="<?= base_url('pinjam/' . $buku['id']); ?>"><B>PINJAM</B></a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="js/libs.min.js"></script>
<script src="js/main.js"></script>

<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<?= $this->endSection(); ?>