<?php
//Reference: http://www.formget.com/codeigniter-form-input/;
//last accessed: 20160318
class Form extends CI_Controller {
	public function __construct() {
	parent::__construct();
	}

	// Show form in view page i.e view_page.php
	public function form_show() {
	$this->load->view("view_form");
	}

	// When user submit data on view page, Then this function store data in array.
	public function data_submitted() {
		$data = array(
		'username' => $this->input->post('username'),
//		'user_email_id' => $this->input->post('u_email')
		);

		$this->viewDashboard($data['username']);
	}
	
	//---------------------------------------------------------
	// Dashboard Page
	//---------------------------------------------------------	
	public function viewDashboard($username)
	{
		$data['content'] = 'pages/Dashboard';
		$this->load->model('Dashboard_Model');
		$data['account'] = $this->Dashboard_Model->getAccount($username);		
		$data['events'] = $this->Dashboard_Model->getEvents($username);		
		$data['category'] = $this->Dashboard_Model->getCategoryName($username);		

//		$data['volunteerHistory'] = $this->Dashboard_Model->getVolunteeringHistory($username);		
		$this->load->view('templates/dashboard_template',$data);
	}
}
?>