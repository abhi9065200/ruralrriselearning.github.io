<<?php 

$con = mysqli_connect('localhost','root');
if($con){
	echo"Connection successfull";
}else{
	echo"No connection";
}
mysqli_select_db($con, 'rrl');

$user = $_POST['user'];
$mobile = $_POST['mobile'];
$email = $_POST['email'];
$comments = $_POST['comments'];

$query = "insert into userinfodata (user,mobile,email,comments)
values('$user', '$mobile', '$email', '$comments')";

echo "$query";

mysqli_query($con, $query);


 ?>