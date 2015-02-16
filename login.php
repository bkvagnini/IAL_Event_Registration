<?php
// session_start()

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
  ?>
  <!-- Put the admin only content below-->
  <p> hey...you logged in!</p>



<?php
}
?>
