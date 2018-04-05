<?php  
//promocodecheck.php  
$connect = mysqli_connect("fdb12.biz.nf", "2281266_abhiinc", "9681@abhi", "2281266_abhiinc"); 
if(isset($_POST["promo_code"]))
{
 $promocode = mysqli_real_escape_string($connect, $_POST["promo_code"]);
 $query = "SELECT * FROM promocode WHERE promocode = '".$promocode."'";
 $result = mysqli_query($connect, $query);
 echo mysqli_num_rows($result);
}
?>