<?= $this->extend('layout/templateAdmin'); ?>

<?= $this->section('content'); ?>
<link rel="stylesheet" href="/css/viewUser.css">

<div class="container-xl">
    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-5">
                        <h2>User <b>Management</b></h2>
                    </div>
                    <!-- <div class="col-sm-7">
                        <a href="#" class="btn btn-secondary"><i class="material-icons">&#xE147;</i> <span>Add New User</span></a>
                    </div> -->
                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Date Created</th>
                        <th>Role</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i = 1;
                    foreach ($listAkun as $akun) :
                        $urlDelete = "delete/" . $akun['username'];
                    ?>
                        <tr>
                            <td><?= $i++; ?></td>
                            <td><?= $akun['username']; ?></td>
                            <td><?= $akun['ditambahkan']; ?></td>
                            <td><?= $akun['tipe']; ?></td>
                            <td><span class="status text-success">&bull;</span> Active</td>
                            <td>
                                <a href="#" class="settings" title="Settings" data-toggle="tooltip"><i class="material-icons">&#xE8B8;</i></a>
                                <a href="<?= base_url($urlDelete); ?>" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE5C9;</i></a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="container-xl">
    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-5">
                        <h2>User <b>Validation</b></h2>
                    </div>
                    <!-- <div class="col-sm-7">
                        <a href="#" class="btn btn-secondary"><i class="material-icons">&#xE147;</i> <span>Add New User</span></a>
                    </div> -->
                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Role</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i = 1;
                    foreach ($listValidating as $akun) :
                        $redirectTo = "validateUserAccount/" . $akun['username'];
                    ?>
                        <tr>
                            <td><?= $i++; ?></td>
                            <td><?= $akun['username']; ?></td>
                            <td><?= $akun['tipe']; ?></td>
                            <td><span class="status text-danger">&bull;</span> Not Validated</td>
                            <td><a class='btn btn-primary' href="<?= base_url($redirectTo); ?>">Validate</a></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>