<?php 
class Projects_Model extends CI_Model
{
	public function getCategoryArray()
	{
		$query = $this->db->get('category');
		return $query->result_array();
	}
	
	public function getCategory()
	{
		$query = $this->db->get('category');
		return $query->result();
	}	

	public function getListLocation()
	{
		$query = $this->db->get('location');
		return $query->result_array();
	}

	public function getListType()
	{
		$query = $this->db->get('typeofwork');
		return $query->result();
	}
	
	public function getProjectEvents(){
		  $this->db->select('category.*, events.*, account.*');
		  $this->db->from('events');
		  $this->db->join('category', 'events.eventCategory = category.categoryName', 'inner');
		  $this->db->join('account', 'events.userid = account.id', 'inner');
		  if($this->input->post('id') != null)
			{
			$this->db->where('events.eventCategory',$this->input->post('id'));
			}
		  if($this->input->post('loc') != null)
			{
				if($this->input->post('loc') != 'All')
				{
					$this->db->where('events.location',$this->input->post('loc'));
				}
			}
			if($this->input->post('work') != null)
			{
				if($this->input->post('work') != 'All')
				{
					$this->db->where('events.typeofwork',$this->input->post('work'));
				}
			}
			if($this->input->post('words') != null)
			{
					$this->db->like('events.eventname',$this->input->post('words'));
					$this->db->or_like('events.fullname',$this->input->post('words'));
			}
		  $this->db->order_by('events.datestart', 'asc');
		  if($this->input->post('count') != null)
		  {	
		  $this->db->limit($this->input->post('count')+2);
		  }
		  else
		  {
		  $this->db->limit(2);
		  }
		  $query = $this->db->get();
		  return $query->result_array();
	}

	public function getProjectEventsCount(){
		  $this->db->select('category.*, events.*, account.*');
		  $this->db->from('events');
		  $this->db->join('category', 'events.eventCategory = category.categoryName', 'inner');
		  $this->db->join('account', 'events.userid = account.id', 'inner');
		  if($this->input->post('id') != null)
		  {
		  $this->db->where('events.eventCategory',$this->input->post('id'));
		  }
		 if($this->input->post('loc') != null)
		  {
		  if($this->input->post('loc') != 'All')
				{
					$this->db->where('events.location',$this->input->post('loc'));
				}
		  }
		  if($this->input->post('work') != null)
			{
				if($this->input->post('work') != 'All')
				{
					$this->db->where('events.typeofwork',$this->input->post('work'));
				}
			}
			if($this->input->post('words') != null)
			{
					$this->db->like('events.eventname',$this->input->post('words'));
					$this->db->or_like('events.fullname',$this->input->post('words'));
			}
		  $this->db->order_by('events.datestart', 'asc');
		  if($this->input->post('count') != null)
		  {	
		  $this->db->limit($this->input->post('count')+2);
		  }
		  else
		  {
		  $this->db->limit(2);
		  }
		  $query = $this->db->get();
		  return $query->num_rows();
	}

	public function getProjectEventsRcount(){
		  $this->db->select('category.*, events.*, account.*');
		  $this->db->from('events');
		  $this->db->join('category', 'events.eventCategory = category.categoryName', 'inner');
		  $this->db->join('account', 'events.userid = account.id', 'inner');
		  if($this->input->post('id') != null)
			{
			$this->db->where('events.eventCategory',$this->input->post('id'));
			}
		  if($this->input->post('loc') != null)
			{
			if($this->input->post('loc') != 'All')
				{
					$this->db->where('events.location',$this->input->post('loc'));
				}
			}
			if($this->input->post('work') != null)
			{
				if($this->input->post('work') != 'All')
				{
					$this->db->where('events.typeofwork',$this->input->post('work'));
				}
			}
			if($this->input->post('words') != null)
			{
					$this->db->like('events.eventname',$this->input->post('words'));
					$this->db->or_like('events.fullname',$this->input->post('words'));
			}
		  $this->db->order_by('events.datestart', 'asc');
		  $query = $this->db->get();
		  return $query->num_rows();
	}
	
}
?>