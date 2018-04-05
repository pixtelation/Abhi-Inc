<?php  
//check.php  
$connect = mysqli_connect("fdb12.biz.nf", "2281266_abhiinc", "9681@abhi", "2281266_abhiinc"); 
if(isset($_POST["user_name"]))
{
 $username = mysqli_real_escape_string($connect, $_POST["user_name"]);
 $query = "SELECT * FROM signup WHERE username = '".$username."'";
 $result = mysqli_query($connect, $query);
 echo mysqli_num_rows($result);
}
?>