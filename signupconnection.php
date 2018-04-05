<?php
session_start();

$connection=mysqli_connect('fdb12.biz.nf','2281266_abhiinc','9681@abhi','2281266_abhiinc');

if (!$connection)
    {
        die('Could not connect: ' . mysqli_connect_error());
    }
    else
    {
        
        if (isset($_POST['submit']))
    {
          
        $fullname = $_POST['fullname'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $username = $_POST['username'];
        $typeofsite = $_POST['typeofsite'];
       
       if( $typeofsite === ('Personal Site'))
       {
        $_SESSION["typeofsite"] = $typeofsite; 
       }
        
        $query="insert into signup(fullname,email,password,username,typeofsite,date) values('$fullname','$email','$password','$username','$typeofsite',NOW())";
        
    } else {
        echo("Error");
    }
    
 $result= mysqli_query($connection,$query);
   
if ($result)
{
   header("refresh:3; url=SignIn.php");
   echo '<div class="container-fluid">';
	echo'<div class="row">';
	echo'	<div class="col-md-12">';
			
                       echo' <h2 style="color: green"><center>Registered Succesfully...<center></h2>';
                       
                       if(isset($_SESSION['typeofsite']))
                {
                echo "<h3 style='background-color:orange;'><center>Promo code will be sent in Email within 24 hrs</center></h3>";
                unset($_SESSION['typeofsite']);
                }
                    
                    
                       echo' <h3><center>Please Wait<center></h3>';
echo'<center><img alt="load" src="images/load.gif" /></center>';
		echo'</div>';
	echo'</div>';
echo'</div>';
}
else
{
    echo'Data not inserted';
}

mysqli_close($connection);  

}