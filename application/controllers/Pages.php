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
		else {
			$this->load->view('templates/header', $data);
			$this->load->view('pages/'.$page, $data);
			$this->load->view('templates/footer', $data);
		}
	}
	
	public function viewVolunteerFeaturedStories()
	{
		$data['content'] = 'pages/Volunteers';
		$this->load->model('Pages_Model');
		$data['story'] = $this->Pages_Model->viewStory();
		$data['viewStory'] = $this->Pages_Model->viewStory();
		$this->load->view('templates/volunteer_story_template',$data);
	}	
}