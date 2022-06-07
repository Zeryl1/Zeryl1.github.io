<?php
$user_name = $_POST['user_name'];
$surname = $_POST['surname'];
$father_name = $_POST['father_name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$section = $_POST['section'];
$birth_date = $_POST['birth_date'];
$report = $_POST['report'];
$report_name = $_POST['report_name'];

$file = fopen("file.txt","at");
fwrite($file,"\n $name:$surname:$father_name:$phone:$email:$section:$birth_date:$report:$report_name \n");
fclose($file);
?>