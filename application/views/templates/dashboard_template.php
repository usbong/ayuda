<link href='https://fonts.googleapis.com/css?family=Lato:700italic' rel='stylesheet' type='text/css'>
<style>
html,
body {
 margin:0;
 padding:0;
 width:100%;
}
#container {
   position:relative;
}
#header {
	min-width:600px;
	width: auto !important;  /* Firefox will set width as auto */
	width:600px;   
	}
#body {
	overflow-x: hidden !important;
	position:absolute;
	font-family: 'Lato', sans-serif;
 }
#footer {
	min-width:600px;
	width: auto !important;  /* Firefox will set width as auto */
	width:600px;   
	font-family: 'Lato', sans-serif;
}
</style>
<div id="container">
	<div id="header"><?php $this->load->view('templates/dashboard_header'); ?></div>
	<div id="body"><?php $this->load->view($content); ?></div>
	<div id="footer"><?php $this->load->view('templates/footer'); ?></div>
</div>
<?php 
//$this->load->view('templates/dashboard_header');
//$this->load->view($content);
//$this->load->view('templates/footer');
?>