<?php 
/**
* 
*/
include_once 'Controller.php';
class KurirManager extends Controller
{
	
	public function getDaftarjenisKelamin()
	{
		include_once 'model/Jenis_Kelamin.php';
		$jk  = new Jenis_Kelamin();
		$daftar_jeniskelamin = $jk->getDataJenisKelamin();
		return $daftar_jeniskelamin;
	}
	public function inputKurir()
	{
		include_once 'model/Kurir.php';
		$kur = new Kurir();
		$id_kurir = $_POST['id_kurir'];
		$nama = $_POST['nama'];
		$id_jeniskelamin = $_POST['id_jeniskelamin'];
		//$nik = $_POST['nik'];
		$alamat_kurir = $_POST['alamat_kurir'];
		$telepon = $_POST['telepon'];
		//$username = $_POST['username'];
		//$password = $_POST['password'];
		$id_cabang = $_POST['id_cabang'];

		$pesan = $kur->tambahKurir($id_kurir,$nama,$alamat_kurir,$telepon,$id_jeniskelamin,$id_cabang);
		return $pesan;
	}
	public function getDataUntukPerubahan()
	{
		$id= $_GET['id'];
		include_once 'model/Berita.php';
		include_once'model/Kategori.php';
		$mb= new Berita();
		$kat= new Kategori();
		$data['berita']=$mb->ambilBeritaSpesifik($id);
		$data['kategori']= $kat->getDaftarKategori();

		return $data;
	}
	public function ubahBerita()
	{

		include_once 'model/Berita.php';
		$mb= new Berita();
		$id_berita = $_GET['id'];
		$judul = $_POST['judul'];
		$isi = $_POST['isi'];
		$kategori= $_POST['kategori'];
		$mb->ubahBerita($id_berita,$judul,$isi,$kategori);
		
		return true;
	}
}
 ?>