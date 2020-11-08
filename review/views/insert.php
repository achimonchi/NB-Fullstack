<?php include("../templates/header.php") ?>
<a href="../">Back</a>
<h1>Form Tambah Mahasiswa</h1>
<form action="../process/controller.php" method="POST">
    <table cellpadding="6">
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><input type="text" name="m_name" required></td>
        </tr>
        <tr>
            <td>Email</td>
            <td>:</td>
            <td><input type="email" name="m_email" required></td>
        </tr>
        <tr>
            <td>Program Studi</td>
            <td>:</td>
            <td>
                <select name="m_major" id="" required>
                    <option value="">---- Pilih Prodi -----</option>
                    <option value="Teknik Informatika">Teknik Informatika</option>
                    <option value="Sistem Informasi">Sistem Informasi</option>
                    <option value="Teknik Komputer">Teknik Komputer</option>
                </select>
            </td>
        </tr>
        <tr>
            <td colspan="3">
                <button style="width:100%" type="submit" name="add">Kirim</button>
            </td>
        </tr>
    </table>
</form>
<?php include("../templates/footer.php") ?>
