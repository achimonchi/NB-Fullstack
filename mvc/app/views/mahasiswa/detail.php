<section id="hero">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="jumbotron">
                    <h1 class="display-4"><?= $data['user']['m_name'] ?></h1>
                    <p class="lead">
                        <?= $data['user']['m_nim'] ?>
                    </p>
                    <p>
                        <?= $data['user']['m_email'] ?>
                    </p>
                    <hr class="my-4">
                    <a class="btn btn-danger btn-md" href="#" role="button">Hapus Mahasiswa</a>
                </div>
            </div>
        </div>
    </div>
</section>