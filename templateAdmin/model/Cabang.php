<?php 

include_once 'Model.php';
class Cabang extends Model
{	

	public $id_cabang;
	public $nama;
	public $alamat;
	public $telepon;
	public $id_admin=1;

	

	public function getDataCabang()
	{
		$query = $this->db->prepare("SELECT * FROM cabang");
    		$query->execute();
    		$data = $query->fetchAll();
    		return $data;
	}
	public function getDataCabangSpesifik($id_cabang)
	{
		try {
			$stmt = $this->db->prepare("SELECT * FROM cabang WHERE id_cabang=:id_cabang");
			$stmt->bindparam(":id_cabang",$id_cabang);
			$stmt->execute();
			$data = $stmt->fetch();

			return $data;
			}
			catch(PDOException $e) {
				echo $e->getMessage(); 
				return false;
			}
	}
		public function tambahCabang($id_cabang,$nama,$alamat,$telepon,$id_admin=1)
	{
		try
		  {
		   $stmt = $this->db->prepare("INSERT INTO cabang(id_cabang,nama,alamat,telepon,id_admin) VALUES(:id_cabang, :nama, :alamat, :telepon, :id_admin)");
		   $stmt->bindparam(":id_cabang",$id_cabang);
		   $stmt->bindparam(":nama",$nama);
		   $stmt->bindparam(":alamat",$alamat);
		   $stmt->bindparam(":telepon",$telepon);
		   $stmt->bindparam(":id_admin",$id_admin);

		   $stmt->execute();
		   return true;
		  }
		  catch(PDOException $e)
		  {
		   echo $e->getMessage(); 
		   return false;
		  }
	}
}
?>