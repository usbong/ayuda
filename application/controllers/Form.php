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
	//---------------------------------------------------------
	// Dashboard Page
	//---------------------------------------------------------	
	// When user submits data on view page...
	public function data_submitted() {
		$data = array(
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password')
		);
		
		$this->load->model('Dashboard_Model');
		$data['account'] = $this->Dashboard_Model->checkAccount($data['username'], $data['password']);

		if (isset($data['account'])) {
			$this->viewDashboard($data['username'], FALSE);
		}
		else {
			$this->session->set_userdata('hasError', TRUE);	  
			$this->session->set_userdata('errorType', 'login_error');	  
			redirect("Pages/viewWithError/Home");
		}
	}
	
	// When user submits add new user data on view page...
	public function add_new_user_submitted() {
		$data = array(
			'confirmPassword' => $this->input->post('confirmPassword'),
			'firstName' => $this->input->post('firstName'),
			'lastName' => $this->input->post('lastName'),
			'username' => $this->input->post('firstName'), //firstName is also the username
			'email' => $this->input->post('email'),
			'password' => $this->input->post('password'),
			'dateJoined' => date('Y-m-d'),		
			'type' => $this->input->post('type')		
		);
		
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->form_validation->set_message('required', 'Please fill out all the fields.');

		$this->form_validation->set_rules('firstName', 'firstName', 'required');
		$this->form_validation->set_rules('lastName', 'lastName', 'required');		
		$this->form_validation->set_rules('password', 'password', 'required');
		$this->form_validation->set_rules('confirmPassword', 'Password Confirmation', 'required');
		$this->form_validation->set_rules('email', 'email', 'required');
				
		if (($this->form_validation->run() == FALSE) || ($data['password']!=$data['confirmPassword']))
		{
			$this->session->set_userdata('hasError', TRUE);	  
			$this->session->set_userdata('errorType', 'register_error');	  
			
			$currTab = $this->session->userdata('currTab');
			
			//$this->viewDashboard($data['username'], TRUE);
			switch ($currTab) {
				case "Ahout":	
					redirect("Pages/viewWithError/About");
					break;
				case "Contact":
					redirect("Pages/viewWithError/Contact");
					break;
				case "Volunteers":
					redirect("Pages/viewWithError/Volunteers");
					break;
				case "Nonprofits":
					redirect("Pages/viewWithError/Nonprofits");
					break;
				case "Stories":
					redirect("Pages/viewWithError/Stories");
					break;
				case "Projects":
					redirect("Pages/viewWithError/Projects");
					break;
				default: //Home
					redirect("Pages/viewWithError/Home");
			}
		}
		else
		{
//			unset($_POST);
			$this->session->set_userdata('hasError', FALSE);			
			array_splice($data, 0, 1); //remove confirmPassword
			
			if (!isset($data['type'])) {
				$data['type'] = 'user';
			}
			
			$this->db->insert('account',$data);
			$this->viewDashboard($data['username'], FALSE);
		}		
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