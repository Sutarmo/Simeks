<?php 
/**
* 
*/
include_once 'Controller.php';
class TransaksiControl extends Controller
{
	public function getKota()
	{
		include_once 'model/Cabang.php';
		$cb  = new Cabang();
		$daftar_kota = $cb->getDataCabang();
		return $daftar_kota;
	}
	public function Calculate()
	{
		include_once 'model/Transaksi.php';
		$trans = new Transaksi();
		//$id_transaksi = $_POST['id_transaksi'];
		$tgl_transaksi = $_POST['tgl_transaksi'];
		$nama_pengirim = $_POST['nama_pengirim'];
		$alamat_pengirim = $_POST['alamat_pengirim'];
		$telepon_pengirim = $_POST['telepon_pengirim'];
		$nama_penerima = $_POST['nama_penerima'];
		$alamat_penerima = $_POST['alamat_penerima'];
		$telepon_penerima = $_POST['telepon_penerima'];
		$nama_barang = $_POST['nama_barang'];
		$berat_barang = $_POST['berat_barang'];
		$total_biaya= $_POST['total_biaya'];
			
		
		$pesan = $trans->Save_Data($tgl_transaksi,$nama_pengirim,$alamat_pengirim,$telepon_pengirim,$nama_penerima,$alamat_penerima,$telepon_penerima,$nama_barang,$berat_barang,$total_biaya);
		
		return $pesan;
	}



}
 ?>