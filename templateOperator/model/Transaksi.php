<?php 

/**
* 
*/

include_once 'Model.php';
class Transaksi extends Model
{
	
	public $id_transaksi;
	public $tgl_transaksi;
	public $nama_pengirim;
	public $alamat_pengirim;
	public $telepon_pengirim;
	public $nama_barang;
	public $total_biaya;
	public $id_cabangpenerima=1;
	public $id_operator=1;




	public function ambilTransaksi()
	{
		$query = $this->db->prepare("SELECT * FROM transaksi");
    	$query->execute();
    	$data = $query->fetchAll();

    	return $data;
	}
		public function Save_Data($tgl_transaksi,$nama_pengirim,$alamat_pengirim,$telepon_pengirim,$nama_penerima,$alamat_penerima,$telepon_penerima,$nama_barang,$berat_barang,$total_biaya,$id_cabangpenerima=1,$id_operator=1)
	{
		try
		  {
		   $stmt = $this->db->prepare("INSERT INTO transaksi(id_transaksi,tgl_transaksi,nama_pengirim,alamat_pengirim,telepon_pengirim,nama_penerima,alamat_penerima,telepon_penerima,nama_barang,berat_barang,total_biaya,id_cabangpenerima,id_operator) VALUES(:id_transaksi,:tgl_transaksi,:nama_pengirim,:alamat_pengirim,:telepon_pengirim,:nama_penerima,:alamat_penerima,:telepon_penerima,:nama_barang,:berat_barang,:total_biaya,:id_cabangpenerima,:id_operator)");
		   $stmt->bindparam(":id_transaksi",$id_transaksi);
		   $stmt->bindparam(":tgl_transaksi",$tgl_transaksi);
		   $stmt->bindparam(":nama_pengirim",$nama_pengirim);
		   $stmt->bindparam(":alamat_pengirim",$alamat_pengirim);
		   $stmt->bindparam(":telepon_pengirim",$telepon_pengirim);
		   $stmt->bindparam(":nama_penerima",$nama_penerima);
		   $stmt->bindparam(":alamat_penerima",$alamat_penerima);
		   $stmt->bindparam(":telepon_penerima",$telepon_penerima);
		   $stmt->bindparam(":nama_barang",$nama_barang);
		   $stmt->bindparam(":berat_barang",$berat_barang);
		   $stmt->bindparam(":total_biaya",$total_biaya);
		   $stmt->bindparam(":id_cabangpenerima",$id_cabangpenerima);
		   $stmt->bindparam(":id_operator",$id_operator);
		   
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