<?php include_once('lib/header.php'); 
require_once('functions/alert.php');
require_once('functions/get_mentors.php');


if(!isset($_SESSION['loggedIn'])){
    // redirect to dashboard
    header("Location: login.php");
}
?>


<div class="mentors">
  <h3>Mentors List</h3>
  <h4>Registered Mentors</h4>
  <?php 
  
  $mentors = get_mentors();

  if(count($mentors) < 1)  { ?>
    <p>StartNG Hospital currently has no new mentor at the moment</p>
  <?php }else{ ?>
    <table class="mentors_table">
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
       $mentors = get_mentors();
        for ($i = 0; $i < count($mentors); $i++) {  ?>
          <tr>
            <td><?php echo $i + 1 ?></td>
            <td><?php echo $mentors[$i]->first_name ?></td>
            <td><?php echo $mentors[$i]->last_name; ?></td>
            <td><?php echo $mentors[$i]->email ?></td>
            <td><?php echo $mentors[$i]->gender ?></td>
            <td><?php echo $mentors[$i]->department ?></td>
            
          </tr>
        <?php } ?>
      </tbody>
    </table>
    <form action="super_admin.php">
         <button type="submit" formaction="super_admin.php">Back</button>
      </form>
  <?php } ?>
</div>




