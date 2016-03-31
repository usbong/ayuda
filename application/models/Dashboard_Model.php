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
	public function getLocationList()
	{
		$query = $this->db->get('location');
		return $query->result();
	}

	public function getTypeOfWorkList()
	{
		$query = $this->db->get('typeOfWork');
		return $query->result();
	}

	public function getCategoryArray()
	{
		$query = $this->db->get('category');
		return $query->result_array();
	}

	public function getCategoryName($username)
	{
		$this->db->select('categoryName');
		$this->db->from('category');
		$this->db->join('events', 'events.categoryId = category.id', 'inner');
		$this->db->join('volunteeringhistory', 'events.eventId = volunteeringhistory.eventId', 'left');
		$this->db->join('account', 'volunteeringhistory.userId = account.id', 'right');
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
		$this->db->join('volunteeringhistory', 'events.eventId = volunteeringhistory.eventId', 'inner');
		$this->db->join('account', 'volunteeringhistory.userId = account.id', 'left');
		$this->db->where('account.username',$username);
		$this->db->limit(2);		
		$query = $this->db->get();
//		return $query->row_array();
		return $query->result_array();
	}		
	
	public function getEventsOrganizerUsername($username)
	{
		$this->db->select('events.*');
		$this->db->from('events');
		$this->db->join('volunteeringhistory', 'events.eventId = volunteeringhistory.eventId', 'inner');
		$this->db->join('account', 'volunteeringhistory.userId = account.id', 'left');
		$this->db->where('account.username',$username);
		$this->db->limit(2);		
		$query = $this->db->get();	
		$result = $query->result_array();

		$myArray = array();
		foreach ($result as $row) {
			$this->db->where('id',$row['userId']);
			$query2 = $this->db->get('account');			
			array_push($myArray,''.$query2->row_array()['fullname']);
		}
		return $myArray;
//		return $query->result_array();
	}		
	
	public function insertEvent($data) {
//		array_splice($data, 0, 1); //remove account
		$this->db->insert('events',$data);
	}
}
?>