<?php 
Class Homepage extends CI_Controller
{
	public function view($page = 'home')
    {
		if ( ! file_exists(APPPATH.'/views/pages/'.$page.'.php'))
        {
                // Whoops, we don't have a page for that!
                show_404();
        }

        $data['title'] = ucfirst($page); // Capitalize the first letter

        $this->load->view('templates/header', $data);
        $this->load->view('pages/'.$page, $data);
        $this->load->view('templates/footer', $data);
    }

	function index()
	{
		$data['content'] = 'homepage';
		
		$this->load->view('includes/template',$data);
	}

	function addblog()
	{
		$data['content'] = 'addblog';
		$this->load->view('includes/template5',$data);
	}


	function addNGO()
	{
		$data['content'] = 'addngo';
		$this->load->view('includes/template5',$data);
	}

	function adminlogin()
	{
		$data['content'] = 'adminlogin';
		$this->load->view('includes/template5',$data);
	}

	function dashboard()
	{
		$data['content'] = 'dashboard';
		$this->load->model('homepage_model');
		$data['display'] = $this->homepage_model->viewDisplay();
		
		$this->load->view('includes/template3',$data);
	}
	
	function ngodashboard()
	{
		$data['content'] = 'ngodashboard';
		$this->load->model('homepage_model');
		$data['ngo'] = $this->homepage_model->viewDisplayNGO();
		$data['upcoming'] = $this->homepage_model->displayUpcomingEvents();
		$this->load->view('includes/template4',$data);
	}
	
	function login()
	{
		$data['content'] = 'login';
		$this->load->view('includes/template',$data);
	}

	function signup()
	{
		$data['content'] = 'signup';
		$this->load->view('includes/template',$data);
	}
	
	function about()
	{
		date_default_timezone_set('Etc/GMT-8');
		$data['content'] = 'volunteer';
		$this->load->model('homepage_model');
		$data['location'] = $this->homepage_model->listLocation();
		$data['listLocation'] = $this->homepage_model->listLocation();
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
		$data['query'] = $this->homepage_model->viewEvents();
		$data['location'] = $this->homepage_model->listLocation();
		$data['category'] = $this->homepage_model->categorytype();
		$data['typeofwork'] = $this->homepage_model->typeofwork();
		$data['value'] = $this->input->post('loc');
		if($this->input->post('loc') != null)
		{
		$this->load->view('calendar',$data);
		}
		else
		{
		$this->load->view('includes/template',$data);
		}
		
	}

	function seemore()
	{
		$this->load->model('mainpage_model');
		$this->load->model('homepage_model');
		$data['limit'] = $this->input->post('count')+2;
		$data['rowloc'] = $this->mainpage_model->listLocation();
		$data['rowtype'] = $this->mainpage_model->listType();
		$data['query'] = $this->homepage_model->projectevents();
		$data['count'] = $this->homepage_model->projecteventscount();
		$data['rcount'] = $this->homepage_model->projecteventsrcount();
		$data['id'] = $this->input->post('id');
		$this->load->view('seemore',$data);
	}

	function prev()
	{
		date_default_timezone_set('Etc/GMT-8');
		$this->load->model('homepage_model');
        $data['headings'] = array('Sun','Mon','Tue','Wed','Thu','Fri','Sat');
		$data['date'] = date("Y-m-d",strtotime('-1 month',strtotime($this->input->post('year').'-'.$this->input->post('month').'-01')));
		$data['year'] = date("Y",strtotime($data['date']));
		$data['month'] = date("m",strtotime($data['date']));
		$data['startday'] = date('w',strtotime($data['year'].'-'.$data['month'].'-'.'1'));
		$data['endday'] = date('t',strtotime($data['year'].'-'.$data['month'].'-'.'1'));
		$data['ctr'] = 0;
		$data['daysctr'] = 1;
		$data['query'] = $this->homepage_model->viewEvents();
		$this->load->view('calendar',$data);
	}

	function next()
	{
		date_default_timezone_set('Etc/GMT-8');
		$this->load->model('homepage_model');
        $data['headings'] = array('Sun','Mon','Tue','Wed','Thu','Fri','Sat');
		$data['date'] = date("Y-m-d",strtotime('+1 month',strtotime($this->input->post('year').'-'.$this->input->post('month').'-01')));
		$data['year'] = date("Y",strtotime($data['date']));
		$data['month'] = date("m",strtotime($data['date']));
		$data['startday'] = date('w',strtotime($data['year'].'-'.$data['month'].'-'.'1'));
		$data['endday'] = date('t',strtotime($data['year'].'-'.$data['month'].'-'.'1'));
		$data['ctr'] = 0;
		$data['daysctr'] = 1;
		$data['query'] = $this->homepage_model->viewEvents();
		$this->load->view('calendar',$data);
	}

	function content()
	{
		$this->load->model('homepage_model');
		$data['query'] = $this->homepage_model->events();
		$data['value'] = $this->input->post('volunteerid');
		$this->load->view('ajaxContent',$data);
	}
	
	function nonprofits()
	{
		$data['content'] = 'Nonprofits';
		$this->load->model('homepage_model');
		$data['story'] = $this->homepage_model->viewStory();
		$data['viewStoryNonProfit'] = $this->homepage_model->viewStoryNonProfit();
		$this->load->view('includes/template',$data);
	}
	
	function contact()
	{
		$data['content'] = 'Contact';
		$this->load->view('includes/template',$data);		
	}
	
	function projects()
	{
		$data['content'] = 'projects';
		$this->load->model('mainpage_model');
		$this->load->model('homepage_model');
		$data['limit'] = 2;
		$data['rowloc'] = $this->mainpage_model->listLocation();
		$data['rowtype'] = $this->mainpage_model->listType();
		$data['query'] = $this->homepage_model->projectevents();
		$data['count'] = $this->homepage_model->projecteventscount();
		$data['rcount'] = $this->homepage_model->projecteventsrcount();
		$data['categorytype'] = $this->homepage_model->categorytype();
		$this->load->view('includes/template',$data);
	}
	
	function clone1()
	{
		$this->load->model('mainpage_model');
		$this->load->model('homepage_model');
		$data['limit'] = 2;
		$data['rowloc'] = $this->mainpage_model->listLocation();
		$data['rowtype'] = $this->mainpage_model->listType();
		$data['query'] = $this->homepage_model->projectevents();
		$data['count'] = $this->homepage_model->projecteventscount();
		$data['rcount'] = $this->homepage_model->projecteventsrcount();
		$data['categorytype'] = $this->homepage_model->categorytype();
		$data['id'] = $this->input->post('id');
		$data['loc'] = $this->input->post('loc');
		$data['work'] = $this->input->post('work');
		$data['words'] = $this->input->post('words');
		$this->load->view('clone',$data);
	}

	function stories()
	{
		$data['content'] = 'stories';
		
		$this->load->model('homepage_model');
		$data['story'] = $this->homepage_model->viewStory();
		$this->load->view('includes/template',$data);
	}
	
	function volunteers()
	{
		$data['content'] = 'volunteers';
		$this->load->model('homepage_model');
		$data['story'] = $this->homepage_model->viewStory();
		$data['viewStory'] = $this->homepage_model->viewStory();
		$this->load->view('includes/template',$data);
	}

	function regAccount()
	{
		 $this->form_validation->set_rules('firstname', 'First Name', 'trim|required');
  		 $this->form_validation->set_rules('lastname', 'Last Name', 'trim|required');
		 $this->form_validation->set_rules('username', 'Username', 'trim|required');
  		 $this->form_validation->set_rules('password', 'Password', 'trim|required');
  		 if($this->form_validation->run() == FALSE)
   		{
    	 $this->signupview();
   		}
  		else
  		{
  			$this->load->model('homepage_model');
			$query = $this->homepage_model->regcheck();
			if($query)
			{
				print "<script type=\"text/javascript\">alert('Already Exist');</script>";
				$this->signupview();
			}
			else
			{
				$query = $this->homepage_model->register();
				print "<script type=\"text/javascript\">alert('Registration Successful');</script>";
				$this->index();
			}
  		}
	}

	
	function changeDisplay()
	{
		$data['content'] = 'dashboard';
		$this->load->model('homepage_model');
		$data['display'] = $this->homepage_model->changeDisplay();
		$data['display'] = $this->homepage_model->viewDisplay();
		$this->load->view('includes/template3',$data);
	}
	
	function changeDisplayNGO()
	{
		$data['content'] = 'ngodashboard';
		$this->load->model('homepage_model');
		$data['display'] = $this->homepage_model->changeDisplayNGO();
		$data['ngo'] = $this->homepage_model->viewDisplayNGO();
		$data['upcoming'] = $this->homepage_model->displayUpcomingEvents();
		$this->load->view('includes/template4',$data);
	}
	
	function contactForm()
	{
		 $this->form_validation->set_rules('name', 'Name', 'trim|required');
  		 $this->form_validation->set_rules('contactno', 'Contact Number', 'trim|required');
		 $this->form_validation->set_rules('email', 'Email Address', 'trim|required');
  		 $this->form_validation->set_rules('subject', 'Subject', 'trim|required');
  		 $this->form_validation->set_rules('message', 'Message', 'trim|required');
		 if($this->form_validation->run() == FALSE)
   		{
    	 $this->contact();
   		}
  		else
  		{
  			$this->load->model('homepage_model');
		
				$query = $this->homepage_model->contact();
				print "<script type=\"text/javascript\">alert('Registration Successful');</script>";
				$this->index();
			
  		}
	}



	function addBlogNGO()
	{
		 $this->form_validation->set_rules('blogname', 'Blog Name', 'trim|required');
  		 $this->form_validation->set_rules('description', 'Description', 'trim|required');
		
		 if($this->form_validation->run() == FALSE)
   		{
    	 $this->ngodashboard();
   		}
  		else
  		{
  			$this->load->model('homepage_model');
		
				$query = $this->homepage_model->addBlog();
				print "<script type=\"text/javascript\">alert('Blog posted!');</script>";
				$this->index();
			
  		}
	}


	function addNGOAccount()
	{
	//	 $this->form_validation->set_rules('username', 'Username', 'trim|required');
  //		 $this->form_validation->set_rules('fullname', 'Full Name', 'trim|required');
//		
	//	 if($this->form_validation->run() == FALSE)
   //		{
    //	 $this->addNGO();
   	//	}
  //		else
  //		{
  			$this->load->model('homepage_model');
		
				$query = $this->homepage_model->addNGO();
				print "<script type=\"text/javascript\">alert('NGO Added!');</script>";
				$this->index();
			
  	//	}
	}
	
	
	
	
	
	function addEvent()
	{
	//	 $this->form_validation->set_rules('eventname', 'Event Name', 'trim|required');
		// $this->form_validation->set_rules('venue', 'Venue', 'trim|required');
//  		 $this->form_validation->set_rules('minimumrequirements', 'Minimum Requirements', 'trim|required');
 // 		 $this->form_validation->set_rules('prefferredskills', 'Prefferred Skills', 'trim|required');
//		 if($this->form_validation->run() == FALSE)
 //  		{
  //  	 $this->index();
   //		}
  	//	else
  	//	{
  			$this->load->model('homepage_model');
		
				$query = $this->homepage_model->addEvent();
				print "<script type=\"text/javascript\">alert('Event Added');</script>";
				$this->index();
			
  	//	}
	}
	
	
	function viewfeaturedstory()
	{

		$data['content'] = 'volunteers';
		$this->load->model('homepage_model');
		$data['story'] = $this->homepage_model->viewStory();
		$data['viewStory'] = $this->homepage_model->viewStory();
		$this->load->view('includes/template2',$data);
	}
	
	

	function logAccount()
	{
		 $this->form_validation->set_rules('username', 'Username', 'trim|required');
  		 $this->form_validation->set_rules('password', 'Password', 'trim|required');

  		if($this->form_validation->run() == FALSE)
   		{
    	 $this->loginview();
   		}
  		else
  		{
		$this->load->model('homepage_model');
		$query = $this->homepage_model->logincheck();
		
			if($query)
			{
				$this->load->model('homepage_model');
				$query = $this->homepage_model->logincheck1();
				$query1 = $this->homepage_model->logincheck2();
				$query2 = $this->homepage_model->logincheck3();
				if($query)
				{
				$data = array(
					'firstname' => $query['firstname'],
					'lastname' => $query['lastname'],
					'username' => $query['username'],
					'id' => $query['id'],
				    'logged_in' => TRUE
					);
				$this->session->set_userdata($data);
				redirect('dashboard');
			}
				elseif($query1){
					$data2 = array(
					'firstname' => $query1['firstname'],
					'lastname' => $query1['lastname'],
					'username' => $query1['username'],
					'id' => $query1['id'],
					'name' => $query1['name'],
				    'logged_in' => TRUE
					);
				$this->session->set_userdata($data2);
				redirect('ngodashboard');
			}
				else{
					$data3 = array(
					'firstname' => $query2['firstname'],
					'lastname' => $query2['lastname'],
					'username' => $query2['username'],
					'id' => $query2['id'],
					'name' => $query2['name'],
				    'logged_in' => TRUE
					);
				$this->session->set_userdata($data3);
				redirect('admindashboard');
			}
			}
			else
			{
				print "<script type=\"text/javascript\">alert('Account Not Found');</script>";
				$this->login();
			}
  		}
		

	}
	
	
	
	function project()
	{
                if($this->session->userdata('searchval'))
                {
                $data['content'] = 'projects';
				$this->load->model('homepage_model');
                $data['query'] = $this->mainpage_model->viewEvents();
                $data['viewProfile'] = $this->mainpage_model->viewProfile();	
                $data['base']=$this->config->item('base_url');
                $data['title']= 'Message form';
                $total=$this->mainpage_model->message_count($this->session->userdata('searchval'));
                $per_pg=2;
                $offset=$this->uri->segment(3);
                $this->load->library('pagination');
                $config['base_url'] = $data['base'].'/mainpage/accounts/';
                $config['total_rows'] = $total;
                $config['per_page'] = $per_pg;        
                $config['full_tag_open'] = '<div id="pagination" div align = "center">';
                $config['full_tag_close'] = '</div>';
                $this->pagination->initialize($config);
                $data['pagination']=$this->pagination->create_links();
                $data['query']=$this->mainpage_model->get_all($per_pg,$offset,$this->session->userdata('searchval'));
                }
                else
                {
                $data['content'] = 'project';
		$this->load->model('homepage_model');
		
		$this->load->model('mainpage_model');
                $data['query'] = $this->homepage_model->viewEvents();
                $data['base']=$this->config->item('base_url');
                $data['title']= 'Message form';
                $total=$this->mainpage_model->message_count();
                $per_pg=2;
                $offset=$this->uri->segment(3);
                $this->load->library('pagination');
                $config['base_url'] = $data['base'].'/mainpage/accounts/';
                $config['total_rows'] = $total;
                $config['per_page'] = $per_pg;        
                $config['full_tag_open'] = '<div id="pagination" div align = "center">';
                $config['full_tag_close'] = '</div>';
                $this->pagination->initialize($config);
                $data['pagination']=$this->pagination->create_links();
                $data['query']=$this->mainpage_model->get_all($per_pg,$offset);
                }
                $this->load->view('includes/template',$data); 
	}
}
?>