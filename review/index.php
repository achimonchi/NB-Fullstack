<?php
    include_once("config/connection.php");

    $query = "SELECT * FROM mahasiswa";
    // $data = mysqli_query($conn, $query);
    $data = $conn->query($query);
?>

<?php include("templates/header.php"); ?>

<div class="container p-5">
    <div class="row justify-content-center">
        <div class="col-sm-8">
            <h1 class="text-center">Table Mahasiswa</h1>
            <center>
                <a class="btn btn-info btn-sm" href="views/insert.php">Tambah Mahasiswa</a>
            </center>
        </div>
    </div>
    <div class="row mt-3">
        <?php while($rows = $data->fetch_assoc()) : ?>
            <div class="col-sm-4 mb-3">
                <div class="card-mhs">
                    <div class="row">
                        <div class="col-sm-8">
                            <h4> <?= $rows['m_name'] ?> </h4>
                            <small style="opacity:.5"><?= $rows['m_email'] ?></small>
                            <br>                    
                            <i><?= $rows['m_major'] ?></i>
                        </div>
                        <div class="col-sm-4">
                            <a href="views/update.php?id=<?= $rows['_id'] ?>" class="btn btn-sm btn-outline-success btn-block mb-2">Update</a>
                            <a href="views/delete.php?id=<?= $rows['_id'] ?>" class="btn btn-sm btn-outline-danger btn-block mb-2">Delete</a>
                        </div>
                    </div>

                </div>
            </div>
        <?php endwhile; ?> 
    </div>
</div>

<?php include("templates/footer.php"); ?>