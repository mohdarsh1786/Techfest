<?php
	require('connection.php');
?>

<?php session_start();
?>

<html>
	<head><title>Organiser Portal</title>
		 <link rel="stylesheet" href="Event.css">
		  <link rel="stylesheet" href="organiser.css">
	</head>
	<body ><div id="header"><br><br><a href="Home.html" ><button id="home_link">Home</button></a><center>
			<style>#home_link{text-decoration:none;background-color:#1C6864;
			color:white;
			margin-left:50px;float:left;}</style>
		<font face="helvatica" color="#1C6864" size="27px" id="center_text">Organiser Portal</font></center>
		<a href="organiser.php"><button id="event_back">Back</button></a>
			<ul>
			   <li><form action="organiser_portal.php" method="post"><input type="submit" value="Profile" name="profile" class="btn"></li>
			  <li><form action="organiser_portal.php" method="post"><input type="submit" value="Event" name="event" class="btn"></li>
			  <li><form action="organiser_portal.php" method="post"><input type="submit" name="sponsor" value="Sponsor" class="btn"></li>
			  <li><form action="organiser_portal.php" method="post"><input type="submit" name="team" value="Team" class="btn"></li>
			</ul></div><br><br><br><?php if(isset($_POST['event'])){ ?>
			<div id="organiser_event">
				<div class="event_operation">
					<center>
						<font color="white" size="6px" >Add Event</font><br><br>
							<form action="organiser_portal.php" method="post">
								<input type="text" placeholder="Eevent Id" name="eid" class="form_decoration"><br>
								<input type="text" placeholder="Eevent Name" name="ename" class="form_decoration"><br>
								<input type="text" placeholder="Eevent Category" name="category" class="form_decoration"><br>
								<input type="text" placeholder="Venue" name="venue" class="form_decoration"><br>
								<input type="date" placeholder="Eevent Date" name="date" class="form_decoration"><br>
								<input type="time" placeholder="Eevent time" name="time" class="form_decoration"><br>
								<input type="submit" value="Add Eevent" name="add_event" id="submit"><br>
							</form>
					</center>
				</div>
				<div class="event_operation">
					<center>
						<font color="white" size="6px">Reschedule Event</font><br><br>
							<form action="organiser_portal.php" method="post">
								<input type="text" placeholder="Eevent Id" name="eid" class="form_decoration"><br>
								<input type="text" placeholder="Venue" name="venue" class="form_decoration"><br>
								<input type="date" placeholder="Eevent Date" name="date" class="form_decoration"><br>
								<input type="time" placeholder="Eevent time" name="time" class="form_decoration"><br>
								<input type="submit" value="Reschedule" name="reschedule" id="submit"><br>
						    </form>
					</center>
				</div>
				<div class="event_operation">
					<center>
						<font color="white" size="6px">Delete Event</font><br><br>
							<form action="organiser_portal.php" method="post">
								<input type="text" placeholder="Eevent Id" name="eid" class="form_decoration"><br>
								<input type="submit" value="Remove" name="delete_event" id="submit"><br>
						    </form>
					</center>
				</div>
			</div >
			
			<?php } 
			else if(isset($_POST['sponsor'])){ ?>
			
			
			<div id="organiser_sponsor"><br><br><br><br><br>
				<div class="sponsor_operation">
					<center>
						<font color="white" size="6px">Display Sponsor</font><br><br>
							<form action="organiser_portal.php" method="post" >
								<input type="text" placeholder="Sponsor Id" name="sid" class="form_decoration"><br>
								<input type="submit" value="Display" name="display" id="submit"><br>
						    </form>
					</center>
				
				</div>
				<div class="sponsor_operation"></div>
					
				<div class="sponsor_operation">
					<center>
						<font color="white" size="6px">Top 3 Sponsors</font><br><br>
					</center>
				</div>
			</div>
			
			<?php }
			 else if(isset($_POST['team'])){ ?>
			
			
			<div id="organiser_team">
				<div class="team_operation"></div>
				<div class="team_operation"></div>
				<div class="team_operation"></div>
			</div>
			
			<?php }else{?>
				
				<?php 
					$result=$conn->query("select * from organiser where ORG_ID=$_SESSION['id']");
					$row=$result->fetch_array(MYSQLI_BOTH); ?>
			<div id="organiser_profile">
				<div class="myprofile_operation"><font color="white" size="10px">Hello</font></div>
				<div class="myprofile_operation"><font color="white" size="10px">Hello <?php echo $row['ORG_NAME'];?></font> </div>
			</div>
			<?php }?>
	</body>
</html>
