<?php 
class Volunteers_Model extends CI_Model
{
	//---------------------------------------------------------
	// Volunteers Page
	//---------------------------------------------------------
	public function getVolunteerStories()
	{
		$this->db->join('account', 'account.id = stories.userid');
		$this->db->where('typeOfStoryId','2'); //2 is for type: volunteer stories		
		$query = $this->db->get('stories');
		return $query->row_array();
	}
}
?>