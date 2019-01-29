<html>
	<head>
		<title>Adamfer|Validation</title>
	</head>
<body>  

<?php
$nameErr = $passErr = "";
$name = $pass= "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  if (empty($_POST["name"])) {
    $nameErr = "Username is required";
  } else {
    $name = test_input($_POST["name"]);
    if (!preg_match("/^[a-z0-9_]+$/",$name)) {
      $nameErr = "Harus huruf kecil dan underscrore"; 
    }
  }
  
  if (empty($_POST["pass"])) {
    $passErr = "Password is required";
  } else {
    $pass = test_input($_POST["pass"]);
    if (!preg_match("/[^A-Za-z0-9.#\\-$]/",$pass)) {
      $passErr = "Harus huruf kecil dan besar, angka dan karakter"; 
    }
  }





}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<form method="post" action="index.php">  
  Username: <input type="text" name="name" minlength="8">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  Password: <input type="text" name="pass" minlength="8">
  <span class="error">* <?php echo $passErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>


</body>
</html>