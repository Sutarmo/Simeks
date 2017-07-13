<?php 
/**
* 
*/
include_once 'Model.php';
class Cabang extends Model
{
	
	public function getDataCabang()
	{
		$query = $this->db->prepare("SELECT * FROM cabang");
    		$query->execute();
    		$data = $query->fetchAll();
    		return $data;
	}
}
?>