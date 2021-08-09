<div class="container mt-4">
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title"><?= $data['students']['nama'];?></h5>
            <h6 class="card-subtitle mb-2 text-muted"><?= $data['students']['nrp'] ?></h6>
            <p class="card-text"><?= $data['students']['email']; ?></p>
            <p class="card-text"><?= $data['students']['jurusan']; ?></p>
            <a href="<?=BASEURL;?>/mahasiswa/" class="card-link text-decoration-none">Back</a>
        </div>
    </div>
</div>