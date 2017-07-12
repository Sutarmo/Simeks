<?php 
/**
* 
*/
include_once 'Controller.php';
class TransaksiControl extends Controller
{
	public function input_transaksi()
	{
		include_once 'model/Transaski.php';
		$nt = new Transaksi();
		$id_transaksi = $_POST['_id_transaksi'];
		$tanggal_transaksi = date('Y-m-d');
		$nama_pengirim = $_POST['nama_pengirim'];
		$alamat_pengirim = $_POST['alamat_pengirim'];
		$telepon_pengirim = $_POST['telepon_pengirim'];
		$nama_penerima = $_POST['nama_penerima'];
		$alamat_penerima = $_POST['alamat_penerima'];
		$telepon_penerima = $_POST['telepon_penerima'];
		$nama_barang = $_POST['nama_barang'];
		$berat_barang = $_POST['berat_barang'];
		$total_biaya= $_POST['total_biaya'];
		$id_cabangpenerima= $_POST['id_cabangpenerima'];
		$id_operator=$_POST['id_operator'];

		$pesan = $nt->Save_Data($id_transaksi,$tanggal_transaksi,$nama_pengirim,$alamat_pengirim,$telepon_pengirim,$nama_penerima,$alamat_penerima,$telepon_penerima,$nama_barang,$berat_barang,$total_biaya,$id_cabangpenerima,$id_operator);
		return $pesan;
	}

}
 ?>