<html>
   
   <head>
      <title>Add New Record in MySQL Database</title>
   </head>
   
   <body>
      <?php
         if(isset($_POST['add'])) {
           $servername = "localhost";
           $username = "root";
           $password = "";
           $dbname = "myDB";

           // Create connection
           $conn = mysqli_connect($servername, $username, $password, $dbname);
           // Check connection
           if (!$conn) {
              die("Connection failed: " . mysqli_connect_error());
              }          
            $sql = "INSERT INTO myguests ". "(firstname,lastname, email)". 
			         "VALUES('$_POST[firstname]','$_POST[lastname]','$_POST[email]')";
               
            if (mysqli_query($conn, $sql)) {
               echo "New record created successfully";
            } else {
                   echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                   }
            mysqli_close($conn);
         }else {
            ?>
            
               <form method = "post" action = "<?php $_PHP_SELF ?>">
                  <table width = "400" border = "0" cellspacing = "1" 
                     cellpadding = "2">
                  
                     <tr>
                        <td width = "100">First Name</td>
                        <td><input name = "firstname" type = "text" 
                           id = "firstname"></td>
                     </tr>
                  
                     <tr>
                        <td width = "100">Last Name</td>
                        <td><input name = "lastname" type = "text" 
                           id = "lastname"></td>
                     </tr>
                  
                     <tr>
                        <td width = "100">E-mail</td>
                        <td><input name = "email" type = "text" 
                           id = "email"></td>
                     </tr>
                  
                     <tr>
                        <td width = "100"> </td>
                        <td> </td>
                     </tr>
                  
                     <tr>
                        <td width = "100"> </td>
                        <td>
                           <input name = "add" type = "submit" id = "add" 
                              value = "Add Employee">
                        </td>
                     </tr>
                  
                  </table>
               </form>
            
            <?php
         }
      ?>
   
   </body>
</html>
