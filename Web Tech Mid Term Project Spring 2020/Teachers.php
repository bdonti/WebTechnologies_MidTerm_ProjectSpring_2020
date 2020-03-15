


<?php
                  $tname=$tid=$tpwd=$temail=$tdob=$tbldgrp=$tgender=$tsalary=$tmarry=$tdept="";

                  $errtname=$errtid=$errtpwd=$errtemail=$errtdob=$errtbldgrp=$errtgender=$errtsalary=$errtmarry=$errtdept="";

                 
				 
				 if($_SERVER["REQUEST_METHOD"] == "POST"){
					 $tname = trim($_POST['tname']);
					 $tid= trim($_POST['tid']);
					 $tpwd= trim($_POST['tpwd']);
					 $temail=trim($_POST['temail']);
					 
					 if(empty($tname)){                          // Valtidation for tname
						 $errtname="Your tname cannot be empty";
					 }
					 else if (!preg_match("/^[a-zA-Z ]*$/",$tname)) {   //for strarting the character with a letter (hint: taken from [1] w3schools)
                     $errtname = "Only letters and white space allowed";
                     }
					 else if(strlen($tname)<3){
						 $errtname="Length of the tname must be greater than 3";
					 }
					 
					 else{
						 $tname=$_POST['tname'];
					 }
					 
					 
					 if(empty($tid)){                    //Valtidation for tid
						 $errtid="Fill your ID!!!";
					 }
					 else if(strlen($tid)<4){
						 $errtid="ID cannot be less than 4 number";
					 }
					 else{
						 $tid=$_POST['tid'];
					 }
					 
					 
					 if(empty($tpwd)){                 //Valtidation for password
						 $errtpwd="Fill your Password!!!";
					 }
					 else if(strlen($tpwd)<6){
						 $errtpwd="Password must be more than 6 characters";
					 }
					 else{
						 $tpwd=$_POST['tpwd'];
					 }
					 
					 if(empty($temail)){               // Valtidation for temail
						 $errtemail="Email field cannot be empty";
					 }
					 
					 else if (!filter_var($temail, FILTER_VALIDATE_EMAIL)){    //for proper temail format (hint: taken from [2] w3schools)
						 $errtemail="Invaltid temail format";
					 }
					 else{
						 $temail=$_POST['temail'];
					 }
					 
					 
					  if(empty($_POST['tdob'])){     // Valtidation for DOB
                    $errtdob = "What is ur DOB?!!!!";
                    }
                      else{
                        $tdob = $_POST['tdob'];
                      }
					 
					 
					 
					 if(empty($_POST['tgender'])){  // Valtidation for tgender
                    $errtgender = "What is ur tgender?!!!!";
                    }
                      else{
                        $tgender = $_POST['tgender'];
                      }
					  
					  if(empty($_POST['tsalary'])){  // Valtidation for tsalary
                    $errtsalary = "Please enter the tsalary";
                    }
                      else{
                        $tsalary = $_POST['tsalary'];
                      }
					  
					  if(empty($_POST['Blood'])){ //Valtidation for blood group
						 $errtbldgrp="please give blood group";
					 }
					 else{
						 $tbldgrp=$_POST['Blood'];
					 }
					 
					 
					  if(empty($_POST['dept'])){     // Valtidation for Dept
                    $errtdept = "What is ur DEPT?!!!!";
                    }
                      else{
                        $tdept = $_POST['dept'];
                      }
					  
					  if(empty($_POST['tmarry'])){  // Valtidation for marry
                    $errtmarry = "Please fill the field";
                    }
                      else{
                        $tmarry = $_POST['tmarry'];
                      }
					 
					 
                    if($errtid==null && $errtname==null && $errtpwd==null && $errtemail==null && $errtsalary==null){
				    $data4 =  $tid."|".$tpwd."|".$tname."|".$temail."|".$tdob."|".$tgender."|".$tbldgrp."|".$tdept."|".$tmarry."\r\n";
                    $file4=fopen('teacher.txt', 'a');
                    fwrite($file4, $data4);
                    fclose($file4);
					} 
				 }
				 
				 
				 
				 
				 
				 
				  

?>

                <DOCTYPE html>
				<head>
				       <title>Teacher Registration</title>
				</head>
				
				<body>
				<br/>
				<center>
				<img src="teacher.png" wtidth="100px" height="100px"/>
				</center>
				</br>
				
				
				
				
				
				
				<form action="Teachers.php" method="POST">
				<center>
				
				<fieldset>
				
				<legend><b>Teacher Registration</b></legend>
				
				<table border=0>
				
				<tr>
				<td>
				Teacher Name <br/>
                      <input type="text" name="tname" value="">
					  <span style="color:red;"><?php echo $errtname ?> </span>
                </td>					  
				</tr>
				
				<tr>
				<td>
				Teacher Id <br/>
                      <input type="number" name="tid" value="">
					  <span style="color:red;"><?php echo $errtid ?> </span>
                </td>					  
				</tr>
				
				<tr>
				<td>
				Password <br/>
                      <input type="password" name="tpwd" value="">
					  <span style="color:red;"><?php echo $errtpwd ?> </span>
					  
                </td>					  
				</tr>
				
				<tr>
				<td>
				Email <br/>
                      <input type="text" name="temail" value="">
					  <span style="color:red;"> <?php echo $errtemail ?> </span>
					  
                </td>					  
				</tr>
				
				<tr>
				<td>
				Date of Birth <br/>
                      <input type="date" name="tdob" value="">
					  <span style="color:red;"> <?php echo $errtdob ?> </span>
					  
                </td>					  
				</tr>
				
				<tr>
			
			    <td>
				Blood Group <br/>
				       <select name="Blood">
					          <option value="" disabled selected>Select Blood Group</option>
					          <option value="a+">A+</option>
					          <option value="b+">B+</option>
					          <option value="o+">O+</option>
							  
				       </select>
					   <span style="color:red;"> <?php echo $errtbldgrp ?> </span>
					   
			    </td>
		        </tr>
				
				<tr>
			    <td>
			    Gender <br/>
				<input type="radio" name="tgender" value="male">Male
				<input type="radio" name="tgender" value="female">Female
				<input type="radio" name="tgender" value="others">Others
				<span style="color:red;"> <?php echo $errtgender ?> </span>
				
				
			 
			    </td>
			    </tr>
				
				<tr>
				<td>
				Salary <br/>
                      <input type="number" name="tsalary" value="">
					  <span style="color:red;"> <?php echo $errtsalary ?> </span>
					  
                </td>					  
				</tr>
				<tr>
				<td>
				Department <br/>
				       <select name="dept">
					          <option value="" disabled selected>Select Department</option>
					          <option value="cse">CSE</option>
					          <option value="eee">EEE</option>
					          <option value="eee">BBA</option>
				       </select>
					   <span style="color:red;"> <?php echo $errtdept?> </span>
			    </td>
		        </tr>
				
				<tr>
			    <td>
			    Married Status <br/>
				<input type="radio" name="tmarry" value="Married">Married
				<input type="radio" name="tmarry" value="Not Married">Not Married
				
				<span style="color:red;"> <?php echo $errtmarry ?> </span>
				
				
			 
			    </td>
			    </tr>
				
				
			    <tr>
			    <td>
			    
				<input type="submit" name="submit5" value="Register">
				<a href='Home.php'>Go Home</a>
				
				 
			 
			    </td>
			    </tr>
				
				</table>
				
				</center>
				
				</fieldset>
				
				</form>
				
				</body>
				
				
				</html>
				
				
               
				