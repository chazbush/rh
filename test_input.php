<?php
// define variables and set to empty values
$poNum = $poLineNum = $poDeptNum = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $poNum = test_input($_POST["name"]);
  $poLineNum = test_input($_POST["email"]);
  $poDeptNum = test_input($_POST["website"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>