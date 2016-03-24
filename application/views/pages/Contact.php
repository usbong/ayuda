
<head>
	<link rel="stylesheet" type="text/css" href="design.css">
	<link rel="stylesheet" href="css/boostrap.css">
	<link rel="stylesheet" href="css/boostrap.min.css">
	<link rel="stylesheet" href="css/boostrap-theme.css">
	<style>
		img {
		opacity: 1.0;
		filter: alpha(opacity=40); /* For IE8 and earlier */
			}

		img:hover {
		opacity: 0.4;
		filter: alpha(opacity=100); /* For IE8 and earlier */
		}
		
		div.content{
			margin: 20px 20px 0px 20px;
			text-align: left;
			background-color:#e62e2e;
		}
			
		p.description1{
				margin: 20px 100px 0px 100px;
				text-align:left;
			}
		.message{
			height:250px;
			width:310px;
		}
		label {
			color: #ffffff; /* makes the text white */
		}
		form {
			font-style:italic;
		}
		btn btn-default sbmt {
			color: #217abd;
		}
	</style>
</head>

<body>


	<br>
	<br>
	<br>
	
	
	<div class="col-md-2"> </div>
	<div class="col-md-8">
	
		<b>CONTACT INFORMATION</b><br>
		<i>We are interested to know more about you and your experience with us, and the organizations that we have partnered with. We’d
		love it if you give us suggestions on how to improve our service or how else you think you can be involved with our cause.</i>
		<center> <br>		
		<table border="0" width="100%" style="table-layout: fixed;" cellspacing="0" cellpadding="0">
			<tr>
				<td></td>
				<td align="left"><i><img src="<?php echo base_url('assets/images/phone-icon.png'); ?>" height="30px"><font color="#2c345b">&nbsp;+&nbsp;63 917 327 8642</font></i></td>
				<td></td>
			</tr>
			<tr>
				<td></td>
				<td align="left"><i><img src="<?php echo base_url('assets/images/email-icon.png'); ?>" height="30px"><font color="#2c345b">&nbsp;info@ayudapilipinas.com</font></i></td>
				<td></td>
			</tr>
			<tr>
				<td></td>
				<td align="left"><i><img src="<?php echo base_url('assets/images/facebook-icon.png'); ?>" height="30px"><font color="#2c345b">&nbsp;http://fb.com/AyudaPilipinas</font></i></td>
				<td></td>
			</tr>
			<tr>
				<td></td>
				<td align="left"><i><img src="<?php echo base_url('assets/images/twitter-icon.png'); ?>" height="30px"><font color="#2c345b">&nbsp;@ayudapilipinas</font></i></td>
				<td></td>
			</tr>
		</table>
		</center> <br><br>
		
		<b>CONTACT FORM</b><br>
		<i>Do you want to get in touch with us now? Leave us a quick message regarding your concern and we’ll get back to you within 3-5
		working days!</i>
		<br>
		<br>
		<center>
			<div id="selection" style="background-color:#e62e2e;margin:10px 10px 10px 10px;padding: 10px 10px 10px 10px;border-radius: 25px;>		
				<?php
				echo form_open('homepage/contactForm');
				echo '<div class="form-horizontal">';
				echo '<br><div class="form-group"><div class="col-lg-3">';
				echo '<label class="control-label">NAME:</label></div>';
				echo '<div class="col-lg-6"><i>'.form_input(array('name' => 'name', 'type'=>'text','class'=>'form-control','placeholder'=>'Full Name','value' => set_value('name'), 'autocompelte' => 'off'));
				echo '</i></div></div>';			   
				echo '<div class="form-group"><div class="col-lg-3">';
				echo '<label class="control-label" >CONTACT NUMBER:</label></div>';
				echo '<div class="col-lg-6"><i>'.form_input(array('name' => 'contactno', 'type'=>'text','class'=>'form-control','placeholder'=>'Contact No.','value' => set_value('contactno'), 'autocompelte' => 'off'));
				echo '</i></div></div>';			   
				echo '<div class="form-group"><div class="col-lg-3">';
				echo '<label class="control-label" >EMAIL ADDRESS:</label></div>';
				echo '<div class="col-lg-6"><i>'.form_input(array('name' => 'email', 'type'=>'text','class'=>'form-control','placeholder'=>'Email Address','value' => set_value('email'), 'autocompelte' => 'off'));
				echo '</i></div></div>';			   
				echo '<div class="form-group"><div class="col-lg-3">';
				echo '<label class="control-label" >SUBJECT:</label></div>';
				echo '<div class="col-lg-6"><i>'.form_input(array('name' => 'subject', 'type'=>'text','class'=>'form-control','placeholder'=>'Subject'));
				echo'</i></div></div>';			   
				echo '<div class="form-group"><div class="col-lg-3">';
				echo '<label class="control-label" >MESSAGE:</label></div>';
				echo '<div class="col-lg-6"><i><textarea name="message" class="form-control" text="Message" rows="8" style="color:gray;resize:none">Message';
				echo'</textarea></i></div></div>';			   
				echo'<div class="form-group" align ="center">';
				echo form_submit(array('name' => 'submit', 'type'=>'submit','class'=>'btn btn-default sbmt','value'=>'SEND MESSAGE'));
				echo'</div>';
				echo'</div>';
				echo form_close();
				?>
			</div>
		</center>
	</div>	
<br><br><br><br>
<br><br><br><br>
<br><br><br><br>
<br><br><br><br>
<br><br><br><br>
<br><br><br><br>
<br><br><br><br>
<br><br><br><br>
<br><br><br><br>
<br><br><br><br>
<br><br><br><br>

</body>