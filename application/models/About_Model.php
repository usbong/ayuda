<?php 
class About_Model extends CI_Model
{
	public function getLocationList()
	{
		$query = $this->db->get('location');
		return $query->result_array();
	}
	
	public function getEvents()
	{
		if($this->input->post('loc')!=null)
		{
			$this->db->select('category.*, events.*');
            $this->db->from('category');
            $this->db->join('events', 'events.eventCategory = category.categoryName', 'inner');
             if($this->input->post('loc') != 'All')
				{
				$this->db->where('events.location',$this->input->post('loc'));
				}
             if($this->input->post('cat') != 'All')
                {
              	$this->db->where('events.eventCategory',$this->input->post('cat'));
                }
             if($this->input->post('work') != 'All')
                {
              	$this->db->where('events.typeofwork',$this->input->post('work'));
                }
            $query = $this->db->get();
		}
		else
		{
			$query = $this->db->select('category.*, events.*')
              ->from('category')
              ->join('events', 'events.eventCategory = category.categoryName', 'inner')
              ->get();
		}
		return $query->result_array();
	}
	
	public function getCategoryType()
	{
		$query = $this->db->get('category');
		return $query->result_array();
	}
	
	public function getTypeOfWork()
	{
		$query = $this->db->get('typeofwork');
		return $query->result_array();
	}
}
?>