


<?php
                  $pname=$pid=$ppwd=$pemail=$pdob=$pbldgrp=$pgender=$psalary=$poccup="";

                  $errpname=$errpid=$errppwd=$errpemail=$errpdob=$errpbldgrp=$errpgender=$errpsalary=$errpoccup="";

                 
				 
				 if($_SERVER["REQUEST_METHOD"] == "POST"){
					 $pname = trim($_POST['pname']);
					 $pid= trim($_POST['pid']);
					 $ppwd= trim($_POST['ppwd']);
					 $pemail=trim($_POST['pemail']);
					 
					 if(empty($pname)){                          // Validation for pname
						 $errpname="Your pname cannot be empty";
					 }
					 else if (!preg_match("/^[a-zA-Z ]*$/",$pname)) {   //for strarting the character with a letter (hint: taken from [1] w3schools)
                     $errpname = "Only letters and white space allowed";
                     }
					 else if(strlen($pname)<3){
						 $errpname="Length of the pname must be greater than 3";
					 }
					 
					 else{
						 $pname=$_POST['pname'];
					 }
					 
					 
					 if(empty($pid)){                    //Validation for pid
						 $errpid="Fill your ID!!!";
					 }
					 else if(strlen($pid)<4){
						 $errpid="ID cannot be less than 4 number";
					 }
					 else{
						 $pid=$_POST['pid'];
					 }
					 
					 
					 if(empty($ppwd)){                 //Validation for password
						 $errppwd="Fill your Password!!!";
					 }
					 else if(strlen($ppwd)<6){
						 $errppwd="Password must be more than 6 characters";
					 }
					 else{
						 $ppwd=$_POST['ppwd'];
					 }
					 
					 if(empty($pemail)){               // Validation for pemail
						 $errpemail="Email field cannot be empty";
					 }
					 
					 else if (!filter_var($pemail, FILTER_VALIDATE_EMAIL)){    //for proper pemail format (hint: taken from [2] w3schools)
						 $errpemail="Invalpid pemail format";
					 }
					 else{
						 $pemail=$_POST['pemail'];
					 }
					 
					 
					  if(empty($_POST['pdob'])){     // Validation for DOB
                    $errpdob = "What is ur DOB?!!!!";
                    }
                      else{
                        $pdob = $_POST['pdob'];
                      }
					 
					 
					 
					 if(empty($_POST['pgender'])){  // Validation for pgender
                    $errpgender = "What is ur pgender?!!!!";
                    }
                      else{
                        $pgender = $_POST['pgender'];
                      }
					  
					  if(empty($_POST['psalary'])){  // Validation for psalary
                    $errpsalary = "Please enter the psalary";
                    }
                      else{
                        $psalary = $_POST['psalary'];
                      }
					  
					  if(empty($_POST['blood_grp'])){ //Validation for blood group
						 $errpbldgrp="please give blood group";
					 }
					 else{
						 $pbldgrp=$_POST['blood_grp'];
					 }
					 if(empty($_POST['poccup'])){ //Validation for Occupation
						 $errpoccup="please select occupation";
					 }
					 else{
						 $poccup=$_POST['poccup'];
					 }
					 
					 
                    if($errpid==null && $errpname==null && $errppwd==null && $errpemail==null && $errpsalary==null){
				    $data5 =  $pid."|".$ppwd."|".$pname."|".$pemail."|".$pdob."|".$pgender."|".$pbldgrp."|".$poccup."\r\n";
                    $file5=fopen('Parents.txt', 'a');
                    fwrite($file5, $data5);
                    fclose($file5);
					} 
				 }
				 
				 
				 
				 
				 
				 
				  

?>

                <DOCTYPE html>
				<head>
				       <title>Parents Registration</title>
				</head>
				
				<body>
				<br/>
				<center>
				<img src="parents.jpg" wpidth="100px" height="100px"/>
				</center>
				</br>
				
				
				
				
				
				
				<form action="Parents.php" method="POST">
				<center>
				
				<fieldset>
				
				<legend><b>Parents Registration</b></legend>
				
				<table border=0>
				
				<tr>
				<td>
				Name <br/>
                      <input type="text" name="pname" value="">
					  <span style="color:red;"><?php echo $errpname ?> </span>
                </td>					  
				</tr>
				
				<tr>
				<td>
				Id <br/>
                      <input type="number" name="pid" value="">
					  <span style="color:red;"><?php echo $errpid ?> </span>
                </td>					  
				</tr>
				
				<tr>
				<td>
				Password <br/>
                      <input type="password" name="ppwd" value="">
					  <span style="color:red;"><?php echo $errppwd ?> </span>
					  
                </td>					  
				</tr>
				
				<tr>
				<td>
				Email <br/>
                      <input type="text" name="pemail" value="">
					  <span style="color:red;"> <?php echo $errpemail ?> </span>
					  
                </td>					  
				</tr>
				
				<tr>
				<td>
				Date of Birth <br/>
                      <input type="date" name="pdob" value="">
					  <span style="color:red;"> <?php echo $errpdob ?> </span>
					  
                </td>					  
				</tr>
				
				<tr>
			
			    <td>
				Blood Group <br/>
				       <select name="blood_grp">
					          <option value="" disabled selected>Select Blood Group</option>
					          <option value="a+">A+</option>
					          <option value="b+">B+</option>
					          <option value="o+">O+</option>
				       </select>
					   <span style="color:red;"> <?php echo $errpbldgrp ?> </span>
			    </td>
		        </tr>
				
				<tr>
			    <td>
			    Gender <br/>
				<input type="radio" name="pgender" value="male">Male
				<input type="radio" name="pgender" value="female">Female
				<input type="radio" name="pgender" value="others">Others
				<span style="color:red;"> <?php echo $errpgender ?> </span>
				
				</td>
				</tr>
				<tr>
				<td>
				
				Occupation <br/>
				       <select name="poccup">
					          <option value="" disabled selected>Select Occupation</option>
					          <option value="Medical Doctor">Medical Doctor</option>
					          <option value="Business">Business</option>
					          <option value="Engineer">Engineer</option>
							  <option value="Others">Others</option>
				       </select>
					   <span style="color:red;"> <?php echo $errpoccup ?> </span>
			    </td>
		        </tr>
				
			 
			    
			    
				
				<tr>
				<td>
				Salary <br/>
                      <input type="number" name="psalary" value="">
					  <span style="color:red;"> <?php echo $errpsalary ?> </span>
					  
                </td>					  
				</tr>
				
				
			    <tr>
			    <td>
			    
				<input type="submit" name="submit6" value="Register">
				<a href='Home.php'>Go Home</a>
				
				 
			 
			    </td>
			    </tr>
				
				</table>
				
				</center>
				
				</fieldset>
				
				</form>
				
				</body>
				
				
				</html>
				
				
               
				