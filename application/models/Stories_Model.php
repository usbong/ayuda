<?php 
class Stories_Model extends CI_Model
{
	public function getStories()
	{
		$this->db->join('account', 'stories.userid = account.id');
		$this->db->where('typeOfStoryId','0'); //1 is for type: stories		
		$query = $this->db->get('stories');
		return $query->row_array();
	}
}
?>