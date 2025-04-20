<?php
if (empty($_POST["name"])){
   die("Name is required");
}
if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
   die("valid email is required");
}

if(strlen($_POST['password'])<8){
   die("password must be at least 8 character");
}
// TODO:  EEDIT RIN ITO  
if ($_POST["password"] !== $_POST["password_confirmation"]){
   die("password do not much!");
}
$password_hash = password_hash($_POST["password"], PASSWORD_DEFAULT);

$mysqli = require   __DIR__ . "/connect_user.php";

$sql = "INSERT INTO login_db (name, email, password_hash) VALUES (?,?,?)";

$stmt = $mysqli->stmt_init();

if (! $stmt->prepare($sql)){
    die ("SQL error:   " . $mysqli->error);
}

$stmt ->bind_param("sss", 
                     $_POST["name"],
                     $_POST["email"],
                     $password_hash);

if ($stmt->execute()){  
   header("location: index.php");
   exit;
}else{
   if ($mysqli->errno === 1062) {
      die("email already taken");
  } else {
      die($mysqli->error . " " . $mysqli->errno);
  }

}

?>