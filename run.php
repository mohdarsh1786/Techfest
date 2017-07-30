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
			 echo "<tr><td><h1><font face='Arciform' size='5px' color='white'>".$row2['EID']."</font></td>";
			 echo "<td><h1><font face='Arciform' size='5px' color='white'>&nbsp;&nbsp;&nbsp;&nbsp;".$row2['E_NAME']."</font></td></tr>";
		 }
		 echo "</table>";
	 }		 
  ?>
 
				</font></div>
				<div class="myprofile_operation"><font color="white" size="10px">
				<?php 
				        echo "<h1><font face='Arciform' size='5px' color='white'>SPONSORSHIP:</br>";
				       $result=$conn->query("select TOTAL_SPON from sponsor where SP_ID='123456'");
					   $row=$result->fetch_array(MYSQLI_BOTH);
				for($i=0;$i<$row['TOTAL_SPON'];$i++) {
					?>
					<form action="sponsor_portal.php" method="post">
					
					<input type="text" name="event" placeholder="Event" >
					<input type="text" name="sp_id" placeholder="SPONSER ID" >
									<?php } ?>
				<input type="submit" name="submit" value="submit"></br>
					</form>
</div>
				</font> </div>
			</div>
			<?php 
			  if(isset($_POST['submit']))
			    {
				   $event=$_POST['event'];
				   $sp_id=$_POST['sp_id'];
				   $sql="insert into event_sp(EVENT,SP_ID) values('$event','$sp_id')";
				if(mysqli_query($conn,$sql))
				{
					echo "successfully inserted";
				}
				else
				{
					echo "ERROR";
				}
				
			    }
				?>		
				</body>
</html>
	
