<?php 

require_once 'View.php';
/**
* 
*/
class CabangUI extends View
{
	public function lihatCabang()
	{
		include_once 'model/Cabang.php';
		$cb = new Cabang();
		$isi_cabang = $cb->getDataCabang();
		include_once 'pages/cabang.php';
		$this->end();
	}
	public function tampilDetail()
	{
		include_once 'controller/CabangManager.php';
		$cb = new CabangManager();
		$data = $cb->getDataUntukDetail();
		$data_cabang= $data['cabang'];
		include_once 'pages/detail.php';
		$this->end();
	}
	public function formTambah()
	{
		$nama="Febri";
		include_once 'pages/tambah.php';
		$this->end();
	}
	public function inputCabang()
	{
		include_once 'controller/CabangManager.php';
		$cm = new CabangManager();
		$pesan = $cm->inputDataCabang();
		include_once 'index.php';
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