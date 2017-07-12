<?php 

/**
* 
*/

include_once 'Model.php';
class Transaksi extends Model
{
	
	public function ambilTransaksi()
	{
		$query = $this->db->prepare("SELECT * FROM transaksi");
    	$query->execute();
    	$data = $query->fetchAll();

    	return $data;
	}
		public function Save_Data($id_transaksi,$tanggal_transaksi,$nama_pengirim,$alamat_pengirim,$telepon_pengirim,$nama_penerima,$alamat_penerima,$telepon_penerima,$nama_barang,$berat_barang,$total_biaya,$id_cabangpenerima,$id_operator)
	{
		try
		  {
		   $stmt = $this->db->prepare("INSERT INTO transaksi(id_transaksi,tanggal_transaksi,nama_pengirim,alamat_pengirim,telepon_pengirim,nama_penerima,alamat_penerima,telepon_penerima,nama_barang,berat_barang,total_biaya,id_cabangpenerima,id_operator) VALUES(:id_transaksi,:tanggal_transaksi,:nama_pengirim,:alamat_pengirim,:telepon_pengirim,:nama_penerima,:alamat_penerima,:telepon_penerima,:nama_barang,:berat_barang,:total_biaya,:id_cabangpenerima,:id_operator)");
		   $stmt->bindparam(":id_transaksi",$id_transaksi);
		   $stmt->bindparam(":tanggal_transaksi",$tanggal_transaksi);
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