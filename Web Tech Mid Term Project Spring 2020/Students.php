


<?php
                  $sname=$sid=$spwd=$semail=$sdob=$sclass=$sgender=$sdept=$sadress="";

                  $errsname=$errsid=$errspwd=$errsemail=$errsdob=$errsclass=$errsgender=$errsdept=$errsadress="";

                 
				 
				 if($_SERVER["REQUEST_METHOD"] == "POST"){
					 $sname = trim($_POST['sname']);
					 $sid= trim($_POST['sid']);
					 $spwd= trim($_POST['spwd']);
					 $semail=trim($_POST['semail']);
					 
					 if(empty($sname)){                          // Validation for name
						 $errsname="Your name cannot be empty";
					 }
					 else if (!preg_match("/^[a-zA-Z ]*$/",$sname)) {   //for strarting the character with a letter (hint: taken from [1] w3schools)
                     $errsname = "Only letters and white space allowed";
                     }
					 else if(strlen($sname)<3){
						 $errsname="Length of the name must be greater than 3";
					 }
					 
					 else{
						 $sname=$_POST['sname'];
					 }
					 
					 
					 if(empty($sid)){                    //Validation for id
						 $errsid="Fill your ID!!!";
					 }
					 else if(strlen($sid)<4){
						 $errsid="ID cannot be less than 4 number";
					 }
					 else{
						 $sid=$_POST['sid'];
					 }
					 
					 
					 if(empty($spwd)){                 //Validation for password
						 $errspwd="Fill your Password!!!";
					 }
					 else if(strlen($spwd)<6){
						 $errspwd="Password must be more than 6 characters";
					 }
					 else{
						 $spwd=$_POST['spwd'];
					 }
					 
					 if(empty($semail)){               // Validation for email
						 $errsemail="Email field cannot be empty";
					 }
					 
					 else if (!filter_var($semail, FILTER_VALIDATE_EMAIL)){    //for proper email format (hint: taken from [2] w3schools)
						 $erremail="Invalid email format";
					 }
					 else{
						 $semail=$_POST['semail'];
					 }
					 
					 
					  if(empty($_POST['sdob'])){     // Validation for DOB
                    $errsdob = "What is ur DOB?!!!!";
                    }
                      else{
                        $sdob = $_POST['sdob'];
                      }
					 
					 
					 
					 if(empty($_POST['sgender'])){  // Validation for gender
                    $errsgender = "What is ur gender?!!!!";
                    }
                      else{
                        $sgender = $_POST['sgender'];
                      }
					  
					  if(empty($_POST['sclass'])){  // Validation for class
                    $errsclass = "Fill the class";
                    }
                      else{
                        $sclass = $_POST['sclass'];
                      }
					  
					  if(empty($_POST['sdept'])){ //Validation for department
						 $errsdept="Which dept??!!";
					 }
					 else{
						 $sdept=$_POST['sdept'];
					 }
					 
					 if(empty($_POST['sadress'])){ //Validation for address
						 $errsadress="Fill the adress";
					 }
					 else{
						 $sadress=$_POST['sadress'];
					 }
					 
					 
                    if($errsid==null && $errsname==null && $errspwd==null && $errsemail==null && $errsclass==null){
				    $data1 =  $sid."|".$spwd."|".$sname."|".$semail."|".$sdob."|".$sgender."|".$sadress."|".$sdept."\r\n";
                    $file1=fopen('students.txt', 'a');
                    fwrite($file1, $data1);
                    fclose($file1);
					} 
				 }
				 
				 
				 
				 
				 
				 
				  

?>

                <DOCTYPE html>
				<head>
				       <title>Student Registration</title>
				</head>
				
				<body>
				<br/>
				<center>
				<img src="Student.png" width="100px" height="100px"/>
				</center>
				</br>
				
				
				
				
				
				
				<form action="Students.php" method="POST">
				<center>
				
				<fieldset>
				
				<legend><b>Student Registration</b></legend>
				
				<table border=0>
				
				<tr>
				<td>
				Student Name <br/>
                      <input type="text" name="sname" value="">
					  <span style="color:red;"><?php echo $errsname ?> </span>
                </td>					  
				</tr>
				
				<tr>
				<td>
				Id <br/>
                      <input type="number" name="sid" value="">
					  <span style="color:red;"><?php echo $errsid ?> </span>
                </td>					  
				</tr>
				
				<tr>
				<td>
				Password <br/>
                      <input type="password" name="spwd" value="">
					  <span style="color:red;"><?php echo $errspwd ?> </span>
					  
                </td>					  
				</tr>
				
				<tr>
				<td>
				Email <br/>
                      <input type="text" name="semail" value="">
					  <span style="color:red;"> <?php echo $errsemail ?> </span>
					  
                </td>					  
				</tr>
				
				<tr>
				<td>
				Date of Birth <br/>
                      <input type="date" name="sdob" value="">
					  <span style="color:red;"> <?php echo $errsdob ?> </span>
					  
                </td>					  
				</tr>
				
				<tr>
				<td>
				Department <br/>
				       <select name="sdept">
					          <option value="" disabled selected>Select Department</option>
					          <option value="cse">CSE</option>
					          <option value="eee">EEE</option>
					          <option value="eee">BBA</option>
				       </select>
					   <span style="color:red;"> <?php echo $errsdept?> </span>
			    </td>
		        </tr>
				
				
				
				<tr>
			    <td>
			    Gender <br/>
				<input type="radio" name="sgender" value="male">Male
				<input type="radio" name="sgender" value="female">Female
				<input type="radio" name="sgender" value="others">Others
				<span style="color:red;"> <?php echo $errsgender ?> </span>
				
				
			 
			    </td>
			    </tr>
				
				<tr>
				<td>
				Class <br/>
                      <input type="text" name="sclass" value="">
					  <span style="color:red;"> <?php echo $errsclass ?> </span>
					  
                </td>					  
				</tr>
				
				<tr>
				<td>
				Address <br/>
                      <input type="text" name="sadress" value="">
					  <span style="color:red;"> <?php echo $errsadress ?> </span>
					  
                </td>					  
				</tr>
				
				
			    <tr>
			    <td>
			    
				<input type="submit" name="submit2" value="Register">
				<a href='Home.php'>Go Home</a>
				
				 
			 
			    </td>
			    </tr>
				
				</table>
				
				</center>
				
				</fieldset>
				
				</form>
				
				</body>
				
				
				</html>
				
				
               
				