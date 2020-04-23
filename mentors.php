<?php 
   require_once('functions/user.php');
   print date("m/d/y G.i:s<br>", time());
  
?>
<?php
include_once('lib/header.php');

    require_once('functions/alert.php');
    require_once('functions/redirect.php');
   



?> 

<form method="POST" action="processmentors.php">
<div class="col-8">
<h2>Mentors Dashboard</h2>

<button class="btn btn-md btn-success" type="submit">View Appointment</button>  

