<?php
	require('connection.php');
?>

<?php session_start();
?>


<html>
	<head><title>Oraginising Team</title>
		 <link rel="stylesheet" href="Event.css">
		 <!--<link rel="stylesheet" href="organiser.css">-->
	</head>
	<body ><div id="header"><br><br><a href="Home.html" ><button id="home_link">Home</button></a><center>
			<style>#home_link{text-decoration:none;background-color:#1C6864;
			color:white;
			margin-left:50px;float:left;}</style>
		<font face="helvatica" color="#1C6864" size="27px" id="center_text">Organising Team</font></center>
		<form action="organiser.php" method="post">
					<input type="submit" value="Register" name="signup" id="event_back"></form>
			<div id="main_section"><br><br>
				<div class="image_section" ><div id="details"><div id="left">
					<img src="image/org1.jpg" height="150px" width="150px" class="event_image">
					</div>
					<style>#details{height:180px;}
					#left{height:"180px";width:160px;float:left;}
					#right{height:"180px";width:360px;float:left;margin-left:50px;margin-top:-40px;}
					</style>
					<div id="right">
					<!--***************PHP CODE *******************-->
						 <?php
						 $result=$conn->query("select * from organiser where ORG_ID='ORG101'");
						 while($row=$result->fetch_array(MYSQLI_BOTH)){
						 echo "</center>";
						 echo "<br><h4><font face='san-serif' color='#1C6864'>Name:&nbsp;&nbsp;</font><font color='white'>".$row['ORG_NAME']."</font></h4>";
						 echo "<h4><font face='san-serif' color='#1C6864'>Department:&nbsp;&nbsp;</font><font color='white'>".$row['DEP']."</font></h4>";
						 echo "<h4><font face='san-serif' color='#1C6864'>Email:&nbsp;&nbsp;</font><font color='white'>".$row['EMAIL']."</font></h4>";
						 echo "<h4><font face='san-serif' color='#1C6864'>Contact:&nbsp;&nbsp;</font><font color='white'>".$row['CONTACT']."</font></h4>";
						 }
						 ?></div></div>
				  <!--***********************END*********************-->
					<br><br><div id="details"><div id="left">
					<img src="image/org3.jpg" height="150px" width="150px" class="event_image"></div>
					<div id="right">
					<!--***************PHP CODE *******************-->
						 <?php
						 $result=$conn->query("select * from organiser where ORG_ID='ORG102'");
						 while($row=$result->fetch_array(MYSQLI_BOTH)){
						 echo "</center>";
						 echo "<br><h4><font color='#1C6864'>Name:&nbsp;&nbsp;</font><font color='white'>".$row['ORG_NAME']."</font></h4>";
						 echo "<h4><font color='#1C6864'>Department:&nbsp;&nbsp;</font><font color='white'>".$row['DEP']."</font></h4>";
						 echo "<h4><font color='#1C6864'>Email:&nbsp;&nbsp;</font><font color='white'>".$row['EMAIL']."</font></h4>";
						 echo "<h4><font color='#1C6864'>Contact:&nbsp;&nbsp;</font><font color='white'>".$row['CONTACT']."</font></h4>";
						 }
						 ?>
				  <!--***********************END*********************-->	</div></div>
					
					<br><br><div id="details"><div id="left">
					<img src="image/org4.jpg" height="150px" width="150px" class="event_image"></div>
					<div id="right">
					<!--***************PHP CODE *******************-->
						 <?php
						 $result=$conn->query("select * from organiser where ORG_ID='ORG103'");
						 while($row=$result->fetch_array(MYSQLI_BOTH)){
						 echo "</center>";
						 echo "<br><h4><font color='#1C6864'>Name:&nbsp;&nbsp;</font><font color='white'>".$row['ORG_NAME']."</font></h4>";
						 echo "<h4><font color='#1C6864'>Department:&nbsp;&nbsp;</font><font color='white'>".$row['DEP']."</font></h4>";
						 echo "<h4><font color='#1C6864'>Email:&nbsp;&nbsp;</font><font color='white'>".$row['EMAIL']."</font></h4>";
						 echo "<h4><font color='#1C6864'>Contact:&nbsp;&nbsp;</font><font color='white'>".$row['CONTACT']."</font></h4>";
						 }
						 ?>
				  <!--***********************END*********************--></div></div>
				</div>
				<style>
					.login_decoration{
						width:300px;
						height:30px;
						background-color:#8d9a91;
						border-radius:10px;
						margin:5px;
						opacity:.7;
						color:#000000;
						}
					.login_continue{background-color:black;
						border-radius:10px;width:150px;
						opacity:.6;
						color:white;}
				</style>
				<div class="text_section">
					
					<?php if(isset($_POST['signup'])){ 
						?>
					<center><font face="helvatica" color="#1C6864" size="20px">Register</font><br><br>
						<form id="form_decoration">
							<input type="text" name="org_id" placeholder="User id" class="login_decoration" required="required">
							<input type="text" name="org_name" placeholder=" Name" class="login_decoration" >
							<input type="text" name="dept" placeholder="Department" class="login_decoration" >
							<input type="email" name="email" placeholder="Email" class="login_decoration" required="required">
							<input type="text" name="contact" placeholder="Contact" class="login_decoration" required="required">
							<input type="password" name="password" placeholder="Password" class="login_decoration" required="required">
							<input type="password" name="registration_key" placeholder="Registration Key" class="login_decoration" required="required"><br><br>
							<input type="submit" name="password" value="Register" class="login_continue"></form>
						</form>
					</center>
					<?php if(isset($_POST['Register'])){
						header('location:organiser.php');
					}
					?>
					<?php
				}
				else{
					?>
					<center><font face="helvatica" color="#1C6864" size="20px">Sign in</font><br><br>
						<form action="organiser_portal.php" method="post" id="form_decoration">
							<input type="text" name="org_id" placeholder="Enter your id" class="login_decoration" required="required">
							<input type="password" name="password" placeholder="Password" class="login_decoration" required="required"><br><br>
							<input type="submit" name="login" value="Continue" class="login_continue"></form><form>
						</form>
						<form action="organiser.php" method="post"><input type="submit" name="fpassword" value="Forgot Password" class="login_continue"></form>
					</center>
					<?php
				}
				?>
				<?php if(isset($_POST['login']))
					{
						$id=$_POST['org_id'];
						$pwd=$_POST['password'];
						$result=$conn->query("select ORG_ID, PASSWORD from organiser where ORG_ID='$id'");
						$row=$result->fetch_array(MYSQLI_BOTH);
						if($id=$row['ORG_ID'] && $pwd=$row['PASSWORD'])
						{
							$_SESSION['id']=$id;
							$_SESSION['password']=$pwd;
							header('location:organiser_portal.php');
						}
					}	
				?>
				</div>
	</body>
</html>
