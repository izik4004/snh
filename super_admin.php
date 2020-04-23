<?php 
   require_once('functions/user.php');
   print date("m/d/y G.i:s<br>", time());
  
?>
<?php
include_once('lib/header.php');

    require_once('functions/alert.php');
    require_once('functions/redirect.php');
   



?> 

<form method="POST" action="interns_view.php">
<div class="col-8">
<h2>Admin Dashboard</h2>

<button class="button button1" type="submit" formaction="allmentors.php">View All Staff</button>   
<button class="button button3" type="submit" formaction="allinterns.php">View All Patient</button>  


