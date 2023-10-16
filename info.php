<?php

$con = mysqli_connect ('localhost', 'root');

if($con) {
    echo "connection successful";
}else{
    echo "No connection";
}

mysqli_select_db($con,'web');

$Name= $_POST['Name'] ;
$Email= $_POST['Email'];
$Subject =  $_POST['Subject'];
$Message =  $_POST['Message'];

$query ="insert into info (Name,Email,Subject,Message) 
values ('$Name','$Email','$Subject','$Message')";

echo"$query";

mysqli_query($con,$query);



?>