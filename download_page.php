<?php
session_start();
$name=$_REQUEST['filename'];
echo $name;
$nid=$_REQUEST['id'];
$uname=$_REQUEST['fname'];
  if(!empty($name)){
    // Specify file path.
    $path = 'c:/wamp64/www/modified/upload/'.$nid.'_'.$uname.'/';
    $download_file =  $path.$name;
    if(file_exists($download_file))
    {
      $extension = explode('.',$name);
      header('Content-Disposition: attachment; filename=' . $name);  
      readfile($download_file); 
      exit;
    }
    else
    {
      echo 'File does not exists on given path';
    }
 
 }

?>