<?php


// Get all users with patient designation from Db
function get_appointments() {
  $allAppointments = [];
  $allUsersInDb = scandir("db/appointments");
  $countAllUsers = count($allUsersInDb);

  for ($counter = 2; $counter < $countAllUsers; $counter++) {
    $currentUser = $allUsersInDb[$counter];
    $currentUserString = file_get_contents("db/appointments/".$currentUser);
    $currentUserObject = json_decode($currentUserString);
    $department = $currentUserObject-> department;
    
    if ($department == "department") {
      array_push($allAppointments, $currentUserObject);
    }
  }
  return $allAppointments;
}