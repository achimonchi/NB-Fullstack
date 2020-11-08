<?php
    include_once("../config/connection.php");

    $id = $_GET['id'];
    $query = "SELECT * FROM mahasiswa WHERE _id='$id'";
    $result = $conn->query($query);
    while($row = $result->fetch_assoc()){
        $name = $row['m_name'];
        $email = $row['m_email'];
        $major = $row['m_major'];
        $_id = $row['_id'];
    }
?>

<?php include("../templates/header.php"); ?>
<a href="../">Back</a>
<h1>Form Update Mahasiswa</h1>
<form action="../process/controller.php" method="POST">
    <input type="hidden" name="_id" value="<?= $_id ?>">
    <table cellpadding="6">
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><input type="text" name="m_name" value="<?= $name ?>" required></td>
        </tr>
        <tr>
            <td>Email</td>
            <td>:</td>
            <td><input type="email" name="m_email" value="<?= $email ?>" required></td>
        </tr>
        <tr>
            <td>Program Studi</td>
            <td>:</td>
            <td>
                <?php $prodi = ["Teknik Informatika", "Sistem Informasi", "Teknik Komputer"]; ?>
                <select name="m_major" id="" required>
                    <option value="<?= $major ?>"><?= $major ?></option>
                    <?php foreach($prodi as $m) : ?>
                        <?php if ($m !== $major) : ?>
                            <option value="<?= $m ?>"><?= $m ?></option>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </select>
            </td>
        </tr>
        <tr>
            <td colspan="3">
                <button style="width:100%" type="submit" name="update">Kirim</button>
            </td>
        </tr>
    </table>
</form>
<?php include("../templates/footer.php") ?>
