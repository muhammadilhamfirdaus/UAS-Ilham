<h2 class="text-center my-4 text-uppercase fw-bold" style="color: #6B4226;">Data Makanan</h2>
<div class="container">
    <div class="mb-3 text-end">
        <a href="?page=makananAdd" class="btn btn-outline-brown btn-sm">[+] Tambah Data Baru</a>
    </div>
    <table class="table table-hover border-brown">
        <thead class="bg-brown text-white">
            <tr>
                <th class="text-center">No</th>
                <th>Nama Makanan</th>
                <th>Daerah Makanan</th>
                <th class="text-center">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include "includes/config.php";
            $query = "SELECT * FROM tbl_makanan ORDER BY id_makanan ASC";
            $sql = mysqli_query($conn, $query);
            $nomor = 1;

            if (mysqli_num_rows($sql) == 0) { ?>
                <tr>
                    <td colspan="4" class="text-center text-muted"><i>Data tidak tersedia</i></td>
                </tr>
            <?php } else {
                while ($data = mysqli_fetch_array($sql)) { ?>
                    <tr>
                        <td class="text-center"><?= $nomor++; ?></td>
                        <td><?= htmlspecialchars($data['nama_makanan']); ?></td>
                        <td><?= htmlspecialchars($data['daerah_makanan']); ?></td>
                        <td class="text-center">
                            <a href="?page=makananUpdate&id=<?= $data['id_makanan']; ?>" class="btn btn-outline-warning btn-sm">Edit</a>
                            <a href="?page=makananDelete&id=<?= $data['id_makanan']; ?>" class="btn btn-outline-danger btn-sm" onclick="return confirm('Yakin ingin menghapus data ini?');">Hapus</a>
                        </td>
                    </tr>
                <?php }
            } ?>
        </tbody>
    </table>
    <div class="text-end">
        <p class="text-brown"><strong>Total:</strong> <?= mysqli_num_rows($sql); ?> item</p>
    </div>
</div>