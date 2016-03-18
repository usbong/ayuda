<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width = device-width, initial-scale = 1">
		<link rel="stylesheet" href="css/bootstrap.min.css"/>
		<link rel="stylesheet" href="css/font-awesome.min.css"/>
	
		<link rel="stylesheet" href="css/style.css" />
			<script src="js/vendor/modernizr-2.6.2.min.js"></script>
		<script src="js/vendor/jquery-1.10.2.min.js"></script>
		<script src="js/vendor/bootstrap.min.js"></script>
	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
		<link href='http://fonts.googleapis.com/css?family=Bree+Serif' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Philosopher' rel='stylesheet' type='text/css'>
		
		
		
	
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

	<style>
		body
			{
			background-color: #ffffff;
			}
		.pad
			{
			padding-top: 10%;
			}
		.pad1
			{
			padding-top: 5%;
			}
		.jumbotron
			{
			background-color: #ffffff;
			}
		.sbmt
		{
			margin-right: 3%;
			border-radius: 0px;
			background-color: #e52e2e;		
			color: #ffffff;
		}
		.FBsbmt
		{
			margin-right: 3%;
			border-radius: 0px;
			background-color: #5c75b7;		
			color: #ffffff;
		}

							
 a:hover {
  cursor:pointer;
 }
 
 a {
	color:white;
 }
  
 a.sign-up-login {
	color: #2c345b;
 }
		.row.vertical-divider {
  overflow: hidden;
}
.row.vertical-divider > div[class^="col-"] {
  text-align: center;
  padding-bottom: 100px;
  margin-bottom: -100px;
  border-left: 3px solid #F2F7F9;
  border-right: 3px solid #F2F7F9;
}
.row.vertical-divider div[class^="col-"]:first-child {
  border-left: none;
}
.row.vertical-divider div[class^="col-"]:last-child {
  border-right: none;
}
		</style>
</head>
<body>
<?php		
  $currTab="Home";
?>

<div align="center">
	<img src="<?php echo base_url('assets/images/Ayuda Logo.png'); ?>" width="200" height="180">
</div>
<nav>
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
      <?php echo anchor('homepage', ' ', array('class' => 'navbar-brand')); ?>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
     
		
		
	
	<!--<![endif]-->
	
	<body>
		
		<div class="container-fluid">
			<div class="row">
				<div align="right">
					<font size="3" face="Arial">
					   <a class='sign-up-login' id="modal-launcher" data-toggle="modal" data-target="#login-modal">Login</a> / <a id='modal-launcher' class='sign-up-login' data-toggle="modal" data-target="#login-modal">Register</a>					  
					</font>
				</div>	
			</div>
		</div>
		
		<?php		
			$menu_tab_colors = array(0 => '#e62e2e', 1 => '#e62e2e', 2 => '#e62e2e', 3 => '#e62e2e', 4 => '#e62e2e', 5 => '#e62e2e', 6 => '#e62e2e');
			$url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
			if (strpos($url,'Home') != false) {
				$menu_tab_colors[0] = '#c12925';
				$currTab = "Home";
			}
			else if (strpos($url,'About') != false) {
				$menu_tab_colors[1] = '#c12925';
				$currTab = "About";
			}
			else if (strpos($url,'Contact') != false) {
				$menu_tab_colors[2] = '#c12925';
				$currTab = "Contact";
			}
			else if (strpos($url,'Volunteers') != false) {
				$menu_tab_colors[3] = '#c12925';
				$currTab = "Volunteers";
			}
			else if (strpos($url,'Nonprofits') != false) {
				$menu_tab_colors[4] = '#c12925';
				$currTab = "Nonprofits";
			}
			else if (strpos($url,'Stories') != false) {
				$menu_tab_colors[5] = '#c12925';
				$currTab = "Stories";
			}
			else if (strpos($url,'Projects') != false) {
				$menu_tab_colors[6] = '#c12925';
				$currTab = "Projects";
			}
		?>
		<table border="0" width="100%" style="table-layout: fixed;" cellspacing="0" cellpadding="15">
			<tr>
				<td style="background-color: <?php echo $menu_tab_colors[0]; ?>;" align="center">
					<br><b><?php echo anchor('pages/view/Home', 'HOME'); 
					?></b><br><br>
				</td>
				<td style="background-color: <?php echo $menu_tab_colors[1]; ?>;" align="center">
					<br><b><?php echo anchor('pages/view/About', 'ABOUT'); 
					?></b><br><br>
				</td>
				<td style="background-color: <?php echo $menu_tab_colors[2]; ?>;" align="center">
					<br><b><?php echo anchor('pages/view/Contact', 'CONTACT'); 
					?></b><br><br>
				</td>
				<td style="background-color: <?php echo $menu_tab_colors[3]; ?>;" align="center">
					<br><b><?php echo anchor('pages/view/Volunteers', 'VOLUNTEERS'); 
					?></b><br><br>
				</td>
				<td style="background-color: <?php echo $menu_tab_colors[4]; ?>;" align="center">
					<br><b><?php echo anchor('pages/view/Nonprofits', 'NONPROFITS'); 
					?></b><br><br>
				</td>
				<td style="background-color: <?php echo $menu_tab_colors[5]; ?>;" align="center">
					<br><b><?php echo anchor('pages/view/Stories', 'STORIES'); 
					?></b><br><br>
				</td>
				<td style="background-color: <?php echo $menu_tab_colors[6]; ?>;" align="center">
					<br><b><?php echo anchor('pages/view/Projects', 'PROJECTS'); 
					?></b><br><br>
				</td>
			</tr>
		</table>

	</body>
