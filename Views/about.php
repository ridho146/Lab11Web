<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= $title; ?></title>
</head>
<body>
    <?= $this->include('template/header'); ?>
    <section id="about">
        <div class="row">
        <img src="1.jpg" title="Ridho Prasetya" alt="Ridho Prasetya" class="image-circle" width="230"style="float: left; border: 2px solid black;">
                <h1>Hello!</h1>
                <p>Nama saya Ridho Prasetya. Saya mahasiswa dari <i>Universitas Pelita Bangsa</i> yang saat ini sedang mempelajari materi Praktikum 11: PHP Framework (Codeigniter) dalam mata kuliah <i>Pemrograman Web</i>.</p>
        </div>
    </section>
    <?= $this->include('template/footer'); ?>
</body>
</html>