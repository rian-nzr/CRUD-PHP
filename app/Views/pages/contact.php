<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class=" ">
    <p>contact</p>

    <?php foreach ($alamat as $a) : ?>
        <ul>
            <li><?= $a['tipe']; ?></li>
            <li><?= $a['alamat']; ?></li>
            <li><?= $a['kota']; ?></li>
        </ul>

    <?php endforeach; ?>

</div>



<?= $this->endSection(); ?>