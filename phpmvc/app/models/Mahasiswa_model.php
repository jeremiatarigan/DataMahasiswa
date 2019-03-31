<?php

class Mahasiswa_model{
    
    private $table ='mahasiswa';
    private $db ;

    public function __construct()
    {
        $this->db = new database;
    }

    

    public function getAllMahasiswa()
    {
        $this->db->query('select * From ' .$this->table);
        return $this->db->resultSet();
        
    }

     public function getMahasiswaById($id)
    {
        $this->db->query('select * From ' .$this->table .' Where id=:id');
        $this->db->bind('id',$id);
        return $this->db->single();
        
    }

    public function tambahDataMahasiswa($data)
    {
        $query = "INSERT INTO mahasiswa 
                    Values
                ('', :nama, :npm, :email, :jurusan)";

                $this->db->query($query);    
                $this->db->bind('nama',$data['nama']);
                $this->db->bind('npm',$data['npm']);
                $this->db->bind('email',$data['email']);
                $this->db->bind('jurusan',$data['jurusan']);

                $this->db->execute();

                return $this->db->rowCount();
    }

    public function hapusDataMahasiswa($id)
    {
        $query = "DELETE FROM mahasiswa  where id= :id";
        $this->db->query($query);
        $this->db->bind('id',$id);

        $this->db->execute();

        return $this->db->rowCount();
      
    
    }

     public function ubahDataMahasiswa($data)
    {
        $query = "UPDATE  mahasiswa 
                    set
                nama = :nama, 
                npm = :npm, 
                email = :email, 
                jurusan = :jurusan
                where id = :id";

                $this->db->query($query);    
                $this->db->bind('nama',$data['nama']);
                $this->db->bind('npm',$data['npm']);
                $this->db->bind('email',$data['email']);
                $this->db->bind('jurusan',$data['jurusan']);
                $this->db->bind('id',$data['id']);

                $this->db->execute();

                return $this->db->rowCount();
    }

    public function cariDataMahasiswa()
    {
        $keyword = $_POST['keyword'];
        $query = "SELECT * FROM mahasiswa WHERE nama LIKE :keyword";
        $this->db->query($query);
        $this->db->bind('keyword',"%$keyword%");

        return $this->db->resultSet();
    }
}