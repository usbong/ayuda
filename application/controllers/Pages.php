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
		$this->load->model('Pages_Model');
		$data['story'] = $this->Pages_Model->getStory();
		$this->load->view('templates/volunteer_story_template',$data);
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