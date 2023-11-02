<?php

/*$host="localhost";
$user="root";
$pass="rsvp1260";
$db="hrs";
$conn=new mysqli($host,$user,$pass,$db);
if(!$conn)
{
	echo "unable to connect";
}*/


if(isset($_POST['submit']))
{
  // Modified from https://gist.github.com/taterbase/2688850#file-upload-php
  if(!empty($_FILES['uploaded_file']))
  {
    $path = "/tmp/";
    $basename = $_FILES['uploaded_file']['name'];
    list($filename, $extension) = explode('.', $basename);
    $ts = str_replace('.', '', strval(microtime(true)));
    $path .= "{$filename}_{$ts}.{$extension}";

    if(move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $path)) {
      echo "The file {$basename} has been uploaded";
    } else{
        echo "There was an error uploading the file, please try again!";
    }   
  }

}



/*
$qry="select TIMEDIFF('','')as difftime";
$run=$conn->query($qry);
while($row=$run->fetch_assoc())
{
	$difftime=$row['difftime'];
}

*/


?>	