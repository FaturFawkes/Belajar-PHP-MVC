<div class="container mt-5">
    <div class="row col-6">
        <h3>Daftar Mahasiswa</h3>
            <?php foreach($data['mahasiswa'] as $mhs): ?>
                <ul>
                    <li>NIS : <?= $mhs['nis']; ?></li>
                    <li>Nama : <?= $mhs['nama']; ?></li>
                    <li> Kelas : <?= $mhs['kelas']; ?></li>
                    <li>Jurusan : <?= $mhs['jurusan']; ?></li>
                </ul>
            <?php endforeach; ?>
    </div>
</div>