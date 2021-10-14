<?php 

 
 $connect = mysqli_connect("localhost","explbxya_wallet","eK2NgfWE=dHd","explbxya_wallet");
$get_admin = "select * from admin_login";
$run_admin = mysqli_query($connect,$get_admin);
$get_data = "select * from client_data";
$run_data = mysqli_query($connect,$get_data);

?>