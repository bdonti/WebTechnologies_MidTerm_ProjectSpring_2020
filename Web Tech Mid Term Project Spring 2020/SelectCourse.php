


<?php
                  $cname=$cid=$csection=$sid=$sname="";

                  $errcname=$errcid=$errcsection=$errsid=$errsname="";

                 
				 
				 if($_SERVER["REQUEST_METHOD"] == "POST"){
					 $cname = trim($_POST['cname']);
					 $cid= trim($_POST['cid']);
					 $sname= trim($_POST['sname']);
					 $csection=trim($_POST['csection']);
					 $sid=trim($_POST['sid']);
					 
					 if(empty($cname)){                          // Validation for course name
						 $errcname="name cannot be empty";
					 }
					 
					 else if(strlen($cname)<3){
						 $errcname="Length of the name must be greater than 3";
					 }
					 
					 else{
						 $cname=$_POST['cname'];
					 }
					 
					 
					 if(empty($cid)){                          // Validation for course id
						 $errcid="ID cannot be empty";
					 }
					 
					 else if(strlen($cid)<3){
						 $errcid="Length of the ID must be greater than 3";
					 }
					 
					 else{
						 $cid=$_POST['cid'];
					 }
					 
					 
					 if(empty($csection)){                          // Validation for course section
						 $errcsection="Please Select Section!!!!";
					 }
					 
					 else if(strlen($csection)<0){
						 $errcsection="Invalid Section";
					 }
					 
					 else{
						 $csection=$_POST['csection'];
					 }
					 
					  if(empty($sname)){                          // Validation for student name
						 $errsname="name cannot be empty";
					 }
					 
					 else if(strlen($sname)<3){
						 $errsname="Length of the name must be greater than 3";
					 }
					 
					 else{
						 $sname=$_POST['sname'];
					 }
					 
					 if(empty($sid)){                          // Validation for student id
						 $errsid="ID cannot be empty";
					 }
					 
					 else if(strlen($sid)<3){
						 $errsid="Length of the ID must be greater than 3";
					 }
					 
					 else{
						 $sid=$_POST['sid'];
					 }
					 
					 
					 
					 
					 
					 
                    if($errsid==null && $errcid==null){
				    $data7 =  $cname."|".$cid."|".$csection."|".$sname."|".$sid."\r\n";
                    $file7=fopen('RegisteredCourses.txt', 'a');
                    fwrite($file7, $data7);
                    fclose($file7);
					} 
				 }
				 
				 
				 
				 
				 
				 
				  

?>

                <DOCTYPE html>
				<head>
				       <title>Register Student Courses</title>
				</head>
				
				<body>
				<br/>
				<center>
				<img src="subject.jpg" width="100px" height="100px"/>
				</center>
				</br>
				
				
				
				
				
				
				<form action="SelectCourse.php" method="POST">
				<center>
				
				<fieldset>
				
				<legend><b>Register Student Courses</b></legend>
				
				<table border=0>
				
				<tr>
				<td>
				Course Name <br/>
                      <input type="text" name="cname" value="">
					  <span style="color:red;"><?php echo $errcname ?> </span>
                </td>					  
				</tr>
				
				<tr>
				<td>
				Course ID <br/>
                      <input type="text" name="cid" value="">
					  <span style="color:red;"><?php echo $errcid ?> </span>
                </td>					  
				</tr>
				
				<tr>
				<td>
				Course Section <br/>
                      <input type="text" name="csection" value="">
					  <span style="color:red;"><?php echo $errcsection ?> </span>
                </td>					  
				</tr>
				
				<tr>
				<td>
				Student Name <br/>
                      <input type="text" name="sname" value="">
					  <span style="color:red;"><?php echo $errsname ?> </span>
                </td>					  
				</tr>
				<tr><td>
				Student ID <br/>
                      <input type="text" name="sid" value="">
					  <span style="color:red;"><?php echo $errsid ?> </span>
                </td>					  
				</tr>
				
				<tr>
			    <td>
			    
				<input type="submit" name="submit8" value="Register Course">
				<a href='Home.php'>Go home</a>
				
				 
			 
			    </td>
			    </tr>
				
				
				</table>
				
				</center>
				
				</fieldset>
				
				</form>
				
				</body>
				
				
				</html>
				
				
               
				