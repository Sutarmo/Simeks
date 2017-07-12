<?php 

require_once 'View.php';
/**
* 
*/
class KurirUI extends View
{
	



		public function lihatKurir()
	{
		 include_once 'model/kurir.php';
		 $kr = new kurir();
		 $isi_kurir = $kr->ambilkurir();
		 include_once 'pages/kurir.php';
		 $this->end();
	}
		public function formTambah()
	{
		$nama="Febri";
		include_once 'pages/tambah_kurir.php';
		$this->end();
	}
		public function editDataKurir()
	{
		$nama="Febri";
		include_once 'pages/edit_kurir.php';
		$this->end();
	}
		public function hapusDataKurir()
	{
		$nama="Febri";
		include_once 'pages/kurir.php';
		$this->end();
	}
	}



 ?>