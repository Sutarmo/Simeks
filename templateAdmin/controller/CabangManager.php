<?php 
/**
* 
*/
include_once 'Controller.php';
class CabangManager extends Controller
{
	public function inputDataCabang()
	{
		include_once 'model/Cabang.php';
		$mcabang = new Cabang();
		//$id_cabang = $_POST['id_cabang'];
		$nama = $_POST['nama'];
		$alamat = $_POST['alamat'];
		$telepon = $_POST['telepon'];
		$pesan = $mcabang->tambahCabang($nama,$alamat,$telepon);
		return $pesan;
	}
	public function getDataUntukDetail()
	{
		$id_cabang= $_GET['id_cabang'];
		include_once 'model/Cabang.php';
		
		$cb= new Cabang();
		
		$data['cabang']=$cb->getDataCabangSpesifik($id_cabang);
		

		return $data;
	}
}
?>