<?php
	require('connection.php');
?>

<html>
	<head><title>Event Page </title>
		 <link rel="stylesheet" href="Event.css">
	</head>
	<body ><div id="header"><br><br><a href="Home.html" ><button id="home_link">Home</button>
		</a><center>
		<font face="helvatica" color="#1C6864" size="27px" id="center_text">Gaming Events</font></center>
		<a href="Home.html#events"><button id="event_back">Events</button></a>
			<ul>
			  <li><a href="#"><button class="btn">Counter Strike</button></a></li>
			  <li><a href="#event2"><button class="btn">Need for Speed</button></a></li>
			  <li><a href="#event3"><button class="btn">Rompecabezas </button></a></li>
			  <li><a href="#event4"><button class="btn">Tomb Raider</button></a></li>
			  <li><a href="#event5"><button class="btn">Star Craft</button></button></a></li>
			</ul></div><br><br><br>
			<div id="main_section"><br><br>
				<div class="image_section" >
					<img src="image/event31.jpeg" height="450px" width="500px" class="event_image"></div>
				<div class="text_section">
					<center><font face="helvatica" color="#1C6864" size="20px">Counter Strike</font></center>
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
				<div class="image_section" id="event2"><br><br><br><br><br><br><br><br><br><br>
					<img src="image/event32.jpg" height="450px" width="500px" class="event_image"></div>
				<div class="text_section"><br><br><br><br><br><br><br><br><br><br>
					<center><font face="helvatica" color="#1C6864" size="20px">Need for Speed</font></center>
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
						<form><input type="submit" value="REGISTER FOR THE EVENT" name="event11" class="register_button"></form></div>
				<div class="image_section"  id="event3"><br><br><br><br><br><br><br><br><br><br>
					<img src="image/event33.jpg" height="450px" width="500px" class="event_image"></div>
				<div class="text_section"><br><br><br><br><br><br><br><br><br><br>
					<center><font face="helvatica" color="#1C6864" size="20px">Rompecabezas</font></center>
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
						<form><input type="submit" value="REGISTER FOR THE EVENT" name="event11" class="register_button"></form></div>
				<div class="image_section"  id="event4"><br><br><br><br><br><br><br><br><br>
					<img src="image/event34.jpeg" height="450px" width="500px" class="event_image"></div>
				<div class="text_section"><br><br><br><br><br><br><br><br><br>
					<center><font face="helvatica" color="#1C6864" size="20px">Tomb Raider</font></center>
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
						<form><input type="submit" value="REGISTER FOR THE EVENT" name="event11" class="register_button"></form></div>
				<div class="image_section"  id="event5"><br><br><br><br><br><br><br><br><br>
					<img src="image/event35.png" height="450px" width="500px" class="event_image"></div>
				<div class="text_section"><br><br><br><br><br><br><br><br>
					<center><font face="helvatica" color="#1C6864" size="20px">Star Craft</font></center>
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
						<form><input type="submit" value="REGISTER FOR THE EVENT" name="event11" class="register_button"></form></div>
			</div>
	</body>
</html>
