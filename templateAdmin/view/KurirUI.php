<?php 

require_once 'View.php';
/**
* 
*/
class KurirUI extends View
{
		public function lihatKurir()
	{
		include_once 'model/Kurir.php';
		$kr = new Kurir();
		$isi_kurir = $kr->getDataKurir();
		include_once 'pages/kurir.php';
		$this->end();
		
	}
		public function tampilFormKurir()
	{
		include_once 'controller/KurirManager.php';
		$km = new KurirManager();
		$daftar_jeniskelamin = $km->getDaftarJenisKelamin();
		include_once 'pages/tambah_kurir.php';
		$this->end();
	}
		public function inputData()
	 {
	 	include_once 'controller/KurirManager.php';
		$km = new KurirManager();
		$pesan = $km->inputKurir();
		include_once 'melihat_kurir.php';
		$this->end();
	 }
		public function formTambah()
	{
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