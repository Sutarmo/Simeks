<?php 

require_once 'View.php';
/**
* 
*/
class AdminUI extends View
{
	
	public function tampilLengkap()
	{
		$nama="Febri";
		include_once 'pages/profil.php';
		$this->end();
	}
	

}



 ?>