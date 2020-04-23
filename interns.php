
<?php
   print date("m/d/y G.i:s<br>", time());
  
?>
<?php
include_once('lib/header.php');
require_once('functions/alert.php');


?>

<?php
if(!isset($_SESSION['loggedIn'])){
    // redirect to dashboard
    header("Location: dashboard.php");
}
?>
<h3>Interns Dashboard</h3>

Welcome, <?php echo $_SESSION['fullname'] ?>, You are logged in as a (<?php echo 
$_SESSION['role'] ?>), and your ID is <?php echo $_SESSION['loggedIn'] ?>.

   
    <div class="col-10">

    <form method="POST" action="appointment.php">
        <p>
           <?php print_alert(); ?> 
        </p>
<p>
<button class="btn btn-md btn-success" type="submit">Pay Bill</button>  

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#centralModalmd">
  Book Appointment
</button>

<!-- Using a modal to trigger the appointment form -->
<div class="modal fade" id="centralModalmd" tabindex="2" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">

  <!-- Change class .modal-md to change the size of the modal -->
  <div class="modal-dialog modal-md" role="document">


    <div class="modal-content">
   

      <div class="modal-header">
        <h4 class="modal-title w-100" id="myModalLabel">Request an Appointment</h4>
         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      
           <p>
                <label>Nature of Appointment</label><br />
                <select class="form-control" name="nature_of_appointment" >
                <option value="">Select One</option>
                    <option
                    <?php              
                        if(isset($_SESSION['nature_of_appointment']) && $_SESSION['nature_of_appointment'] == 'New'){
                            echo "selected";                                                           
                        }                
                    ?>
                    
                    >New</option>
                    <option
                    <?php              
                        if(isset($_SESSION['nature_of_appointment']) && $_SESSION['nature_of_appointment'] == 'Old'){
                            echo "selected";                                                           
                        }                
                    ?>
                               
                    >Old</option>
                </select>
            </p>
            <p>
            <label>Department (Track)</label><br />
                <select class="form-control" name="department" >
                    <option value="">Select One</option>
                    <option
                    <?php              
                        if(isset($_SESSION['department']) && $_SESSION['department'] == 'Frontend (FE)'){
                            echo "selected";                                                           
                        }                
                    ?>
                    
                    >Frontend(FE)</option>
                    <option
                    <?php              
                        if(isset($_SESSION['department']) && $_SESSION['department'] == 'Backend (BE)'){
                            echo "selected";                                                           
                        }                
                    ?>
                               
                    >Backend (BE)</option>
                    <option
                    <?php              
                        if(isset($_SESSION['department']) && $_SESSION['department'] == 'Design'){
                            echo "selected";                                                           
                        }                
                    ?>

                    
                    >Design</option>
                    </select>
                </p>

                <label>Time of Appointment</label><br />
                <input 
                      
                <?php              
                  if(isset($_SESSION['time_of_appointment'])){
                      echo "value=" . $_SESSION['time_of_appointment'];                                                             
                  }                
                ?>
                
                type="time" class="form-control" id="timepicker" name="time_of_appointment"/>  
            </p>
            <p>
                <label>Date of Appointment</label><br />
                <input 
                
                <?php              
                  if(isset($_SESSION['date_of_appointment'])){
                      echo "value=" . $_SESSION['date_of_appointment'];                                                             
                  }                
                ?>
                type="date" class="form-control" name="date_of_appointment" id="datepicker"/>
                
            </p>
            
            <div class="md-form">
          <label data-error="wrong" data-success="right" for="form">Complaints</label>
          <textarea 
          
          <?php              
            if(isset($_SESSION['complaint'])){
                echo "value=" . $_SESSION['complaint'];                                                             
            }            
          
          ?>
          type="text" id="form" class="md-textarea form-control" name="complaint" rows="4"></textarea>
          
        </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
        <button class="btn btn-sm btn-success" type="submit">Submit</button>
       
      </div>
    </div>
  </div>
</div>
<!-- Central Modal Small -->
</p>
