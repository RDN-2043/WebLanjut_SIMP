<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>


<div class="p-10 bg-surface-secondary">
  <div class="container">
    <div class="card">
      <div class="card-header">
        <h6>Bootstrap 5 Table</h6>

      </div>
      <div class="table-responsive">
        <table class="table table-hover table-nowrap">
          <thead class="table-light">
            <tr>
              <th scope="col">Name</th>
              <th scope="col">Email</th>
              <th scope="col">Phone</th>
              <th scope="col">Booked</th>
              <th scope="col">Description</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td data-label="Email">
              <img alt="..." src="#">
                <a class="text-heading font-semibold" href="#">
                  Rafi Dinata
                </a>
              </td>
              <td data-label="Phone">
                <a class="text-current" href="mailto:rafi@example.com">rafi@example.com</a>
              </td>
              <td data-label="Booked">
                <a class="text-current" href="tel:202-555-0152">202-555-0152</a>
              </td>
              <td data-label="Description">
                <span class="badge bg-soft-success text-success">4</span>
              </td>
              <td data-label="">
                <a class="text-current" href="#">Borrowed</a>
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
            <tr>
              <td data-label="Email">
              <img alt="..." src="#">
              <a class="text-heading font-semibold" href="#">
                  Fadhillah
                </a>
              </td>
              <td data-label="Phone">
                <a class="text-current" href="mailto:Fadhillah@example.com">Fadhillah@example.com</a>
              </td>
              <td data-label="Booked">
                <a class="text-current" href="tel:224-567-2662">224-567-2662</a>
              </td>
              <td data-label="Description">
                <span class="badge bg-soft-warning text-warning">5</span>
              </td>
              <td data-label="">
                <a class="text-current" href="#">Borrowed</a>
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
            <tr>
              <td data-label="Email">
              <img alt="..." src="#" class="avatar avatar-sm rounded-circle me-2">
                <a class="text-heading font-semibold" href="#">
                  Fachru SP
                </a>
              </td>
              <td data-label="Phone">
                <a class="text-current" href="fachru.sp@example.com">fachru.sp@example.com</a>
              </td>
              <td data-label="Booked">
                <a class="text-current" href="tel:401-505-6800">401-505-6800</a>
              </td>
              <td data-label="Description">
                <span class="badge bg-soft-danger text-danger">2</span>
              </td>
              <td data-label="">
                <a class="text-current" href="#">Returned</a>
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
            <tr>
              <td data-label="Email">
              <img alt="..." src="#" class="avatar avatar-sm rounded-circle me-2">
                <a class="text-heading font-semibold" href="#">
                  Syahril PS
                </a>
              </td>
              <td data-label="Phone">
                <a class="text-current" href="msyahril.ps@example.com">syahril.ps@example.com</a>
              </td>
              <td data-label="Booked">
                <a class="text-current" href="tel:307-560-8817">307-560-8817</a>
              </td>
              <td data-label="Description">
                <span class="badge bg-soft-success text-success">9</span>
              </td>
              <td data-label="">
                <a class="text-current" href="#">Borrowed</a>
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
            <tr>
              <td data-label="Email">
              <img alt="..." src="#" class="avatar avatar-sm rounded-circle me-2">
                <a class="text-heading font-semibold" href="#">
                  Joyboy
                </a>
              </td>
              <td data-label="Phone">
                <a class="text-current" href="mailto:joyboy@example.com">joyboy@example.com</a>
              </td>
              <td data-label="Booked">
                <a class="text-current" href="tel:202-555-0152">202-555-0152</a>
              </td>
              <td data-label="Description">
                <span class="badge bg-soft-success text-success">7</span>
              </td>
              <td data-label="">
                <a class="text-current" href="#">Returned</a>
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
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

<?= $this->endSection(); ?>