<?php
	require('connection.php');
?>

<?php session_start();
?>

<html>
	<head><title>Sponsor Portal</title>
		 <link rel="stylesheet" href="Event.css">
		  <link rel="stylesheet" href="organiser.css">
	</head>
	<body ><div id="header"><br><br><a href="Home.html" ><button id="home_link">Home</button></a><center>
			<style>#home_link{text-decoration:none;background-color:#1C6864;
			color:white;
			margin-left:50px;float:left;}</style>
		<font face="helvatica" color="#1C6864" size="27px" id="center_text">Sponsor Portal</font></center>
		<a href="sponsor.php"><button id="event_back">Back</button></a>
			<div id="organiser_profile">
				<div class="myprofile_operation"><font color="white" size="10px">
				 <?php
     $result=$conn->query("select EID,E_NAME from event");
     $row=$result->num_rows;
     if($row>0)
	 {
		 echo "<table><tr><td><h1><font face='Arciform' size='5px' color='white'>EventId</font></td><td><h1><font face='Arciform' size='5px' color='white'>&nbsp;&nbsp;&nbsp;&nbsp;Ename</font></td></tr>";
		 while($row2=$result->fetch_array(MYSQLI_BOTH))
		 {
			 echo "<tr><td><font face='Arciform' size='4px' color='white'>".$row2['EID']."</font></td>";
			 echo "<td><font face='Arciform' size='4px' color='white'>&nbsp;&nbsp;&nbsp;&nbsp;".$row2['E_NAME']."</font></td></tr>";
		 }
		 echo "</table>";
	 }		 
  ?>
 
				</font></div>
					<form action="spo_check.php" method="post">
					<font face='Arciform' size='5px' color='white'> <h2> Choose Event :</h2></font></br>
					<input type="text" name="event" placeholder="Event ID" size="35" required="requred" class="reg_dec"></br>
					<input type="text" name="sp_id" placeholder="SPONSER ID" size="35" required="required" class="reg_dec"></br>
					  <input type="submit" name="submit" value="submit" class="sub_dec"></br>
					</form>

				</div>
				<style>.reg_dec{
					width:300px;
					height:30px;
					color:black;
					padding:2px;
					background-color:white;
					margin:3px;
					border-radius:5px;
					border-color:black;
				}
				.sub_dec{border-radius:3px;
				margin:3px;
				width:80px;
				height:25px;}
			</style>
			<?php 
			  if(isset($_POST['submit']))
			    {
				   $event=$_POST['event'];
				   $sp_id=$_POST['sp_id'];
				   $sql="insert into event_sp(EVENT,SP_ID) values('$event','$sp_id')";
				if(mysqli_query($conn,$sql))
				{
					echo  "<center><font face='Arciform' size='5px' color='white'>***successfully inserted***</font></center>";
				}
				else
				{
					echo "ERROR";
				}
				
			    }
				?>		
				</div>
				</body>
</html>
	
