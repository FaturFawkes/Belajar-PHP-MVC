<div class="container mt-5">
    <div class="row col-6">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary col-4 mb-4" data-bs-toggle="modal" data-bs-target="#formModal">
          Tambah Data Mahasiswa
        </button>
        <h3>Daftar Mahasiswa</h3>
            <?php foreach($data['mahasiswa'] as $mhs): ?>
                <ul class="list-group">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                      <?= $mhs['nama']; ?> <a href="<?= BASEURL;?>/mahasiswa/detail/<?= $mhs['id']; ?>" class="badge bg-success">Detail</a>
                    </li>
                </ul>
            <?php endforeach; ?>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Siswa</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">


        <form action="<?= BASEURL; ?>/mahasiswa/tambah" method="post">
          <div class="mb-3">
            <label for="nis" class="form-label">Nomor Induk Siswa</label>
            <input type="number" class="form-control" id="nis" name="nis" aria-describedby="nis">
            <div id="nis" class="form-text">Contoh: 181910349</div>
          </div>
          <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama">
          </div>
          <div class="mb-3 p-0 form-check">
          <label for="kelas" class="form-label">Kelas</label>
            <select class="form-select" id="kelas" name="kelas" aria-label="Default select example">
              <option selected>Pilih Kelas :</option>
              <option value="10">10</option>
              <option value="11">11</option>
              <option value="12">12</option>
            </select>
          </div>
          <div class="mb-3 p-0 form-check">
          <label for="jurusan" class="form-label">Jurusan</label>
            <select class="form-select" id="jurusan" name="jurusan" aria-label="Default select example">
              <option selected>Pilih Jurusan :</option>
              <option value="RPL">Rekayasa Perangkat Lunak</option>
              <option value="TKJ">Teknik Komputer Jaringan</option>
              <option value="OTKP">Adminstrasi Perkantoran</option>
            </select>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah Siswa</button>
        </form>
      </div>
    </div>
  </div>
</div>