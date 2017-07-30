<?php
	require('connection.php');
?>

<html>
	<head><title>Event Page </title>
		 <link rel="stylesheet" href="Event.css">
	</head>
	<body ><div id="header"><br><br>
				<a href="Home.html" ><button id="home_link">Home</button></a>
				<center>
					<style>#home_link{text-decoration:none;background-color:#1C6864;
						color:white;
							margin-left:50px;float:left;}</style>
			<font face="helvatica" color="#1C6864" size="27px" id="center_text">Managerial Events</font></center>
			<a href="Home.html#events"><button id="event_back4">Events</button></a>
				<ul>
				  <li><a href="#"><button class="btn">Board Room</button></a></li>
				  <li><a href="#event2"><button class="btn">Interface</button></a></li>
				  <li><a href="#event3"><button class="btn">Ejecutivo </button></a></li>
				  <li><a href="#event4"><button class="btn">Cliente Acuerdo</button></a></li>
				  <li><a href="#event5"><button class="btn">P De Demarrage</button></button></a></li>
			</ul></div><br><br><br>
			<div id="main_section"><br><br>
				<div class="image_section" >
					<img src="image/event41.jpg" height="450px" width="500px" class="event_image"></div>
				<div class="text_section">
					<center><font face="helvatica" color="#1C6864" size="20px">Board Room</font></center>
					<font color="white"><br><br><br><center>
						What if the only weapon you had
						was  <br>mechanical tools and your mind? Will you
						be <br>able to stand your ground and defend all <br>
						 that has been tasked to you? 
						 <!--***************PHP CODE *******************-->
						 <?php
						 $result=$conn->query("select * from event where EID='E101'");
						 while($row=$result->fetch_array(MYSQLI_BOTH)){
						 echo "</center>";
						 echo "<br><h3><font color='#1C6864'>Event Id:&nbsp;&nbsp;</font>".$row['EID']."</h4>";
						 echo "<h3><font color='#1C6864'>Event Date:&nbsp;&nbsp;</font>".$row['DATE']."</h3>";
						 echo "<h3><font color='#1C6864'>Event Timing:&nbsp;&nbsp;</font>".$row['TIME']."</h3>";
						 echo "<h3><font color='#1C6864'>Event Venue:&nbsp;&nbsp;</font>".$row['VENUE']."</h3>";
						 }
						 ?>
						<form><input type="submit" value="REGISTER FOR THE EVENT" name="event11" class="register_button"></form>
				</div>
				<div class="image_section" id="event2"><br><br><br><br><br><br><br><br><br><br>
					<img src="image/event42.jpg" height="450px" width="500px" class="event_image"></div>
				<div class="text_section"><br><br><br><br><br><br><br><br><br><br>
					<center><font face="helvatica" color="#1C6864" size="20px">Interface</font></center>
					<font color="white"><br><br><br><center>
						What if the only weapon you had
						was a <br> and your mind? Will you
						be <br>able to stand your ground and defend all <br>
						 that has been tasked to you? 
						<!--***************PHP CODE *******************-->
						 <?php
						 $result=$conn->query("select * from event where EID='E101'");
						 while($row=$result->fetch_array(MYSQLI_BOTH)){
						 echo "</center>";
						 echo "<br><h3><font color='#1C6864'>Event Id:&nbsp;&nbsp;</font>".$row['EID']."</h4>";
						 echo "<h3><font color='#1C6864'>Event Date:&nbsp;&nbsp;</font>".$row['DATE']."</h3>";
						 echo "<h3><font color='#1C6864'>Event Timing:&nbsp;&nbsp;</font>".$row['TIME']."</h3>";
						 echo "<h3><font color='#1C6864'>Event Venue:&nbsp;&nbsp;</font>".$row['VENUE']."</h3>";
						 }
						 ?>
						<form><input type="submit" value="REGISTER FOR THE EVENT" name="event11" class="register_button"></form>
					</div>
				<div class="image_section"  id="event3"><br><br><br><br><br><br><br><br><br><br>
					<img src="image/event43.jpg" height="450px" width="500px" class="event_image"></div>
				<div class="text_section"><br><br><br><br><br><br><br><br><br><br>
					<center><font face="helvatica" color="#1C6864" size="20px">Ejecutivo</font></center>
					<font color="white"><br><br><br><center>
						What if the only weapon you had
						was a <br>computer and your mind? Will you
						be <br>able to stand your ground and defend all <br>
						 that has been tasked to you? 
						 <!--***************PHP CODE *******************-->
						 <?php
						 $result=$conn->query("select * from event where EID='E101'");
						 while($row=$result->fetch_array(MYSQLI_BOTH)){
						 echo "</center>";
						 echo "<br><h3><font color='#1C6864'>Event Id:&nbsp;&nbsp;</font>".$row['EID']."</h4>";
						 echo "<h3><font color='#1C6864'>Event Date:&nbsp;&nbsp;</font>".$row['DATE']."</h3>";
						 echo "<h3><font color='#1C6864'>Event Timing:&nbsp;&nbsp;</font>".$row['TIME']."</h3>";
						 echo "<h3><font color='#1C6864'>Event Venue:&nbsp;&nbsp;</font>".$row['VENUE']."</h3>";
						 }
						 ?>
						<form><input type="submit" value="REGISTER FOR THE EVENT" name="event11" class="register_button"></form>
					</div>
				<div class="image_section"  id="event4"><br><br><br><br><br><br><br><br><br>
					<img src="image/event44.jpg" height="450px" width="500px" class="event_image"></div>
				<div class="text_section"><br><br><br><br><br><br><br><br><br>
					<center><font face="helvatica" color="#1C6864" size="20px">Cliente Acuerdo</font></center>
					<font color="white"><br><br><br><center>
						What if the only weapon you had
						was a <br>computer and your mind? Will you
						be <br>able to stand your ground and defend all <br>
						 that has been tasked to you? 
						 <!--***************PHP CODE *******************-->
						 <?php
						 $result=$conn->query("select * from event where EID='E101'");
						 while($row=$result->fetch_array(MYSQLI_BOTH)){
						 echo "</center>";
						 echo "<br><h3><font color='#1C6864'>Event Id:&nbsp;&nbsp;</font>".$row['EID']."</h4>";
						 echo "<h3><font color='#1C6864'>Event Date:&nbsp;&nbsp;</font>".$row['DATE']."</h3>";
						 echo "<h3><font color='#1C6864'>Event Timing:&nbsp;&nbsp;</font>".$row['TIME']."</h3>";
						 echo "<h3><font color='#1C6864'>Event Venue:&nbsp;&nbsp;</font>".$row['VENUE']."</h3>";
						 }
						 ?>
						<form><input type="submit" value="REGISTER FOR THE EVENT" name="event11" class="register_button"></form>
					</div>
				<div class="image_section"  id="event5"><br><br><br><br><br><br><br><br>
					<img src="image/event45.jpg" height="450px" width="500px" class="event_image"></div>
				<div class="text_section"><br><br><br><br><br><br><br><br><br>
					<center><font face="helvatica" color="#1C6864" size="20px">Plan De Demarrage</font></center>
					<font color="white"><br><br><br><center>
						What if the only weapon you had
						was a <br>computer and your mind? Will you
						be <br>able to stand your ground and defend all <br>
						 that has been tasked to you? 
						 <!--***************PHP CODE *******************-->
						 <?php
						 $result=$conn->query("select * from event where EID='E101'");
						 while($row=$result->fetch_array(MYSQLI_BOTH)){
						 echo "</center>";
						 echo "<br><h3><font color='#1C6864'>Event Id:&nbsp;&nbsp;</font>".$row['EID']."</h4>";
						 echo "<h3><font color='#1C6864'>Event Date:&nbsp;&nbsp;</font>".$row['DATE']."</h3>";
						 echo "<h3><font color='#1C6864'>Event Timing:&nbsp;&nbsp;</font>".$row['TIME']."</h3>";
						 echo "<h3><font color='#1C6864'>Event Venue:&nbsp;&nbsp;</font>".$row['VENUE']."</h3>";
						 }
						 ?>
						<form><input type="submit" value="REGISTER FOR THE EVENT" name="event11" class="register_button"></form>
					</div>
			</div>
	</body>
</html>
