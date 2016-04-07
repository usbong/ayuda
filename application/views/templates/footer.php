<html>
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
			
				div.footerMain{			
					background-color:#2C345B;
					align: center;
					width:100%;
				}
				
				p.description{
				margin: 20px 20px 10px 20px;
				text-align:left;
				}
			
		</style>
	</head>
	<body style="background-color:#2C345B;">
			<div class="footerMain" align="center">
				<table width="80%">
					<tr>
						<td>
							<font color="#FFFFFF"><i><b>Ayunda Pilipinas</b> is Philippines premier volunteering matching website. We bring people closer to the cause they care about, we bring organization the helping hands they need to create better communities and improve lives from all over the country.<br>
							825 A SM Blue Residences.</i>
						</td>
						<td width="180"><br>
							<i><font color="#FFFFFF">Ayuda Pilipinas<br>
							+63917 327 8462<br>
							825 A SM Blue Residences Katipunan Avenue<br>
							Loyola Heights Subdivision<br>
							Quezon City, Philippines</i>
						</td>
					</tr>
		   
					<tr>
						<td>
							<table border="0" style="table-layout: fixed;" cellspacing="" cellpadding="">
								<tr>
									<td align="left" style="padding-right:30px">
										<b><?php echo anchor('pages/view/Home', 'HOME'); 
										?></b>
									</td>
									<td align="left" style="padding-right:30px">
										<b><?php echo anchor('pages/view/About', 'PROJECT SCHEDULE'); 
										?></b>
									</td>
									<td align="left" style="padding-right:30px">
										<b><?php echo anchor('pages/view/Projects', 'PROJECT LISTING'); 
										?></b>
									</td>
									<td align="left" style="padding-right:30px">
										<b><?php echo anchor('pages/view/Volunteers', 'VOLUNTEERS'); 
										?></b>
									</td>
									<td align="left" style="padding-right:30px">
										<b><?php echo anchor('pages/view/Nonprofits', 'NONPROFITS'); 
										?></b>
									</td>
									<td align="left" style="padding-right:30px">
										<b><?php echo anchor('pages/view/Stories', 'STORIES'); 
										?></b>
									</td>
									<td align="left" style="padding-right:30px">
										<b><?php echo anchor('pages/view/Contact', 'CONTACT'); 
										?></b>
									</td>
								</tr>
							</table>
						</td>				
					</tr>	  
					<tr>
						<td align="left">
						<font color="#FFFFFF"><b>© 2015 Ayuda Pilipinas All Right Reserved. PRIVACY POLICY | TERMS OF USE | OFFICIALNESS</b>
						</td>
			
						<td align="left">
						<img src=" <?php  echo base_url('assets/images/Icons and Logos_FB Icon (White).png');?>" width="40"><img src=" <?php  echo base_url('assets/images/Icons and Logos_Twitter Icon (White).png');?>" width="40"><img src=" <?php  echo base_url('assets/images/Icons and Logos_Email Icon (White).png');?>" width="40">
						</td>
					</tr>
				</table>
				<br><br>
			</div>
	</body>
</html>