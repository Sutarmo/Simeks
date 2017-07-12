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
		$tm = new TransaksiControl();
		$pesan = $tm->input_transaksi();
		include_once 'pages/transaksi.php';
		$this->end();
	}

}
?>