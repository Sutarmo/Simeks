<?php 
/**
* lokasi ada di web2/administrator/model/Berita.php
*/
include_once 'Model.php';
class Kurir extends Model
{
	public $id_kurir;
	public $nama;
	public $id_jeniskelamin;
	//public $nik;
	public $alamat_kurir;
	public $telepon;
	//public $username;
	//public $password;
	public $id_cabang;
	


	
	public function getDataKurir()
	{
		$query = $this->db->prepare("SELECT * FROM kurir2");
    		$query->execute();
    		$data = $query->fetchAll();
    		return $data;
	}
	public function tambahKurir($id_kurir,$id_jeniskelamin,$nama,$alamat_kurir,$telepon,$id_cabang)
	{
		try
		  {
		   $stmt = $this->db->prepare("INSERT INTO kurir2(id_kurir,nama,id_jeniskelamin,alamat_kurir,telepon,id_cabang) VALUES(:id_kurir, :nama,:id_jeniskelamin,:alamat_kurir, :telepon,:id_cabang)");
		   $stmt->bindparam(":id_kurir",$id_kurir);
		   $stmt->bindparam(":nama",$nama);
		   $stmt->bindparam(":id_jeniskelamin",$id_jeniskelamin);
		   //$stmt->bindparam(":nik",$nik);
		   $stmt->bindparam(":alamat_kurir",$alamat_kurir);
		   $stmt->bindparam(":telepon",$telepon);
		   //$stmt->bindparam(":username",$username);
		   //$stmt->bindparam(":password",$password);
		   $stmt->bindparam(":id_cabang",$id_cabang);
		   $stmt->execute();
		   return true;
		  }
		  catch(PDOException $e)
		  {
		   echo $e->getMessage(); 
		   return false;
		  }
	}
	public function editDataKurir($id)
	{
		try {
			$stmt = $this->db->prepare("SELECT * FROM kurir2 WHERE id_kurir=:id");
			$stmt->bindparam(":id",$id);
			$stmt->execute();
			$data = $stmt->fetch();

			return $data;
			}
			catch(PDOException $e) {
				echo $e->getMessage(); 
				return false;
			}
	}

	public function ubahBerita($id_berita,$tanggal,$judul,$isi,$id_kategori)
	{
		
		
		try {
			$stmt = $this->db->prepare("UPDATE berita SET judul=:judul, isi=:isi, id_kategori=:kategori WHERE id_berita=:id_berita");
			$stmt->bindparam(":id_berita",$id_berita);
			$stmt->bindparam(":judul",$judul);
			$stmt->bindparam(":isi",$isi);
			$stmt->bindparam(":kategori",$kategori);
			$stmt->execute();
			echo "Berita berhasil di update!";

			
		}
		catch(PDOException $e) {
			echo $e->getMessage(); 

		}

	}
}
 ?>