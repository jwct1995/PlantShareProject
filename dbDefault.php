<?php
$Host = "localhost";
$User = "root";
$Pass = "";
$dbName = "dbPlant";

$conn=new mysqli($Host,$User,$Pass);
if($conn->connect_error)
	die("Connection Failed : ".$conn->connect_error."<br>");

$sql="CREATE DATABASE ".$dbName;
if($conn->query($sql)===TRUE)
	echo"Database Create Success<br>";
else
	echo"Database Create Fail".$conn->error."<br>";

$conn=new mysqli($Host,$User,$Pass,$dbName);
if($conn->connect_error)
	die("Connection Failed : ".$conn->connect_error."<br>");

	$sql=array
  (
  	"CREATE TABLE tblPlant
    (
      pId VARCHAR(30) PRIMARY KEY,
      pName VARCHAR(50),
      pSize VARCHAR(20),
      pDesc VARCHAR(60000),
      pImg VARCHAR(60000),
	  pLikeCount INT
    )"
  );

  foreach($sql as $s)
  if($conn->query($s)===TRUE)
  	echo"Table Create Success<br>";
  else
  	echo"Table ".$s."Create Fail".$conn->error."<br>";

  $mysqli=new mysqli($Host,$User,$Pass,$dbName);
  if($mysqli->connect_error)
  	die("Connection Failed : ".$mysqli->connect_error."<br>");

?>
