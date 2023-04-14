<?= $this->extend('layout/template'); ?>


<?= $this->section('content'); ?>
    <div class="container">
        <div class="row">
            <div class="col">
           
            <h2>LIST MAHASISWA</h2>
            
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Username</th>
                        <th scope="col">Password</th>
                        <th scope="col">Email</th>
                        <th scope="col">Kota</th>
                        <th scope="col">Gaji</th>
                        <th scope="col">Detail</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i=1; ?>
                    <?php foreach($pgw as $m) : ?>
                    <tr>
                        <th scope="row"><?= $i++ ?></th>
                        <td><?= $m['username'] ?></td>
                        <td><?= $m['password'] ?></td>
                        <td><?= $m['email'] ?></td>
                        <td><?= $m['kota'] ?></td>
                        <td><?= $m['gaji'] ?></td>
                        <td><?= anchor('Pegawai/detail/'.$m['username'].'', 'Detail') ?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
                <div class="card-body">
                    <?= anchor('pegawai/input', 'Tambah Data Mahasiswa') ?>
                </div>
            </table>
        </div>
    </div>
</div>

    <!-- <?php
    //library table
    $table = new \CodeIgniter\View\Table();

    $template = [
        'table_open' => '<table border="1" cellpadding="2" cellspacing="1" class="mytable">'
    ];

    $table->setTemplate($template);

    $table->setHeading('Nomor', 'Username', 'Password', 'email', 'Kota');

    $no = 1;
    foreach ($pgw as $m) :
        $table->addRow($no++, $m['username'], $m['password'], $m['email'], $m['kota']);
    endforeach;

    echo $table->generate();
    ?> -->
         
    </div>
        </div>
        
    <?= $this->endSection('content'); ?>