<?php
//Reference: http://www.formget.com/codeigniter-form-input/;
//last accessed: 20160318
class Form extends CI_Controller {
	public function __construct() {
	parent::__construct();
	}
/*
	// Show form in view page i.e view_page.php
	public function form_show() {
	$this->load->view("view_form");
	}
*/
	// When user submits data on view page...
	public function data_submitted() {
		$data = array(
		'username' => $this->input->post('username')
		);

		$this->viewDashboard($data['username'], FALSE);
	}

	// When user submits add event data on view page...
	public function add_event_submitted() {
		$username = $this->session->userdata('account')['username'];
	
		$data = array(
			'userId' => $this->session->userdata('account')['id'],
			'eventName' => $this->input->post('eventName'),
			'dateStart' => $this->input->post('dateStart'),
			'dateEnd' => $this->input->post('dateEnd'),
			'timeStart' => $this->input->post('timeStart'),
			'timeEnd' => $this->input->post('timeEnd'),
			'venue' => $this->input->post('venue'),
			'location' => $this->input->post('location'),
			'minReq' => $this->input->post('minReq'),
			'preferredSkills' => $this->input->post('preferredSkills'),
//			'eventCategory' => $this->input->post('eventCategory'),
			'categoryId' => $this->input->post('categoryId'),
			'typeOfWork' => $this->input->post('typeOfWork')
		);
		
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->form_validation->set_message('required', 'Please fill out all the <font color="red">required</font> fields.');
		$this->form_validation->set_rules('categoryId', 'Select Volunteer Opportunity Category:', 'trim|required');
		
		if ($this->form_validation->run() == FALSE)
		{
//			$this->load->view('myform');
			$this->viewDashboard($username, TRUE);
		}
		else
		{
//			$this->load->view('formsuccess');
			$this->load->model('Dashboard_Model');
			$this->Dashboard_Model->insertEvent($data);		

			$this->viewDashboard($username, FALSE);
		}
	}
	
	//---------------------------------------------------------
	// Dashboard Page
	//---------------------------------------------------------	
	public function viewDashboard($username, $hasError)
	{
		if ($hasError==TRUE) {
			$data['hasError'] = TRUE;
		}
		else {
			unset($_POST);
			$data['hasError'] = FALSE;
		}
	
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
?>