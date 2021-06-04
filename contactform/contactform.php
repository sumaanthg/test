<?php
$data=json_decode(file_get_contents("php://input"));

$name=mysql_real_escape_string($data->name);
$email=mysql_real_escape_string($data->email);
$subject=mysql_real_escape_string($data->subject);
$message=mysql_real_escape_string($data->message);
mysql_connect("localhost","root","");
mysql_select_db("contactform");
mysql_query("insert into data(`name`,`email`,`subject`,`message`) values('".$name."','".$email."','".$subject."','".$message."')");

?>