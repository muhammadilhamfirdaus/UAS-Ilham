<?php
require "includes/config.php";
$id = $_GET['id'];
$query = "SELECT * FROM tbl_makanan WHERE id_makanan=$id";
$sql = mysqli_query($conn, $query);
$data = mysqli_fetch_assoc($sql);
if (mysqli_num_rows($sql) < 1) {
    die("data tidak ditemukan...");
}
?>
<div class="container">
    <h2 class="text-center">Update Data Daftar Makanan</h2>
    <form method="post" action="?page=makananUpdateProses">
        <input type="hidden" name="id" value="<?= $data['id_makanan'] ?>" />
        <div class="mb-3">
            <label for="nama_makanan" class="form-label">Nama Makanan</label>
            <input type="text" name="nama_makanan" class="form-control" value="<?= $data['nama_makanan'] ?>" required>
        </div>
        <div class="mb-3">
            <label for="daerah_makanan" class="form-label">Daerah Makanan</label>
            <input type="text" name="daerah_makanan" class="form-control" value="<?= $data['daerah_makanan'] ?>" required>
        </div>
        <button type="submit" name="update" class="btn btn-success">Update</button>
        <button type="button" class="btn btn-danger" onClick="document.location='?page=makanan'">Cancel</button>
    </form>
</div>