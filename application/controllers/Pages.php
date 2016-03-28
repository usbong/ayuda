<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

	public function view($page)
	{
		if ( ! file_exists(APPPATH.'/views/pages/'.$page.'.php'))
		{
			// Whoops, we don't have a page for that!
			show_404();
		}
		
		$data['title'] = ucfirst($page); // Capitalize the first letter

		if ($data['title'] == 'Volunteers') {
			$this->viewVolunteerFeaturedStories();
		}
		else if ($data['title'] == 'Projects') {
			$this->viewProjects();
		}
		else if ($data['title'] == 'Nonprofits') {
			$this->viewNonprofitsStories();
		}
		else if ($data['title'] == 'Stories') {
			$this->viewStories();
		}
		else if ($data['title'] == 'About') {
			$this->viewAbout();
		}
		else if ($data['title'] == 'Dashboard') {
			$this->viewDashboard();
		}
		else {
			$this->load->view('templates/header', $data);
			$this->load->view('pages/'.$page, $data);
			$this->load->view('templates/footer', $data);
		}
	}
	
	//---------------------------------------------------------
	// Volunteers Page
	//---------------------------------------------------------
	public function viewVolunteerFeaturedStories()
	{
		$data['content'] = 'pages/Volunteers';
		$this->load->model('Volunteers_Model');
		$data['story'] = $this->Volunteers_Model->getVolunteerStories();
		$this->load->view('templates/general_template',$data);
	}	

	//---------------------------------------------------------
	// Nonprofits Page
	//---------------------------------------------------------
	public function viewNonprofitsStories()
	{
		$data['content'] = 'pages/Nonprofits';
		$this->load->model('Nonprofits_Model');
		$data['story'] = $this->Nonprofits_Model->getNonprofitsStories();
		$this->load->view('templates/general_template',$data);
	}	

	//---------------------------------------------------------
	// Stories Page
	//---------------------------------------------------------
	public function viewStories()
	{
		$data['content'] = 'pages/Stories';
		$this->load->model('Stories_Model');
		$data['story'] = $this->Stories_Model->getStories();
		$this->load->view('templates/general_template',$data);
	}	
	
	//---------------------------------------------------------
	// Projects Page
	//---------------------------------------------------------
/*	
	public function viewCategories()
	{
		$data['content'] = 'pages/Projects';
		$this->load->model('Pages_Model');
		$data['categoryType'] = $this->Pages_Model->getCategoryType();
		$this->load->view('templates/volunteer_story_template',$data);
	}	
*/
	public function viewProjects()
	{
		$data['content'] = 'pages/Projects';
		$this->load->model('Projects_Model');
		$data['limit'] = 2;
		$data['rowLoc'] = $this->Projects_Model->getLocationList();
		$data['typeOfWorkList'] = $this->Projects_Model->getTypeOfWorkList();
		$data['query'] = $this->Projects_Model->getProjectEvents();
		$data['count'] = $this->Projects_Model->getProjectEventsCount();
		$data['rcount'] = $this->Projects_Model->getProjectEventsRcount();
		$data['categoryArray'] = $this->Projects_Model->getCategoryArray();
		$this->load->view('templates/general_template',$data);
	}

	//---------------------------------------------------------
	// About Page
	//---------------------------------------------------------
	public function viewAbout()
	{
		date_default_timezone_set('Etc/GMT-8');
		$data['content'] = 'pages/About';
		$this->load->model('About_Model');
        $data['headings'] = array('Sun','Mon','Tue','Wed','Thu','Fri','Sat');
        if($this->input->post('year') != null)
        {
			$data['date'] = date("Y-m-d",strtotime($this->input->post('year').'-'.$this->input->post('month').'-01'));
        }
        else
        {
        	$data['date'] = date("Y-m-d");
        }
		$data['year'] = date("Y",strtotime($data['date']));
		$data['month'] = date("m",strtotime($data['date']));
		$data['startday'] = date('w',strtotime($data['year'].'-'.$data['month'].'-'.'1'));
		$data['endday'] = date('t',strtotime($data['year'].'-'.$data['month'].'-'.'1'));
		$data['ctr'] = 0;
		$data['daysctr'] = 1;
		$data['query'] = $this->About_Model->getEvents();
		$data['location'] = $this->About_Model->getLocationList();
		$data['category'] = $this->About_Model->getCategoryType();
		$data['typeofwork'] = $this->About_Model->getTypeOfWork();
		$data['value'] = $this->input->post('loc');
		if($this->input->post('loc') != null)
		{
			$this->load->view('calendar',$data);
		}
		else
		{
			$this->load->view('templates/general_template',$data);
		}		
	}

	//---------------------------------------------------------
	// Dashboard Page
	//---------------------------------------------------------	
	public function viewDashboard()
	{
		//$username = $this->input->post('username');
		$username = $this->session->userdata('username');
 
		$data['content'] = 'pages/Dashboard';
		$this->load->model('Dashboard_Model');
		$data['account'] = $this->Dashboard_Model->getAccount($username);		
		$data['events'] = $this->Dashboard_Model->getEvents($username);		
		$data['category'] = $this->Dashboard_Model->getCategoryName($username);	
		$data['eventsOrganizerUsername'] = $this->Dashboard_Model->getEventsOrganizerUsername($username);		
//		$data['volunteerHistory'] = $this->Dashboard_Model->getVolunteeringHistory($username);		
		$data['categoryArray'] = $this->Dashboard_Model->getCategoryArray();
		$data['typeOfWorkList'] = $this->Dashboard_Model->getTypeOfWorkList();
		$data['locationList'] = $this->Dashboard_Model->getLocationList();
		$this->load->view('templates/dashboard_template',$data);
	}
}