<?php

class mahasiswa extends Controller{
public function index()
{
    $data['judul'] = 'daftar mahasiswa';
    $data['mhs'] = $this->model('mahasiswa_model')->getAllMahasiswa();
    $this->view('templates/header' ,$data);
    $this->view('mahasiswa/index',$data);
    $this->view('templates/footer');

}

public function detail($id)
{
    $data['judul'] = 'Detail mahasiswa';
    $data['mhs'] = $this->model('mahasiswa_model')->getMahasiswaById($id);
    $this->view('templates/header' ,$data);
    $this->view('mahasiswa/detail',$data);
    $this->view('templates/footer');

}

public function tambah()
{
    if($this->model('Mahasiswa_model')->tambahDataMahasiswa($_POST) > 0 )
    {
        Flasher::setFlash('berhasil','Ditambahkan','success');
        header('Location:' . BASEURL . '/mahasiswa');
        exit;
    }else{
        Flasher::setFlash('gagal','Ditambahkan','danger');
        header('Location:' . BASEURL . '/mahasiswa');
        exit;
    }
}

public function hapus($id)
{
    if($this->model('Mahasiswa_model')->hapusDataMahasiswa($id) > 0 )
    {
        Flasher::setFlash('berhasil','dihapus','success');
        header('Location:' . BASEURL . '/mahasiswa');
        exit;
    }else{
        Flasher::setFlash('gagal','dihapus','danger');
        header('Location:' . BASEURL . '/mahasiswa');
        exit;
}
}

public function getubah(){
    echo json_encode($this->model('mahasiswa_model')->getMahasiswaById($_POST['id']));
}

public function ubah(){
    if($this->model('Mahasiswa_model')->ubahDataMahasiswa($_POST) > 0 )
    {
        Flasher::setFlash('berhasil','Diubah','success');
        header('Location:' . BASEURL . '/mahasiswa');
        exit;
    }else{
        Flasher::setFlash('gagal','Diubah','danger');
        header('Location:' . BASEURL . '/mahasiswa');
        exit;
    }
}

public function cari()
{
    $data['judul'] = 'daftar mahasiswa';
    $data['mhs'] = $this->model('mahasiswa_model')->cariDataMahasiswa();
    $this->view('templates/header' ,$data);
    $this->view('mahasiswa/index',$data);
    $this->view('templates/footer');

}

}

