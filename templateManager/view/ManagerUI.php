<?php 

require_once 'View.php';
/**
* 
*/
class ManagerUI extends View
{
	public function tampilLengkap()
	{
		$nama="Febri";
		include_once 'pages/profil.php';
		$this->end();
	}
}
?>