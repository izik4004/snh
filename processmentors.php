<?php include_once('lib/header.php'); 
require_once('functions/alert.php');
require_once('functions/redirect.php');
require_once('functions/get_appointments.php');


if(!isset($_SESSION['loggedIn'])){
    // redirect to dashboard
    header("Location: login.php");
}
?>


<div class="appointments">
  <h3>appointments List</h3>
  <?php 
  
  $appointments = get_appointments();

  if(count($appointments) < 1)  { ?>
    <p>StartNG Hospital currently has no intern at the moment</p>
  <?php }else{ ?>
    <table class="appointments_table">
      <thead>
        <tr>
          <th>S/N</th>
          <th>First name</th>
          <th>Nature of Appointment</th>
          <th>Department</th>
          <th>Time of Appointment</th>
          <th>Date of Appointment</th>
          <th>Complaint</th>
          
        </tr>
      </thead>
      <tbody>
        <?php 
       $appointments = get_appointments();
        for ($i = 0; $i < count($appointments); $i++) {  ?>
          <tr>
            <td><?php echo $i + 1 ?></td>
            <td><?php echo $appointments[$i]->first_name ?></td>
            <td><?php echo $appointments[$i]->nature_of_appointment; ?></td>
            <td><?php echo $appointments[$i]->department ?></td>
            <td><?php echo $appointments[$i]->time_of_appointment ?></td>
            <td><?php echo $appointments[$i]->date_of_appointment ?></td>
            <td><?php echo $appointments[$i]->complaint ?></td>
            
          </tr>

        <?php } ?>
      </tbody>
    </table>
    <form action="super_admin.php">
         <button type="submit" formaction="mentors.php">Back</button>
      </form>
    

  <?php } ?>
</div>




