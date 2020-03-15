


<?php
                  $cname=$cid=$csection=$tid=$tname="";

                  $errcname=$errcid=$errcsection=$errtid=$errtname="";

                 
				 
				 if($_SERVER["REQUEST_METHOD"] == "POST"){
					 $cname = trim($_POST['cname']);
					 $cid= trim($_POST['cid']);
					 $tname= trim($_POST['tname']);
					 $csection=trim($_POST['csection']);
					 $tid=trim($_POST['tid']);
					 
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
					 
					  if(empty($tname)){                          // Validation for teacher name
						 $errtname="name cannot be empty";
					 }
					 
					 else if(strlen($tname)<3){
						 $errtname="Length of the name must be greater than 3";
					 }
					 
					 else{
						 $tname=$_POST['tname'];
					 }
					 
					 if(empty($tid)){                          // Validation for teacher id
						 $errtid="ID cannot be empty";
					 }
					 
					 else if(strlen($tid)<3){
						 $errtid="Length of the ID must be greater than 3";
					 }
					 
					 else{
						 $tid=$_POST['tid'];
					 }
					 
					 
					 
					 
					 
					 
                    if($errtid==null && $errcid==null){
				    $data8 =  $cname."|".$cid."|".$csection."|".$tname."|".$tid."\r\n";
                    $file8=fopen('AdmittedCourses.txt', 'a');
                    fwrite($file8, $data8);
                    fclose($file8);
					} 
				 }
				 
				 
				 
				 
				 
				 
				  

?>

                <DOCTYPE html>
				<head>
				       <title>Admit Courses For Teacher</title>
				</head>
				
				<body>
				<br/>
				<center>
				<img src="subject.jpg" width="100px" height="100px"/>
				</center>
				</br>
				
				
				
				
				
				
				<form action="AdmitCourse.php" method="POST">
				<center>
				
				<fieldset>
				
				<legend><b>Admit Courses For Teacher</b></legend>
				
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
				Teacher Name <br/>
                      <input type="text" name="tname" value="">
					  <span style="color:red;"><?php echo $errtname ?> </span>
                </td>					  
				</tr>
				<tr><td>
				Teacher ID <br/>
                      <input type="text" name="tid" value="">
					  <span style="color:red;"><?php echo $errtid ?> </span>
                </td>					  
				</tr>
				
				<tr>
			    <td>
			    
				<input type="submit" name="submit9" value="Admit Section">
				<a href='Home.php'>Go home</a>
				
				 
			 
			    </td>
			    </tr>
				
				
				</table>
				
				</center>
				
				</fieldset>
				
				</form>
				
				</body>
				
				
				</html>
				
				
               
				