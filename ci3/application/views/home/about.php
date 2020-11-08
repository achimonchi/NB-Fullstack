<div class="container">
    <div class="row">
        <div class="col-md-5 mt-5">
            <h1>Hallo, nama saya <?= $nama ?></h1>

            <?php foreach($admin as $a) :  ?>
                <li><?= $a->a_nama ?></li>
            <?php endforeach; ?>
        </div>
    </div>
</div>