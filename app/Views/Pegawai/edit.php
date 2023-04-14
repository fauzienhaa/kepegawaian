<?= $this->extend('layout/template'); ?>


<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h2>Form Ubah Data Pegawai</h2>
    
    <?= $validation->listErrors() ?>

    <?= form_open('Pegawai/input') ?>

    <h5>Username</h5>
    <input type="text" name="username" value="<?php echo set_value('username'); ?>" size="50" />

    <h5>Password</h5>
    <input type="text" name="password" value="<?php echo set_value('password'); ?>" size="50" />

    <h5>Password Confirm</h5>
    <input type="text" name="passconf" value="<?php echo set_value('passconf'); ?>" size="50" />

    <h5>Email Address</h5>
    <input type="text" name="email" value="<?php echo set_value('email'); ?>" size="50" />

    <h5>Kota Tinggal</h5>
    <?php
    $options = [
        'ska'   => 'Surakarta',
        'skh'   => 'Sukoharjo',
        'kra'   => 'Karanganyar',
        'srg'   => 'Sragen',
        'jak'   => 'Jakarta',
        'bdg'   => 'Bandung',
    ];
    
    echo form_dropdown('kota', $options, 'kra');
    ?>
    <br>
    <br>
    <div><input class="btn btn-primary" type="submit" value="Submit" /></div>

    </form>
    <?= $this->endSection('content'); ?>