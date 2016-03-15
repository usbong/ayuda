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
		$data['rowloc'] = $this->Projects_Model->getListLocation();
		$data['rowtype'] = $this->Projects_Model->getListType();
		$data['query'] = $this->Projects_Model->getProjectEvents();
		$data['count'] = $this->Projects_Model->getProjectEventsCount();
		$data['rcount'] = $this->Projects_Model->getProjectEventsRcount();
		$data['categorytype'] = $this->Projects_Model->getCategorytype();
		$this->load->view('templates/general_template',$data);
	}

}