<?= $this->extend('layouts/app')?>
<?= $this->section('content')?>
<div class="container">
    <div class="content w-100 d-flex justify-content-center align-items-center">
        <div class="profile">
            <div class="img">
                <img src="<?=$user['foto'] ?? '<default-foto>' ?>" >
            </div>
            <div class="box">
                <p class="title mb-0">Nama Lengkap</p>
                <h4 class="data"><?=$user['nama']?></h4>
            </div>
            <div class="box">
                <p class="title mb-0">Kelas</p>
                <h4 class="data"><?=$user['nama_kelas']?></h4>
            </div>
            <div class="box">
                <p class="title mb-0">NPM</p>
                <h4 class="data"><?=$user['npm']?></h4>
            </div>   
        </div>
    </div>
</div>
    <?= $this->endSection('content') ?>