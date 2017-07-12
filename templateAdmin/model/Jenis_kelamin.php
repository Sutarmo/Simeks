<?php 
/**
* 
*/
include_once 'Model.php';
class Jenis_Kelamin extends Model
{
	public $id_jeniskelamin;
	public $jenis_kelamin;
	
	public function getDataJenisKelamin()
	{
		$query = $this->db->prepare("SELECT * FROM jenis_kelamin");
    		$query->execute();
    		$data = $query->fetchAll();
    		return $data;
	}
}
?>