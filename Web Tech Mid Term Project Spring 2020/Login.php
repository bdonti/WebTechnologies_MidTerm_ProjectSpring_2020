
<?php
	session_start();
?>

  <!DOCTYPE html>
					
					                 <head>
	           <title>Login</title>
	         </head>
			 
			 <body>
			 
			 <form action="Logcheck.php" method="post">
			 <br/>
			 <br/>
			 <center> <img src="unnamed.png" width="100px" height="100px"/> </center>
			 <br/>
			 <br/>
			 
			 <center>
			
		
			 <fieldset>
			 <legend><b> Login</b></legend>
			 
			 
			 <table border="0">
			 
			 
			 
			 <tr>
			      <td>
				  User ID <br/>
				  <input type="number" name="id" value="">
				  
                  
	            
				  
				  
				  </td>
			 
			 
			 </tr>
			 <tr>
			 <td>
			    Password <br/>
				<input type="password" name="pwd" value="">
				
			 
			 </td>
			 </tr>
			 
			 </tr>
			 
			 <td>
			    
				<input type="submit" name="submit1" value="Login">
				<a href='Registration.php'>Register</a>
				
				 
			 
			 </td>
			 </tr>
			 
			 </html>