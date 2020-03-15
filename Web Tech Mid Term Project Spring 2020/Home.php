<?php	
	session_start();
	if(!isset($_SESSION['id'])){  
		header("location: Login.php");
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
</head>
<body>
<br/>
<br/>
<br/> 
<br/>
<br/>
   <center>
       <table border=1>
	    <tr> 
		<td colspan=2><center><img src="filesantipur-bed-college-logopng-wikimedia-commons-college-logo-png-2400_1800.png" width="110px" height="110px"/> </center>
		          <center><b>Welcome to Admin Panel!! <br/> <?= $_SESSION['name']?></b></center>
				  </td>
		
		</tr>
		
		<tr>
		       <td valign="top" width=200><br/><center><b>Menu</b></center>
			            
						
						<ul>
						   <li><a href='ManipulateAdmin.php'>Manipulate <?= $_SESSION['name']?>'s Info</a></li>
                           <li><a href='Students.php'>Register Students</a></li>
						   <li><a href='Parents.php'>Register Parents</a></li>
                           <li><a href='Teachers.php'>Register Teachers</a></li>
                           <li><a href='Users.php'>User Details</a></li>
						   <li><a href='Courses.php'>Offered Courses</a></li>
						   <li><a href='SelectCourse.php'>Register Courses for Students</a></li>
						   <li><a href='AdmitCourse.php'>Admit Courses for Teachers</a></li>
						   <li><a href='Complain.php'>Complains from Users</a></li>
						   <li><a href='Books.php'>Register Books</a></li>
						   <li><a href='Schedule.php'>Prepare Exam Schedule</a></li>
						   <li><a href='About.php'>About us</a></li>
						   <li><a href='ManipulateUser.php'>Manipulate User Info</a></li>
						   <li><a href='Admission.php'>Student Admission Info</a></li>
						   <li><a href='Events.php'>Upcoming Events</a></li>
						   <li><a href='Logout.php'>Sign out</a></li>
						   
						   
						   
						 
						   
						 
						  
						  
						  
                       </ul>
					   
			   </td>
			   
		
		
		
		<td width=600>
		      <img src="AiubPermanentCampus_6.jpg" width="600px" height="400px"/>
		</td>
		</tr>
		
		
		
	   
	   </table>
		</center>
</body>
</html>