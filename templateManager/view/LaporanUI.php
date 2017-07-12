<?php 

require_once 'View.php';
/**
* 
*/
class LaporanUI extends View
{
	public function tampilLaporanPendapatan()
	{

		include_once 'model/laporanpendapatan.php';
		$lp = new laporanpendapatan();
		$isi_laporan = $lp->getLaporanPendapatan();
		include_once 'pages/laporanpendapatan.php';
		$this->end();
	}
}
?>