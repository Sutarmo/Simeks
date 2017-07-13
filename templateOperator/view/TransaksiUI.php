	<?php 

require_once 'View.php';
/**
* 
*/
class TransaksiUI extends View
{
		public function tampilTransaksi()
	{
		include_once 'controller/TransaksiControl.php';
		$tc = new TransaksiControl();
		$daftar_kota = $tc->getKota();
		include_once 'pages/transaksi.php';
		$this->end();
	}

	public function inputTransaksi()
	 {
	 	include_once 'controller/TransaksiControl.php';
		$tc = new TransaksiControl();
		$pesan = $tc->Calculate();
		include_once 'index.php';
		$this->end();
	 }
}
?>