</html>


	<div class="modal inmodal fade" id="login-modal" tabindex="-1" role="dialog"  aria-hidden="true">
		<div class="modal-dialog  modal-lg">
			<div class="modal-content">

      		<div class="modal-body login-modal">
  
      			<br/>
      			<div class="clearfix"></div>
      			<div id='social-icons-container'>
	        		<div class="form-group col-md-6">
					<b><h6 align="center">ARE YOU A MEMBER?</h6><span align="center" style="font-size:3em; margin-left:33%;">LOG IN</span></b>
						<?php
							echo form_open('Form/data_submitted');
							echo'<div class="form-group">';
							echo '<label class="control-label" for="email">Username:</label>';
							echo form_input(array('name' => 'username', 'type'=>'text','class'=>'form-control','placeholder'=>'Username','value' => set_value('username'), 'autocomplete' => 'off'));
							echo 'post'.$this->input->post('username');
							echo $this->session->set_userdata('username',$this->input->post('username'));
							echo'</div>';
							echo'<div class="form-group">';
							echo '<label class="control-label" for="email">Password:</label>';
							echo form_input(array('name' => 'password', 'type'=>'password','class'=>'form-control','placeholder'=>'Password'));
							echo'</div>';
							echo'<div class="form-group col-md-3"></div>';
							echo'<div class="checkbox">'; 
							echo'<label><input type="checkbox" value="">Remember this password</label>'; 
							echo'</div>'; 							
							echo form_submit(array('name' => 'submit', 'type'=>'submit','class'=>'btn btn-danger btn-lg btn-block sbmt','value'=>'LOGIN'));
							echo '<div class="row"><br><center><i>Forgot your password?</i><br><b>OR</b><br><br></center></div>';
							echo form_submit(array('name' => 'submit', 'type'=>'submit','class'=>'btn btn-primary btn-lg btn-block FBsbmt','value'=>'LOGIN WITH FACEBOOK'));
							echo'</div>';
							echo form_close();
							echo validation_errors();
						?>
						
		            	</center>
	        		</div>
					
					
					
					
	        	
	        		<div class='modal-body-right'>
	        			<div class="modal-social-icons">
	        			<h6 align="center">NOT A MEMBER YET?</h6> <span style="font-size:3em; margin-left:13%;"> REGISTER</SPAN>
						<div class="form-group col-md-6">
						<?php			
		echo form_open('regAccount');
		 echo '<div class="row">';
        echo'<div class="form-group col-md-6">';
        echo '<label class="control-label">First Name:</label>';
        echo form_input(array('name' => 'firstname', 'type'=>'text','class'=>'form-control','placeholder'=>'First Name','value' => set_value('firstname'), 'autocompelte' => 'off'));
		echo'</div>'; 
		echo'<div class="form-group col-md-6">';
         echo '<label class="control-label">Last Name:</label>';
        echo form_input(array('name' => 'lastname', 'type'=>'text','class'=>'form-control','placeholder'=>'Last Name','value' => set_value('lastname'), 'autocompelte' => 'off'));
        echo'</div>'; 
        echo'</div>'; 
		 echo '<div class="row">';
        echo'<div class="form-group col-md-12">';
        echo '<label class="control-label">Email:</label>';
        echo form_input(array('name' => 'username', 'type'=>'text','class'=>'form-control','placeholder'=>'Username','value' => set_value('username'), 'autocompelte' => 'off'));
        echo'</div>';
        echo'</div>';
		echo '<div class="row">';
        echo'<div class="form-group col-md-6">';
         echo '<label class="control-label">Password:</label>';
        echo form_input(array('name' => 'password', 'type'=>'password','class'=>'form-control','placeholder'=>'Password'));
        echo'</div>';
		 echo'<div class="form-group col-md-6">';
         echo '<label class="control-label">Confirm password:</label>';
        echo form_input(array('name' => 'password', 'type'=>'password','class'=>'form-control','placeholder'=>'Password'));
        echo'</div>';
        echo'</div>';
        echo'<div class="form-group" align ="center">';
				echo'<div class="form-group col-md-3"></div>';
		echo'<div class="checkbox">'; 
		echo'<label><input type="checkbox" value="">I agree to the Terms and Service & Privacy Policy</label>'; 
		echo'</div>';				

		echo'<div class="checkbox">'; 
		echo'<label><input type="checkbox" value="">I want to receive email notifications from Ayuda Pilipinas and its partners</label>'; 
		echo'</div>';
       echo form_submit(array('name' => 'submit', 'type'=>'submit','class'=>'btn btn-default btn-lg btn-block sbmt','value'=>'REGISTER'));
        echo anchor('pages/view/'.$currTab,'CANCEL',array('class'=>'btn btn-default btn-lg btn-block sbmt'));
        echo'</div>';
        echo form_close();
        ?>
						</div>	
						
	        		
	        	</div>																												
        		<div class="clearfix"></div>
      		</div>
      		<div class="clearfix"></div>
      		<div class="modal-footer login_modal_footer">
      		</div>
    	</div>
  	</div>
</div>
    </div>
  </div>	
</nav>