<?php

$con = mysqli_connect('localhost','root');

if($con){
    echo "Connected Successfully";
}
else{
    echo "Connection failed";
}

mysqli_select_db($con, 'youtubeuserdata');

$user = $_POST['user'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$comments = $_POST['comments'];

$query = " insert into userinfodata (user, email, mobile, comment ) values ('$user', '$email', '$mobile', '$comments')";

mysqli_query($con, $query);

echo "$query";

header('location:index.php');   


?>