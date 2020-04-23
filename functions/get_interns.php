
<?php


// Get all users with medical designation from Db
function get_interns() {
  $allInterns = [];
  $allUsersInDb = scandir("db/users");
  $countAllUsers = count($allUsersInDb);

  for ($counter = 2; $counter < $countAllUsers; $counter++) {
    $currentUser = $allUsersInDb[$counter];
    $currentUserString = file_get_contents("db/users/".$currentUser);
    $currentUserObject = json_decode($currentUserString);
    $designation = $currentUserObject -> designation;

    if ($designation == "Interns") {
      array_push($allInterns, $currentUserObject);
    }
  }
  return $allInterns;
}

