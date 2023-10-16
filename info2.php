<?php

$con = mysqli_connect ('localhost', 'root');

if($con) {
    echo "connection successful";
}else{
    echo "No connection";
}

mysqli_select_db($con,'web');

$Company= $_POST['Company'];
$Email= $_POST['Email'];
$Budget =  $_POST['Budget'];
$Description =  $_POST['Description'];

$query ="insert into hire (Company,Email,Budget,Description) 
values ('$Company','$Email','$Budget','$Description')";

echo"$query";

mysqli_query($con,$query);

?>