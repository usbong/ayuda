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

	public function getProjectEvents($categoryId) {
		  $this->db->select('category.*, events.*, account.*');
		  $this->db->from('events');
		  $this->db->join('category', 'events.categoryId = category.id', 'inner');
		  $this->db->join('account', 'events.userId = account.id', 'inner');

		  if($categoryId != null)
		  {			
			$this->db->where('events.categoryId',$categoryId);
		  }

		  if($this->input->post('location') != null)
			{
				if($this->input->post('location') != 'All')
				{
					$this->db->where('events.location',$this->input->post('location'));
				}
			}
			if($this->input->post('typeOfWork') != null)
			{
				if($this->input->post('typeOfWork') != 'All')
				{
					$this->db->where('events.typeOfWork',$this->input->post('typeOfWork'));
				}
			}
			if($this->input->post('keywords') != null)
			{
					$this->db->like('events.eventName',$this->input->post('keywords'));
					$this->db->or_like('events.otherComments',$this->input->post('keywords'));
			}		  
		  
		  $this->db->order_by('events.dateStart', 'desc'); //descending
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
	
	public function getProjectEventsCount($categoryId) {
		  $this->db->select('category.*, events.*, account.*');
		  $this->db->from('events');
		  $this->db->join('category', 'events.categoryId = category.id', 'inner');
		  $this->db->join('account', 'events.userId = account.id', 'inner');
/*
		  if($this->input->post('categoryId') != null)
		  {			
		  	$selected_categoryIds = array_keys($this->input->post('categoryId'));
			foreach($selected_categoryIds as $one_categoryId) {
				$this->db->where('events.categoryId',$one_categoryId);
			}
		  }
*/
		  if($categoryId != null)
		  {			
			$this->db->where('events.categoryId',$categoryId);
		  }
		  
		 if($this->input->post('location') != null)
		  {
		  if($this->input->post('location') != 'All')
				{
					$this->db->where('events.location',$this->input->post('location'));
				}
		  }
		  if($this->input->post('typeOfWork') != null)
			{
				if($this->input->post('typeOfWork') != 'All')
				{
					$this->db->where('events.typeOfWork',$this->input->post('typeOfWork'));
				}
			}
			if($this->input->post('keywords') != null)
			{
					$this->db->like('events.eventName',$this->input->post('keywords'));
					$this->db->or_like('events.otherComments',$this->input->post('keywords'));
			}
		  $this->db->order_by('events.dateStart', 'desc'); //descending
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

	public function getProjectEventsRcount($categoryId) {
		  $this->db->select('category.*, events.*, account.*');
		  $this->db->from('events');
		  $this->db->join('category', 'events.categoryId = category.id', 'inner');
		  $this->db->join('account', 'events.userId = account.id', 'inner');
/*		  
		  if($this->input->post('categoryId') != null)
		  {			
		  	$selected_categoryIds = array_keys($this->input->post('categoryId'));
			foreach($selected_categoryIds as $one_categoryId) {
				$this->db->where('events.categoryId',$one_categoryId);
			}
		  }
*/
		  if($categoryId != null)
		  {			
			$this->db->where('events.categoryId',$categoryId);
		  }

		  if($this->input->post('location') != null)
			{
			if($this->input->post('location') != 'All')
				{
					$this->db->where('events.location',$this->input->post('location'));
				}
			}
			if($this->input->post('typeOfWork') != null)
			{
				if($this->input->post('typeOfWork') != 'All')
				{
					$this->db->where('events.typeOfWork',$this->input->post('typeOfWork'));
				}
			}
			if($this->input->post('keywords') != null)
			{
					$this->db->like('events.eventName',$this->input->post('keywords'));
					$this->db->or_like('events.otherComments',$this->input->post('keywords'));
			}
		  $this->db->order_by('events.dateStart', 'desc'); //descending
		  $query = $this->db->get();
		  return $query->num_rows();
	}	
	
	public function getRecommendedProjectEvents(){
		  $this->db->select('category.*, events.*, account.*');
		  $this->db->from('events');
		  $this->db->join('category', 'events.categoryId = category.id', 'inner');
		  $this->db->join('account', 'events.userId = account.id', 'inner');
		  
		  $this->db->order_by('events.dateStart', 'desc'); //descending
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
	
	public function getRecommendedProjectEventsCount(){
		  $this->db->select('category.*, events.*, account.*');
		  $this->db->from('events');
		  $this->db->join('category', 'events.categoryId = category.id', 'inner');
		  $this->db->join('account', 'events.userId = account.id', 'inner');

		  $this->db->order_by('events.dateStart', 'desc'); //descending
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
	
	public function getRecommendedProjectEventsRcount(){
		  $this->db->select('category.*, events.*, account.*');
		  $this->db->from('events');
		  $this->db->join('category', 'events.categoryId = category.id', 'inner');
		  $this->db->join('account', 'events.userId = account.id', 'inner');

		  $this->db->order_by('events.dateStart', 'desc'); //descending
		  $query = $this->db->get();
		  return $query->num_rows();
	}	
}
?>