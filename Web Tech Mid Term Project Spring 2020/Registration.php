


<?php
                  $name=$id=$pwd=$email=$dob=$bldgrp=$gender=$salary="";

                  $errname=$errid=$errpwd=$erremail=$errdob=$errbldgrp=$errgender=$errsalary="";

                 
				 
				 if($_SERVER["REQUEST_METHOD"] == "POST"){
					 $name = trim($_POST['name']);
					 $id= trim($_POST['id']);
					 $pwd= trim($_POST['pwd']);
					 $email=trim($_POST['email']);
					 
					 if(empty($name)){                          // Validation for name
						 $errname="Your name cannot be empty";
					 }
					 else if (!preg_match("/^[a-zA-Z ]*$/",$name)) {   //for strarting the character with a letter (hint: taken from [1] w3schools)
                     $errname = "Only letters and white space allowed";
                     }
					 else if(strlen($name)<3){
						 $errname="Length of the name must be greater than 3";
					 }
					 
					 else{
						 $name=$_POST['name'];
					 }
					 
					 
					 if(empty($id)){                    //Validation for id
						 $errid="Fill your ID!!!";
					 }
					 else if(strlen($id)<4){
						 $errid="ID cannot be less than 4 number";
					 }
					 else{
						 $id=$_POST['id'];
					 }
					 
					 
					 if(empty($pwd)){                 //Validation for password
						 $errpwd="Fill your Password!!!";
					 }
					 else if(strlen($pwd)<6){
						 $errpwd="Password must be more than 6 characters";
					 }
					 else{
						 $pwd=$_POST['pwd'];
					 }
					 
					 if(empty($email)){               // Validation for email
						 $erremail="Email field cannot be empty";
					 }
					 
					 else if (!filter_var($email, FILTER_VALIDATE_EMAIL)){    //for proper email format (hint: taken from [2] w3schools)
						 $erremail="Invalid email format";
					 }
					 else{
						 $email=$_POST['email'];
					 }
					 
					 
					  if(empty($_POST['dob'])){     // Validation for DOB
                    $errdob = "What is ur DOB?!!!!";
                    }
                      else{
                        $dob = $_POST['dob'];
                      }
					 
					 
					 
					 if(empty($_POST['gender'])){  // Validation for gender
                    $errgender = "What is ur gender?!!!!";
                    }
                      else{
                        $gender = $_POST['gender'];
                      }
					  
					  if(empty($_POST['salary'])){  // Validation for salary
                    $errsalary = "Please enter the salary";
                    }
                      else{
                        $salary = $_POST['salary'];
                      }
					  
					  if(empty($_POST['blood_grp'])){ //Validation for blood group
						 $errbldgrp="please give blood group";
					 }
					 else{
						 $bldgrp=$_POST['blood_grp'];
					 }
					 
					 
                    if($errid==null && $errname==null && $errpwd==null && $erremail==null && $errsalary==null){
				    $data =  $id."|".$pwd."|".$name."|".$email."|".$dob."|".$gender."|".$bldgrp."\r\n";
                    $file=fopen('admin.txt', 'a');
                    fwrite($file, $data);
                    fclose($file);
					} 
				 }
				 
				 
				 
				 
				 
				 
				  

?>

                <DOCTYPE html>
				<head>
				       <title>Admin Registration</title>
				</head>
				
				<body>
				<br/>
				<center>
				<img src="new-account-icon-256x256.png" width="100px" height="100px"/>
				</center>
				</br>
				
				
				
				
				
				
				<form action="Registration.php" method="POST">
				<center>
				
				<fieldset>
				
				<legend><b>Admin Registration</b></legend>
				
				<table border=0>
				
				<tr>
				<td>
				Name <br/>
                      <input type="text" name="name" value="">
					  <span style="color:red;"><?php echo $errname ?> </span>
                </td>					  
				</tr>
				
				<tr>
				<td>
				Id <br/>
                      <input type="number" name="id" value="">
					  <span style="color:red;"><?php echo $errid ?> </span>
                </td>					  
				</tr>
				
				<tr>
				<td>
				Password <br/>
                      <input type="password" name="pwd" value="">
					  <span style="color:red;"><?php echo $errpwd ?> </span>
					  
                </td>					  
				</tr>
				
				<tr>
				<td>
				Email <br/>
                      <input type="text" name="email" value="">
					  <span style="color:red;"> <?php echo $erremail ?> </span>
					  
                </td>					  
				</tr>
				
				<tr>
				<td>
				Date of Birth <br/>
                      <input type="date" name="dob" value="">
					  <span style="color:red;"> <?php echo $errdob ?> </span>
					  
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
					   <span style="color:red;"> <?php echo $errbldgrp ?> </span>
			    </td>
		        </tr>
				
				<tr>
			    <td>
			    Gender <br/>
				<input type="radio" name="gender" value="male">Male
				<input type="radio" name="gender" value="female">Female
				<input type="radio" name="gender" value="others">Others
				<span style="color:red;"> <?php echo $errgender ?> </span>
				
				
			 
			    </td>
			    </tr>
				
				<tr>
				<td>
				Salary <br/>
                      <input type="number" name="salary" value="">
					  <span style="color:red;"> <?php echo $errsalary ?> </span>
					  
                </td>					  
				</tr>
				
				
			    <tr>
			    <td>
			    
				<input type="submit" name="submit" value="Sign Up">
				<a href='Login.php'>Sign in</a>
				
				 
			 
			    </td>
			    </tr>
				
				</table>
				
				</center>
				
				</fieldset>
				
				</form>
				
				</body>
				
				
				</html>
				
				
               
				