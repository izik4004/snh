<?php session_start();
require_once('functions/alert.php');
require_once('functions/redirect.php');



//collecting data

$nature_of_appointment = $_POST['nature_of_appointment'];
$time_of_appointment = $_POST['time_of_appointment'];
$date_of_appointment = $_POST['date_of_appointment'];
$complaint = $_POST['complaint'];
$department = $_POST['department'];

$_SESSION['nature of appointment']=$nature_of_appointment;
$_SESSION['time of appointment']=$time_of_appointment;
$_SESSION['date of appointment']=$date_of_appointment;
$_SESSION['complaint']=$complaint;
$_SESSION['department']=$department;


// Get unique id


$allInterns = scandir("db/interns/");
$countAllInterns = count($allInterns);

$newInternsId = $countAllInterns -1;



$internsObject = [
'id'=>$newInternsId,
'nature of Appointment'=>$nature_of_appointment,
'fullname' =>$_SESSION['fullname'],
'date of Apppointment'=>$date_of_appointment,
'time of Appointment'=>$time_of_appointment,
'complaint'=>$complaint,
'department'=>$department,




]; 

	

    //function save_user($internsObject){
        $file = ("db/appointments/" . $internsObject['id'] . ".json");
	    $json_string = json_encode($_POST, JSON_PRETTY_PRINT);
	    file_put_contents($file, $json_string, FILE_APPEND);
        
        $_SESSION["message"] = "Your appointment has been registered and one of the doctirs will attend to you";
        header("Location:interns.php");
       