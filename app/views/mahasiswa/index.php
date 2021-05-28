<div class="container mt-5">
    <div class="row col-6">
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