<?php
require "includes/config.php";
$id = $_GET['id'];
$query = "SELECT * FROM tbl_minuman WHERE id_minuman=$id";
$sql = mysqli_query($conn, $query);
$data = mysqli_fetch_assoc($sql);
if (mysqli_num_rows($sql) < 1) {
    die("data tidak ditemukan...");
}
?>
<div class="container">
    <h2 class="text-center">Update Data Daftar Minuman</h2>
    <form method="post" action="?page=minumanUpdateProses">
        <input type="hidden" name="id" value="<?= $data['id_minuman'] ?>" />
        <div class="mb-3">
            <label for="nama_minuman" class="form-label">Nama Minuman</label>
            <input type="text" name="nama_minuman" class="form-control" value="<?= $data['nama_minuman'] ?>" required>
        </div>
        <div class="mb-3">
            <label for="daerah_minuman" class="form-label">Daerah Minuman</label>
            <input type="text" name="daerah_minuman" class="form-control" value="<?= $data['daerah_minuman'] ?>" required>
        </div>
        <button type="submit" name="update" class="btn btn-success">Update</button>
        <button type="button" class="btn btn-danger" onClick="document.location='?page=minuman'">Cancel</button>
    </form>
</div>