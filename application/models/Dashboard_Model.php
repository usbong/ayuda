<?php 
class Dashboard_Model extends CI_Model
{
	public function getAccount($username)
	{
		$this->db->where('username',$username);
		$query = $this->db->get('account');
		return $query->row_array();
	}	
/*
	public function getVolunteeringHistory($username)
	{
		$this->db->where('username',$username);
		$query = $this->db->get('volunteeringhistory');
		return $query->row_array();
	}		
*/
	public function getCategoryName($username)
	{
		$this->db->select('categoryName');
		$this->db->from('category');
		$this->db->join('events', 'events.categoryId = category.id', 'inner');
		$this->db->join('volunteeringhistory', 'events.eventid = volunteeringhistory.eventid', 'left');
		$this->db->join('account', 'volunteeringhistory.userid = account.id', 'right');
		$this->db->where('account.username',$username);
		$this->db->limit(2);		
		$query = $this->db->get();
//		return $query->row_array();
		return $query->result_array();
	}	

	public function getEvents($username)
	{
		$this->db->select('events.*, account.*, volunteeringhistory.*');
		$this->db->from('events');
		$this->db->join('volunteeringhistory', 'events.eventid = volunteeringhistory.eventid', 'inner');
		$this->db->join('account', 'volunteeringhistory.userid = account.id', 'left');
		$this->db->where('account.username',$username);
		$this->db->limit(2);		
		$query = $this->db->get();
//		return $query->row_array();
		return $query->result_array();
	}		
}
?>