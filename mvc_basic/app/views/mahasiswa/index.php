<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="jumbotron">
                <h1 class="display-4">List Mahasiswa</h1>
                <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
                <hr class="my-4">
                <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
                <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            
                <?php foreach($data['mahasiswa'] as $mhs) : ?>
                    <ul>
                        <li>Nama : <?= $mhs["m_name"] ?></li>
                        <li>NIM : <?= $mhs["m_nim"] ?></li>
                        <li><a href="<?= BASE_URL.'mahasiswa/detail/'.$mhs['_id'] ?>">Detail</a></li>
                    </ul>   

                <?php endforeach ?>
        </div>
    </div>
</div>