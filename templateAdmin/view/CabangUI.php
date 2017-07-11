<?php 

require_once 'View.php';
/**
* 
*/
class CabangUI extends View
{
	public function tampilDetail()
	{
		$nama="Febri";
		include_once 'pages/detail.php';
		$this->end();
	}
	public function formTambah()
	{
		$nama="Febri";
		include_once 'pages/tambah.php';
		$this->end();
	}
	public function tampilCabang()
	{
		$nama="Febri";
		include_once 'pages/cabang.php';
		$this->end();
	}
		public function hapusDataCabang()
	{
		$nama="Febri";
		include_once 'pages/cabang.php';
		$this->end();
	}
		
	public function editDataCabang()
	{
		$nama="Febri";
		include_once 'pages/edit.php';
		$this->end();
	}



	

}


?>