<div class="container mt-4">
    <div class="row">
        <div class="col-lg-5">
            <form action="<?=BASEURL;?>/mahasiswa/search" method="post">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" autocomplete="off" placeholder="Data Mahasiswa" aria-label="Data Mahasiswa" aria-describedby="search" name="keyword" id="keyword">
                    <button class="btn btn-outline-primary" type="button" id="search">Cari</button>
                </div>
            </form>
        </div>
    </div>
    <h3>Daftar Mahasiswa</h3>
    <div class="row mb-1">
        <div class="col-lg-5">
            <button type="button" class="btn btn-primary mb-2 tombolTambahData" data-bs-toggle="modal" data-bs-target="#formModal">
                    Tambah Data
            </button>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-5">
            <?php Flasher::flash();?>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-5">
            <ul class="list-group">
                <?php foreach($data['students'] as $student) :?>
                    <li class="list-group-item d-flex">
                        <div class="me-auto"><?= $student['nama']; ?></div>
                        <a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $student['id']?>" class="badge bg-primary me-1 text-decoration-none">Detail</a>
                        <a href="<?= BASEURL; ?>/mahasiswa/update/<?= $student['id']?>" class="badge bg-warning me-1 text-decoration-none tombolUpdateData" data-bs-toggle="modal" data-bs-target="#formModal" data-id="<?= $student['id']?>">Ubah</a>
                        <a href="<?= BASEURL; ?>/mahasiswa/delete/<?= $student['id']?>" class="badge bg-danger text-decoration-none" onclick="return confirm('Yakin ingin menghapus data?')">Hapus</a>
                    </li>
                <?php endforeach;?>
            </ul>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="formModalLabel">Tambah Data Mahasiswa</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
        <div class="modal-body">
            <form action="<?=BASEURL;?>/mahasiswa/tambah" method="post">
                <input type="hidden" name="id" id="id">
                <div class="mb-2">
                    <label for="name" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="name" name="name" autocomplete="off">
                </div>

                <div class="mb-2">
                    <label for="nrp" class="form-label">NRP</label>
                    <input type="text" class="form-control" id="nrp" name="nrp" autocomplete="off">
                </div>

                <div class="mb-4">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com" autocomplete="off">
                </div>
                
                <select id="jurusan" name="jurusan"class="form-select" aria-label="Default select example">
                    <option value="Sistem Informasi">Sistem Informasi</option>
                    <option value="Teknik Informatika">Teknik Informatika</option>
                    <option value="Manajemen">Manajemen</option>
                    <option value="Akuntansi">Akuntansi</option>
                    <option value="Pariwisata">Pariwisata</option>
                </select>
        </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah Data</button>
      </div>
            </form>
    </div>
  </div>
</div>