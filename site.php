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
      
      
            
        $username = $_POST['username'];    
        $business = $_POST['business'];
        $contact = $_POST['contact'];
        $typeofbusiness = $_POST['typeofbusiness'];
        $typeofsite = $_POST['typeofsite'];
        $amount = $_POST['amount'];
        $promocode = $_POST['promocode'];
        
        $query="insert into site(username,business,contact,typeofbusiness,typeofsite,amount,promocode,date) values('$username','$business','$contact','$typeofbusiness','$typeofsite','$amount','$promocode',NOW())";
        
    } else {
        echo("Error");
    }
    
 $result= mysqli_query($connection,$query);
   
if ($result)
{
  header("refresh:5; url=index.php");
  echo'<div class="container-fluid">';
	echo'<div class="row">';
			echo'<h1 class="text-info">';
		echo'<center>Requirement Placed Successfully...Please Wait</center>';
			echo'</h1>';
                        
                                               
		echo'</div>';
	echo'</div>';
	echo'<div class="row">';
		echo'<div class="col-md-12">';
         echo'<center><img alt="Bootstrap Image Preview" src="images/load.gif" /></center>';
		echo'</div>';
	echo'</div>';
echo'</div>';
   //echo'<img src="images/load.gif">';
   
   
}
else
{
    echo'Data not inserted';
}

mysqli_close($connection);  

}