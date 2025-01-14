<h2 class="text-center my-4 text-uppercase fw-bold" style="color: #6B4226;">Data Minuman</h2>
<div class="container">
    <div class="mb-3 text-end">
        <a href="?page=minumanAdd" class="btn btn-outline-brown btn-sm">
            [+] Tambah Data Baru
        </a>
    </div>
    <table id="DataTables" class="table table-hover border-brown">
        <thead class="bg-brown text-white">
            <tr>
                <th class="text-center">No</th>
                <th>Nama Minuman</th>
                <th>Daerah Minuman</th>
                <th class="text-center">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include "includes/config.php";
            $query = "SELECT * FROM tbl_minuman ORDER BY id_minuman ASC";
            $sql = mysqli_query($conn, $query);
            $nomor = 1;

            if (mysqli_num_rows($sql) == 0) { ?>
                <tr>
                    <td colspan="4" class="text-center text-muted"><em>No data available</em></td>
                </tr>
                <?php } else {
                while ($data = mysqli_fetch_array($sql)) { ?>
                    <tr>
                        <td class="text-center fw-bold"><?= $nomor++; ?></td>
                        <td><?= htmlspecialchars($data['nama_minuman']); ?></td>
                        <td><?= htmlspecialchars($data['daerah_minuman']); ?></td>
                        <td class="text-center">
                            <a href="?page=minumanUpdate&id=<?= $data['id_minuman']; ?>" class="btn btn-outline-warning btn-sm">
                                Edit
                            </a>
                            <a href="?page=minumanDelete&id=<?= $data['id_minuman']; ?>" class="btn btn-outline-danger btn-sm" onclick="return confirm('Yakin ingin menghapus data ini?');">
                                Hapus
                            </a>
                        </td>
                    </tr>
            <?php }
            } ?>
        </tbody>
    </table>
    <div class="text-end">
        <p class="fw-bold text-muted">Total: <?= mysqli_num_rows($sql); ?></p>
    </div>
</div>