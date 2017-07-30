<?php require('connection.php');
?>
<html>
<head>
</head>
<body background="image/event_background.jpg">
<div id="div2">
<a href="home.html"><img src="hellyeah/home.png" height="100" width="100"></a>
 <link rel="stylesheet" href="sponsor.css">
 <div id="abc1">
	
<style>
					.login{
						width:300px;
						height:30px;
						background-color:white;
						border-radius:10px;
						margin:5px;

						opacity:1;
						color:#000000;
						}
					.login_continue{background-color:black;
						border-radius:8px;width:80px;
						opacity:1;

						color:white;}
				</style>
				
				
					

				<br>
					<form id="form_decoration" action="sponsor.php" method="POST">
							
							<center><input type="text" name="name" placeholder="SPONSOR NAME" class="login" ><br>
							<input type="password" name="id" placeholder="SPONSOR ID" class="login" required="required"><br>
							<input type="submit" name="login" value="login" class="login_continue">
							<input type="reset" name="p" value="reset" class="login_continue"><br>
							<font size="5px" color="white"><a href="#sponsor">not a user? </a></font> <div id="arraw"><li><a href="#sponsor"><img src= "hellyeah/sign1.png" height="80px" width="80px"></button></a></li>
						</form>
<!-- *************LOG IN PHP*********************-->
					<?php
						if(isset($_POST['login'])){
							$name=$_POST['name'];
							$id=$_POST['id'];
							$result=$conn->query("select SP_NAME,SP_ID from sponsor");
							$row=$result->num_rows;
							
							if($row>0)
							{
								while($s=$result->fetch_array(MYSQLI_BOTH))
								{
						        	if($s['SP_NAME']==$name && $s['SP_ID']==$id)
						        	{
							    	session_start();
						     		header('location:sponsor_portal.php');
							        }
								}
							}
							else{
								echo "<font size='5px' color='red'>Wrong...id!...</font>";
							
							}
						}
					
					?>
					</center>
	</div>
	<center><div id="pic1"><img src="hellyeah/login.png" height="80px" width="270px"></div></center>
	
	</div>
	</div>

	     <style>
							  p.dashed {  border-style:dashed;  
								           border-color: white;
								           width:500px;
								           height:40px; 
                                           margin-top:-100px;                                  
								  }
	                              .boxed {
                                        
                                        width: 300px;
                                        height: 350px;
                                        border-radius:10px;
                                        border: 8px solid white;
                                        padding-bottom: 10px;
                                        margin-left: 550px;
                                       background-color:black;
                                       margin-top:-370px;
                                       float: left;
                                        
                                         } 
                                         .home
                                         {
											 text-decoration:none;
											 background-color:skyblue;
											 border-radius:7px;
											 }
                                   .login2
                                     {
										 margin-left:1000px;
										 float:right;
										 background-color:skyblue;
										 text-decoration:none;
										  border-radius:7px;
									 }    
                                 .input{
									          background-color:white;
	                                           height:23px;	
                                               border-radius:6px;											   
									 
							     	 }									 
                                       
                                     
                                         </style>
	
        
		<div id="sponsor">
	      <font face="Arciform" size="6px" color="white"><center><p class="dashed"> SPONSORS REGISTRATION</p></center></font>
	      	<a href="Home.html"><button class="home">HOME</button></a>
		 <a href="#div2"><button class="login2">LOGIN</button> </a>
	                      
	                    </br> <font face="Arciform" size="4px" color="white">current sponsors:</font></br></br>
	                                                 
	                                     <img src="image/LT.jpg" alt="not supported" height="55" width="100">&nbsp;
                                       <img src="image/microsoft.png" alt="not supported" height="55" width="70"> &nbsp;
                                        <img src="image/pnb.jpg" alt="not supported" height="55" width="70">&nbsp;
                                        <img src="image/Pepsi.png" alt="not supported" height="55" width="70">
                                        <img src="image/iocl.png" alt="not supported" height="55" width="70"></br>
                                           <?php
			      $result=$conn->query("select CITY,SP_NAME from sponsor");
				  $row=$result->num_rows;
				  if($row>0)
				    {
					  echo "<table><tr><td><h1><font face='Arciform' size='5px' color='white'>Sponsor Name</h1> </td><td><h1><font face='Arciform' size='5px' color='white'>&nbsp;&nbsp;CITY</h1></td></tr>";
					     while($row2=$result->fetch_array(MYSQLI_BOTH))
						   {
						    echo "<tr><td><font face='Arciform' size='4px' color='white'>".$row2['SP_NAME']."</td>";
							echo "<td><font face='Arciform' size='4px' color='white'>&nbsp;&nbsp;".$row2['CITY']."</td></tr>";
					       }
						   echo "</table>"; 
					}
               ?>
                                        
                         </div>        
                                        
    	<div class="boxed"><center><table> 
		<form action="sponsor.php" method="post">
			   <p> <font face="Arciform" size="5px" color="white">!!~!! Get Started !!~!!</font>  </p>
			<tr><td><input type="text" name="name" placeholder="NAME" size="40px" required="required" class="input">        </td></tr></br>
                <tr><td><input type="text" name="id" placeholder="ID" size="40px" required="required" class="input"></td></tr></br>
                <tr><td><input type="text" name="total_spo" placeholder="TOTAL SPONSORSHIP" size="40px" required="required" class="input"></td></tr></br>
                <tr><td><input type="email" name="email" placeholder="EMAIL" size="40px" required="required" class="input"></td></tr></br>
                <tr><td><input type="text" name="city" placeholder="CITY" size="40px" required="required" class="input"></td></tr></br>
                <tr><td><input type="text" name="contact" placeholder="CONTACT" size="40px" required="required" class="input"></td></tr></br>
               <tr><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="submit" value="Registration" class="input">&nbsp;&nbsp;&nbsp;<input type="reset" name="p" value="   Reset   " class="input"></td></tr>
</form>  
  </table> </center>
   
   </div>
   	<?php
         if(isset($_POST['submit']))
		 {
	    	 $id=$_POST['id'];
			 $name=$_POST['name'];
			 $contact=$_POST['contact'];
			 $email=$_POST['email'];
			 $total_spo=$_POST['total_spo'];
			 $city=$_POST['city'];
		     $sql="insert into sponsor(SP_ID,SP_NAME,CONTACT,EMAIL,TOTAL_SPON,CITY) values('$id','$name','$contact','$email','$total_spo','$city')";
			 if(mysqli_query($conn,$sql))
			 {
				 echo "<font color='white'>successfully inserted</font>";
			 }
			 else
			 {
				 echo "ERROR IN INSERTION";
			 }
		 }
   ?>
   
   
   	
</body>

</html>