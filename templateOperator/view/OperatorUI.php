<?php 

require_once 'View.php';
/**
* 
*/
class OperatorUI extends View
{
	
	public function tampilLengkap()
	{
		$nama="Febri";
		include_once 'pages/profil.php';
		$this->end();
	}

	public function tampilDetail()
	{
		$nama="Febri";
		include_once 'pages/detail.php';
		$this->end();
	}
}



 ?>