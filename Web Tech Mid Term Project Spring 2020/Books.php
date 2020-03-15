


<?php
                  $bname=$bid=$bauthor="";

                  $errbname=$errbid=$errbauthor="";

                 
				 
				 if($_SERVER["REQUEST_METHOD"] == "POST"){
					 $bname = trim($_POST['bname']);
					 $bid= trim($_POST['bid']);
					 
					 $bauthor=trim($_POST['bauthor']);
					 
					 if(empty($bname)){                          // Validation for book name
						 $errbname="Book name cannot be empty";
					 }
					 else if (!preg_match("/^[a-zA-Z ]*$/",$bname)) {   //for strarting the character with a letter (hint: taken from [1] w3schools)
                     $errbname = "Only letters and white space allowed";
                     }
					 else if(strlen($bname)<3){
						 $errbname="Length of the name must be greater than 3";
					 }
					 
					 else{
						 $bname=$_POST['bname'];
					 }
					 
					 if(empty($bauthor)){                          // Validation for book author name
						 $errbauthor="Author name cannot be empty";
					 }
					 else if (!preg_match("/^[a-zA-Z ]*$/",$bauthor)) {   //for strarting the character with a letter (hint: taken from [1] w3schools)
                     $errbauthor = "Only letters and white space allowed";
                     }
					 else if(strlen($bauthor)<3){
						 $errbauthor="Length of the name must be greater than 3";
					 }
					 
					 else{
						 $bauthor=$_POST['bauthor'];
					 }
					 
					 
					 if(empty($bid)){                    //Validation for book id
						 $errbid="Fill your ID!!!";
					 }
					 else if(strlen($bid)<4){
						 $errid="ID cannot be less than 4 number";
					 }
					 else{
						 $bid=$_POST['bid'];
					 }
					 
					 
					 
					 
					 
					 
					 
                    if($errbid==null && $errbname==null && $errbauthor==null ) {
				    $data2 =  $bname."|".$bid."|".$bauthor."\r\n";
                    $file2=fopen('books.txt', 'a');
                    fwrite($file2, $data2);
                    fclose($file2);
					echo "Book Register Successfull plz check txt file";
					} 
				 }
				 
				 
				 
				 
				 
				 
				  

?>

                <DOCTYPE html>
				<head>
				       <title>Books Registration</title>
				</head>
				
				<body>
				<br/>
				<center>
				<img src="book.jpg" width="100px" height="100px"/>
				</center>
				</br>
				
				
				
				
				
				
				<form action="Books.php" method="POST">
				<center>
				
				<fieldset>
				
				<legend><b>Book Registration</b></legend>
				
				<table border=0>
				
				<tr>
				<td>
				Book Name<br/>
                      <input type="text" name="bname" value="">
					  <span style="color:red;"><?php echo $errbname ?> </span>
                </td>					  
				</tr>
				
				<tr>
				<td>
				 Book Id <br/>
                      <input type="number" name="bid" value="">
					  <span style="color:red;"><?php echo $errbid ?> </span>
                </td>					  
				</tr>
				<tr>
				<td>
				Book Author <br/>
                      <input type="text" name="bauthor" value="">
					  <span style="color:red;"><?php echo $errbauthor ?> </span>
                </td>					  
				</tr>
				
				<tr>
			    <td>
			    
				<input type="submit" name="submit3" value="Register">
				<a href='Home.php'>Go Home</a>
				
				 
			 
			    </td>
			    </tr>
				
				
				</table>
				
				</center>
				
				</fieldset>
				
				</form>
				
				</body>
				
				
				</html>
				
				
               
				