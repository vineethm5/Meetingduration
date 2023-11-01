<?php

$host="localhost";
$user="root";
$pass="rsvp1260";
$db="hrs";
$conn=new mysqli($host,$user,$pass,$db);
if(!$conn)
{
	echo "unable to connect";
}
$qry="select TIMEDIFF('','')as difftime";
$run=$conn->query($qry);
while($row=$run->fetch_assoc())
{
	$difftime=$row['difftime'];
}

?>	