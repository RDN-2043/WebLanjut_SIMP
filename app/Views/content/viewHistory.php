<?= $this->extend('layout/templateAdmin'); ?>

<?= $this->section('content'); ?>
<?php

use App\Models\modelAkun;
use App\Models\modelPinjam;

$modelAkun = new modelAkun();
$modelPinjam = new modelPinjam();
$listAkun = $modelAkun->findAll();
$akun = null;

if (session_status() === PHP_SESSION_NONE) {
  session_start();
}

if (isset($_SESSION['akun'])) {
  $akun = $_SESSION['akun'];
}

?>

<div class="p-10 bg-surface-secondary">
  <div class="container">
    <div class="card">
      <div class="card-header">
        <h6>Table Transaksi</h6>

      </div>
      <div class="table-responsive">
        <table class="table table-hover table-nowrap">
          <thead class="table-light">
            <tr>
              <th scope="col">Name</th>
              <th scope="col">Email</th>
              <th scope="col">Phone</th>
              <th scope="col">Booked</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            <?php
            if (!empty($listAkun)) :
              foreach ($listAkun as $akun) :
            ?>
                <tr>
                  <td data-label="Username">
                    <a class="text-heading font-semibold" href="#">
                      <?= $akun['username']; ?>
                    </a>
                  </td>
                  <td data-label="Email">
                    <a class="text-current" href="mailto:rafi@example.com"><?= $akun['email']; ?></a>
                  </td>
                  <td data-label="Phone">
                    <a class="text-current" href="tel:202-555-0152">202-555-0152</a>
                  </td>
                  <td data-label="Booked">
                    <span class="badge bg-soft-success text-success"><?= count($modelPinjam->where('username', $akun['username'])->findAll()) ?></span>
                  </td>
                  <td data-label="" class="text-end">
                    <div class="dropdown">
                      <a class="text-muted" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="bi bi-three-dots-vertical"></i>
                      </a>
                      <div class="dropdown-menu dropdown-menu-end">
                        <a href="#!" class="dropdown-item">
                          Action
                        </a>
                        <a href="#!" class="dropdown-item">
                          Another action
                        </a>
                        <a href="#!" class="dropdown-item">
                          Something else here
                        </a>
                      </div>
                    </div>
                  </td>
                </tr>
            <?php
              endforeach;
            endif;
            ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

<?= $this->endSection(); ?>