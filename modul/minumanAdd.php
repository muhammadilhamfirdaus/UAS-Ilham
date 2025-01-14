<table class="table">
    <thead>
        <tr>
            <th colspan="3" class="text-center"><u>Tambah Data Daftar Minuman</u></th>
        </tr>
    </thead>
    <tbody>
        <form method="post" action="?page=minumanAddProses">
            <tr>
                <td>Nama Minuman</td>
                <td>:</td>
                <td><input type="text" name="nama_minuman" class="form-control" required></td>
            </tr>
            <tr>
                <td>Daerah Minuman</td>
                <td>:</td>
                <td><input type="text" name="daerah_minuman" class="form-control" required></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>
                    <input type="submit" name="submit" class="btn btn-primary" value ="Submit">
                    <input type="reset" class="btn btn-secondary" value="Reset">
                    <input type="button" class="btn btn-danger" value="Cancel" onClick="document.location='?page=minuman'">
                </td>
            </tr>
        </form>
    </tbody>
</table>