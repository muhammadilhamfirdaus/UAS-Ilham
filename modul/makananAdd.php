<table class="table">
    <thead>
        <tr>
            <th colspan="3" class="text-center"><u>Tambah Data Daftar Makanan</u></th>
        </tr>
    </thead>
    <tbody>
        <form method="post" action="?page=makananAddProses">
            <tr>
                <td>Nama Makanan</td>
                <td>:</td>
                <td><input type="text" name="nama_makanan" class="form-control" required></td>
            </tr>
            <tr>
                <td>Daerah Makanan</td>
                <td>:</td>
                <td><input type="text" name="daerah_makanan" class="form-control" required></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>
                    <input type="submit" name="submit" class="btn btn-primary" value="Submit">
                    <input type="reset" class="btn btn-secondary" value="Reset">
                    <input type="button" class="btn btn-danger" value="Cancel" onClick="document.location='?page=makanan'">
                </td>
            </tr>
        </form>
    </tbody>
</table>