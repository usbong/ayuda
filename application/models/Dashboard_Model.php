<?php 
class Dashboard_Model extends CI_Model
{
	public function getAccount($username)
	{
		$this->db->where('username',$username);
		$query = $this->db->get('account');
		return $query->row_array();
	}	
}
?>