<?php 

require_once 'View.php';
/**
* 
*/
class LaporanUI extends View
{
	public function tampilLaporanPendapatan()
	{
		$nama="Febri";
		include_once 'pages/laporanpendapatan.php';
		$this->end();
	}
}
?>