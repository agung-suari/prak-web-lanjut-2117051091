<?= $this->extend('layouts/app')?>
<?= $this->section('content')?>
    <div class="container">
        <div class="form-box">
            <form action="<?= base_url('/user/' . $user['id'])?>" method="POST"  enctype="multipart/form-data">
                <div class="form">
                <?= csrf_field() ?>    
                    <div class="mb-3">
                        <label class="form-label">Nama Lengkap</label>
                        <?php if (session('validation') && session('validation')->hasError('nama')) : ?>
                            <div class="invalid-feedback">
                                <?= session('validation')->getError('nama'); ?>
                            </div>
                        <?php endif; ?>
                        <input type="text" class="form-control <?= session('validation') && session('validation')->hasError('nama') ? 'is-invalid' : '' ?>"  placeholder="Nama" name="nama" value="<?= $user['nama'] ?>">
                    </div>
                    
                    <div class="mb-3">
                        <label class="form-label">NPM</label>
                        <?php if (session('validation') && session('validation')->hasError('npm')) : ?>
                            <div class="invalid-feedback">
                                <?= session('validation')->getError('npm'); ?>
                            </div>
                        <?php endif; ?>
                        <input type="text" class="form-control <?= session('validation') ? 'is-invalid' : '' ?>" placeholder="NPM" name="npm" value="<?= $user['npm'] ?>">
                    </div> 
                    
                    <div class="mb-3">
                        <label class="form-label">Kelas</label>
                        <select class="form-select mt-2" aria-label="Default select example" name="kelas">
                            <option value="" selected disabled>Pilih Kelas</option>
                                <?php
                                foreach ($kelas as $item) {
                                ?>
                                    <option value="<?= $item['id'] ?>" <?=$user['id_kelas']== $item['id'] ? 'selected' : '' ?>><?= $item['nama_kelas'] ?></option>
                            <?php } ?>
                        </select>
                    </div> 

                    <div class="mb-3">
                        <label class="form-label">Foto</label><br>
                        <img src="<?= $user['foto'] ?? '<default-foto>'?>" class="mb-3" width="100px"><br>
                        <input class="form-control" type="file" name="foto">
                    </div>
                    <input type="hidden" name="_method" value="PUT">
                    <input class="btn btn-dark" type="submit" value="Simpan Data">
                </form>
            </div>
        </div>
    </div>
<?= $this->endSection('content') ?>