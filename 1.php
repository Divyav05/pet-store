<?php
if(isset($_POST['submit']))
{
    $a=$_POST['uname'];
    $b=$_POST['pass'];
    $c=$_POST['email'];
    

    
        $con=new mysqli ("localhost","root","divya","login_details");
        if ($con->connect_error) {
            die("Connection failed: " . $con->connect_error);
          }
          
          $sql = "INSERT INTO login VALUES ('$a','$b','$c')";
          
          if ($con->query($sql) === TRUE)
          {
            echo "New record created successfully";
          }
          else
          {
            echo "Error: " . $sql . "<br>" . $con->error;
          }
          
          $con->close();
        
    }
    ?>