<div class="container" mt-4>

<div class="row">
    <div class="col-lg-6 mt-5">
        <?php Flasher::flash();?>
    </div>
</div>

<div class="row">
    <div class="col-lg-6 ">
       <form action="<?= BASEURL ;?>/mahasiswa/cari" method="POST">
        <div class="input-group ">
            <input type="text" class="form-control" placeholder="Cari" name="keyword" autocomplete="off">
            <div class="input-group-append">
                <button class="btn btn-primary" type="submit" id="tombolCari" >Cari</button>
            </div>
            </div>
       </form>
    </div>
</div>



<div class="row">
<div class="col-lg-6">
    <button type="button" class="btn btn-primary  mt-3 tombolTambahData" data-toggle="modal" data-target="#exampleModal">
        Tambah Mahasiswa
    </button>
<h3 class="mt-3">Daftar Mahasiswa</h3>
        <ul class="list-group" >
        <?php foreach ($data['mhs'] as  $mhs ) : ?> 
                <li class="list-group-item ">
                    <?= $mhs['nama']; ?>
                    <a href = "<?= BASEURL ;?>/mahasiswa/detail/<?= $mhs['id'];?>" class="badge badge-primary  float-right ml-1">Detail</a>

                    <a href = "<?= BASEURL ;?>/mahasiswa/ubah/<?= $mhs['id'];?>"
                     class="badge badge-success  float-right ml-1 tampilModalUbah"  data-toggle="modal" data-target="#exampleModal" data-id="<?= $mhs['id']; ?>" >Edit</a>

                    <a href = "<?= BASEURL ;?>/mahasiswa/Hapus/<?= $mhs['id'];?>" 
                    class="badge badge-danger float-right ml-1" 
                    onclick="return confirm('yakin?' );" >Delete</a>
                </li>
                
        <?php endforeach; ?>
        </ul>

</div>
</div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="<?= BASEURL; ?>/mahasiswa/tambah" method="POST">
      <input type="hidden" name="id" id="id">
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" >
        </div>
        <div class="form-group">
            <label for="npm">npm</label>
            <input type="number" class="form-control" id="npm" name="npm" >
        </div>
        <div class="form-group">
            <label for="email">email</label>
            <input type="email" class="form-control" id="email" name="email" >
        </div>
         <div class="form-group">
            <label for="jurusan">Jurusan</label>
            <select class="form-control" id="jurusan" name = "jurusan">
            <option value="Teknik Informatika">Teknik Infromatika</option>
            <option value="Teknik Informatika">Sistem Informasi</option>
                 
            </select>
        
  </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">SIMPAN</button>
         </form>
      </div>
    </div>
  </div>
</div>



 