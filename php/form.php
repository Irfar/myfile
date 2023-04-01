<?php
$name = $_POST['name'];
$mail = $_POST['email'];
$phoneno = $_POST['phone'];
$mess = $_POST['textarea'];

//echo $name. $mail. $phoneno. $mess;


$hostname = "localhost";
$username = "root";
$password  = "";
$db = "loxury";
$conn = mysqli_connect($hostname,$username,$password,$db);

$ins ="INSERT INTO Clients(client_name,email,pass,messge)VALUES('$name','$mail','$phoneno','$mess')";
$res = mysqli_query($conn,$ins);
if($res){
    echo "INSERTED SUCCESSFULLY";
}
else{
    echo mysqli_connect_error();
}




?>