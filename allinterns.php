<?php include_once('lib/header.php'); 
require_once('functions/alert.php');
require_once('functions/redirect.php');
require_once('functions/get_interns.php');


if(!isset($_SESSION['loggedIn'])){
    // redirect to dashboard
    header("Location: login.php");
}
?>


<div class="interns">
  <h3>Interns List</h3>
  <?php 
  
  $interns = get_interns();

  if(count($interns) < 1)  { ?>
    <p>StartNG Hospital currently has no intern at the moment</p>
  <?php }else{ ?>
    <table class="interns_table">
      <thead>
        <tr>
          <th>S/N</th>
          <th>First Name</th>
          <th>Last Name</th>
          <th>Email</th>
          <th>Gender</th>
          <th>Department</th>
          
        </tr>
      </thead>
      <tbody>
        <?php 
       $interns = get_interns();
        for ($i = 0; $i < count($interns); $i++) {  ?>
          <tr>
            <td><?php echo $i + 1 ?></td>
            <td><?php echo $interns[$i]->first_name ?></td>
            <td><?php echo $interns[$i]->last_name; ?></td>
            <td><?php echo $interns[$i]->email ?></td>
            <td><?php echo $interns[$i]->gender ?></td>
            <td><?php echo $interns[$i]->department ?></td>
            
          </tr>

        <?php } ?>
      </tbody>
    </table>
    <form action="super_admin.php">
         <button type="submit" formaction="super_admin.php">Back</button>
      </form>
    

  <?php } ?>
</div>




