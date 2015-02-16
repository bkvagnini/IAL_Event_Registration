<?php
$registerdate = date('D, M dS,Y. H:i');
$eventname = 'Test EVENT 010715'; //CHANGE THIS OUT AS NEEDED...
$fname=dbfix($_POST['fname']);
$lname=dbfix($_POST['lname']);
$org=dbfix($_POST['org']);
$nametag=dbfix($_POST['nametag']);
$email=dbfix($_POST['email']);
$phone=dbfix($_POST['phone']);
$info=dbfix($_POST['info']);
 
//trims off unnecesssary white space and extra characters

function dbfix($val){
	$temp = trim($val);
	$temp = str_replace("'","\'",$temp);
	return $temp;
	}	


  //This is straight from Pg 751 of the Murach PHP Book 1st ed.
  $eventreg = array(array($registerdate,$eventname,$fname, $lname, $org, $nametag, $email, $phone,$info));
  $file = fopen('events.csv', 'ab');
  foreach ($eventreg as $event){
    fputcsv ($file, $event);
  }
  fclose($file);   
    
echo $temp;

echo '<h3>Thank you!</h3>';

echo 'You registered for the EVENTNAME event on '. $registerdate . '<br />';
echo 'You submitted the folowing details:' . $registerdate . "," . $eventname . "," . $fname . "," . $lname ."," . $org . "," . $nametag . "," . $email ."," . $phone . "," . $info . '<br>';
echo 'A confirmation email will be sent shortly...';
?>
