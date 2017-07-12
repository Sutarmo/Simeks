<?php 
/**
* lokasi ada di web2/administrator/model/Berita.php
*/
include_once 'Model.php';
class laporanpendapatan extends Model
{
		public function getLaporanPendapatan()
	{
		$query = $this->db->prepare("SELECT * FROM transaksi");
    		$query->execute();
    		$data = $query->fetchAll();
    		return $data;
	}
	}
 ?>