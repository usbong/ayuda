<?php 
class Nonprofits_Model extends CI_Model
{
	public function getNonprofitsStories()
	{
		$this->db->join('account', 'stories.userid = account.id');
		$this->db->where('typeOfStoryId','1'); //1 is for type: nonprofits		
		$query = $this->db->get('stories');
		return $query->row_array();
	}
}
?>