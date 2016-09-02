<?php
// define variables and set to empty values
$poNum = $poLineNum = $poDeptNum = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $poNum = test_input($_POST["name"]);
  $poLineNum = test_input($_POST["email"]);
  $poDeptNum = test_input($_POST["website"]);
  $comment = test_input($_POST["comment"]);
  $gender = test_input($_POST["gender"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>