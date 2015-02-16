<?php
// Define your username and password

$username = "USERNAME";

$password = "PASSWORD";

//Testing the username and password

if ($_POST['txtUsername'] != $username || $_POST['txtPassword'] != $password) {

?>
<body>

<h1>Admin Login</h1>

<form name="login" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">

<p><font><label for="txtUsername">Username:</label>

<br /><input type="text" title="Enter your Username" name="txtUsername" /></p>

<p><font><label for="txtpassword">Password:</label>

<br /><input type="password" title="Enter your password" name="txtPassword" /></p>

<p><input type="submit" name="Submit" value="Login" /></p>

</form>
<?php

}
//upon successful log in
else { 
  
//Put the admin only content below
echo "<h1>Registrations for EVENTNAME</h1>";

//This is from pg. 751 of Murach PHP book- 1st ed. 
$file = fopen('events.csv', 'rb');
$events = array();
 echo " Event Name, First name, Last Name, Organization, Nametag Name Requested, Email Address, Phone number, Hotel Info requested, Registration date";
 // echo " Registration date \t Event Name \t First name \t Last Name \t Organization \t Nametag Name Requested \t Email Address \t Phone number \t Hotel Info requested";
while (!feof($file)){
  $event = fgetcsv($file);
  if ($event == false) continue;
  $events[] =$event;
 
  echo "<div> $event[1], $event[2],$event[3] , $event[4], $event[5],$event[6] , $event[7], $event[8], $event[0] </div>";
 // echo "<div> $event[0] \t $event[1] \t $event[2] \t$event[3] \t $event[4] \t $event[5] \t $event[6] \t $event[7] \t $event[8] </div>";
   
  } //Closes the while loop
  fclose($file); 
 // echo "<h3>Have a nice day...</h3>";
echo '<h3><a href="events.csv">Download the CSV file</a></h3>';

  
} //closes the else statement

?>
