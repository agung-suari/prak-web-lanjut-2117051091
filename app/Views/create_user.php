<?= $this->extend('layouts/app')?>
<?= $this->section('content')?>
    <div class="container">
        <div class="form-box">
            <form action="<?= base_url('/user/store');?>" method="POST"  enctype="multipart/form-data">
                <div class="row">
                    <div class="col-6">
                        <div class="form">
                            <div class="mb-3">
                                <label class="form-label">Nama Lengkap</label>
                                <?php if (session('validation') && session('validation')->hasError('nama')) : ?>
                                    <div class="invalid-feedback">
                                        <?= session('validation')->getError('nama'); ?>
                                    </div>
                                <?php endif; ?>
                                <input type="text" class="form-control <?= session('validation') && session('validation')->hasError('nama') ? 'is-invalid' : '' ?>"  placeholder="Nama" name="nama">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">NPM</label>
                                <?php if (session('validation') && session('validation')->hasError('npm')) : ?>
                                <div class="invalid-feedback">
                                    <?= session('validation')->getError('npm'); ?>
                                </div>
                                <?php endif; ?>
                                <input type="text" class="form-control <?= session('validation') ? 'is-invalid' : '' ?>" placeholder="NPM" name="npm">
                            </div>                 
                        </div> 
                    </div>
                    <div class="col-6">
                        <div class="form">
                            <div class="mb-3">
                                <label class="form-label">Kelas</label>
                                <select class="form-select mt-2" aria-label="Default select example" name="kelas">
                                    <option value="" selected disabled>Pilih Kelas</option>
                                    <?php
                                    foreach ($kelas as $item) {
                                        ?>
                                        <option value="<?= $item['id'] ?>"><?= $item['nama_kelas'] ?></option>
                                        <?php } ?>
                                </select>
                            </div>                       
                            <div class="mb-3">
                                <label class="form-label">Foto</label><br>
                                <input class="form-control" type="file" name="foto">
                            </div>
                        </div>
                    </div>
                </div>
                <input class="btn btn-dark" type="submit" value="Create Data">
            </form>
        </div>
    </div>
<?= $this->endSection('content') ?>