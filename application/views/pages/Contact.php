<link href='https://fonts.googleapis.com/css?family=Lato:400italic' rel='stylesheet' type='text/css'>
<head>
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
		label.contact {
			color: #ffffff;
		}
						
		p.description
		{
			margin: 20px 20px 10px 20px;
			padding-right: 20%;
			padding-left: 20%;
			text-align:center;
			font-size:15px;
		}
						
		.message{
			height:250px;
			width:310px;
		}
		form {
			vertical-align: top;
		}
		btn btn-default sbmt {
		}
	</style>
</head>

<body style="font-family: 'Lato', sans-serif;">
	<br>
	<div style="background-color:#ffffff" align="center">
		<div>
			<h2><font color="#2c345b" size="6"><b>CONTACT INFORMATION</b></font></h2>
			<p class="description">
				<i>We are interested to know more about you and your experience with us, and the organizations that we have partnered with. We'd
				love it if you give us suggestions on how to improve our service or how else you think you can be involved with our cause.</i>
			</p>
			<br>		
			<table style="margin-left:30%" border="0" width="50%" cellspacing="0" cellpadding="0">
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
			<br><br>
			<h2><font color="#2c345b" size="6"><b>CONTACT FORM</b></font></h2>			
			<p class="description">
			<i>Do you want to get in touch with us now? Leave us a quick message regarding your concern and we’ll get back to you within 3-5
			working days!</i></p>
			
			<br>
			<p class="description">
				<center>
					<div id="selection" style="background-color:#e62e2e;margin:1% 20% 1% 20%;padding: 10px 10px 10px 10px;border-radius: 25px;">		
						<?php
						echo form_open('homepage/contactForm');
						echo '<div class="form-horizontal">';
						echo '<br><div class="form-group"><div class="col-lg-3">';
						echo '<label class="contact">NAME:</label></div>';
						echo '<div class="col-lg-6"><i>'.form_input(array('name' => 'name', 'type'=>'text','class'=>'form-control','placeholder'=>'Full Name','value' => set_value('name'), 'autocompelte' => 'off'));
						echo '</i></div></div>';			   
						echo '<div class="form-group"><div class="col-lg-3">';
						echo '<label class="contact" >CONTACT NUMBER:</label></div>';
						echo '<div class="col-lg-6"><i>'.form_input(array('name' => 'contactno', 'type'=>'text','class'=>'form-control','placeholder'=>'Contact No.','value' => set_value('contactno'), 'autocompelte' => 'off'));
						echo '</i></div></div>';			   
						echo '<div class="form-group"><div class="col-lg-3">';
						echo '<label class="contact" >EMAIL ADDRESS:</label></div>';
						echo '<div class="col-lg-6"><i>'.form_input(array('name' => 'email', 'type'=>'text','class'=>'form-control','placeholder'=>'Email Address','value' => set_value('email'), 'autocompelte' => 'off'));
						echo '</i></div></div>';			   
						echo '<div class="form-group"><div class="col-lg-3">';
						echo '<label class="contact" >SUBJECT:</label></div>';
						echo '<div class="col-lg-6"><i>'.form_input(array('name' => 'subject', 'type'=>'text','class'=>'form-control','placeholder'=>'Subject'));
						echo'</i></div></div>';			   
						echo '<div class="form-group"><div class="col-lg-3">';
						echo '<label class="contact" >MESSAGE:</label></div>';
						echo '<div class="col-lg-6"><i><textarea name="message" class="form-control" text="Message" rows="8" style="color:gray;resize:none">Message';
						echo'</textarea></i></div></div>';			   
						echo'<div class="form-group" align ="center">';
						echo form_submit(array('name' => 'submit', 'type'=>'submit','class'=>'btn btn-default sbmt','value'=>'SEND MESSAGE', 'style'=>'background-color:#ffffff;color:#218bda'));
						echo'</div>';
						echo'</div>';
						echo form_close();
						?>
					</div>
				</center>
			</p>
		</div>
	</div>
</body>