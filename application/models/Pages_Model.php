<?php 
class Pages_Model extends CI_Model
{
	//---------------------------------------------------------
	// Volunteers Page
	//---------------------------------------------------------
	public function getStory()
	{
		$this->db->join('account', 'stories.userid = account.id');
		$this->db->where('storyid','1');
		$query = $this->db->get('stories');
		return $query->row_array();
	}
}
?>