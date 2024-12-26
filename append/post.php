<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
  $message = htmlspecialchars($_POST["message"]);
  $password = htmlspecialchars($_POST["password"]);
  
  echo "Message: $message";
  echo "<br/>";
  echo "Password: $password";
  
$data = fopen("data.txt", "w+");
fwrite($data, "$message");
fclose($data);
echo "data set";
}

?>
