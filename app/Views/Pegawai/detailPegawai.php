<?= $this->extend('layout/template'); ?>


<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="mt-2">Detail Pegawai</h1>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Username</th>
                        <th scope="col">Password</th>
                        <th scope="col">Email</th>
                        <th scope="col">Kota</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?= $pgw['username'] ?></td>
                        <td><?= $pgw['password'] ?></td>
                        <td><?= $pgw['email'] ?></td>
                        <td><?= $pgw['kota'] ?></td>
                    </tr>
                </tbody>
            </table>
            <div class="card-body">
                    <a href="#" class="btn btn-warning">Edit</a>
                    <a href="/Pegawai/delete/<?= $pgw['username']; ?>" class="btn btn-danger">Hapus</a>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection('content'); ?>