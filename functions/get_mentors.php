<?php


// Get all users with patient designation from Db
function get_mentors() {
  $allMentors = [];
  $allUsersInDb = scandir("db/users");
  $countAllUsers = count($allUsersInDb);

  for ($counter = 2; $counter < $countAllUsers; $counter++) {
    $currentUser = $allUsersInDb[$counter];
    $currentUserString = file_get_contents("db/users/".$currentUser);
    $currentUserObject = json_decode($currentUserString);
    $designation = $currentUserObject-> designation;
    
    if ($designation == "Mentors (MT)") {
      array_push($allMentors, $currentUserObject);
    }
  }
  return $allMentors;
}