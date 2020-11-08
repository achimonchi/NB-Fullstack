<section id="mhs">
    <div class="container">
        <div class="row">
            <div class="col-md-12 mb-3 mt-5">
                <h1 class="display-4">List Mahasiswa</h1>
                <hr>
                <button data-toggle="modal" data-target="#exampleModal" class="btn btn-primary mt-3">Tambah Mahasiswa</button>
            </div>
        </div>
        <div class="row">
            <?php foreach($data['users'] as $user) : ?>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            
                            <h5 class=""><?= $user['m_name'] ?></h5>
                            <a href="<?= BASEURL.'mahasiswa/detail/'.$user['_id'] ?>" class="btn btn-info btn-sm">
                            Detail</a>
                            <button class="btn btn-danger btn-sm mr-2">Delete</button>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>
</section>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Form Tambah Data Mahasiswa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="#" method="POST">
        <div class="modal-body">
            <label for="">Nama Lengkap</label>
            <input type="text" name="m_name" placeholder="Isi nama disini ..." class="mb-3 form-control">
            <label for="">Email</label>
            <input type="email" name="m_email" placeholder="mhs@pcr.ac.id ..." class="mb-3 form-control">
            <label for="">NIM</label>
            <input type="text" name="m_nim" placeholder="175xxxx ..." class="mb-3 form-control">
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </form>
      
    </div>
  </div>
</div>