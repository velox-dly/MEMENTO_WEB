<?php
$is_invalid  = false;
if($_SERVER['REQUEST_METHOD'] === "POST"){
   $mysqli = require __DIR__ . "/connect_user.php";
   $sql =sprintf("SELECT * FROM login_db WHERE email = '%s'",
                     $mysqli->real_escape_string($_POST['email']));

                    $result = $mysqli->query($sql);

                    $user = $result ->fetch_assoc();

                   if($user){
                     if(password_verify($_POST["password"], $user["password_hash"])){
                        session_start();
                        session_regenerate_id();
                        $_SESSION["user_id"] = $user["id"];
                        header("location:Dashboard.php");
                        exit;
                     }
                   }
                   $is_invalid = true;
}
?>
// TODO:  EEDIT RIN ITO  
<!DOCTYPE html>
<html lang="en">
<head>
 <link rel="stylesheet" href="LandS.css" class="styles">
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>login</title>
</head>
<body>
<?php if ($is_invalid): ?>
   <em>invalid login</em>  
   <?php endif; ?>
   <header class = "memento"> MEMENTO </header> 
<div class="container">
      <div class="login form">
         <header>Login</header>
         <form method = "POST"> 
             <input type="email" name="email" id="email" placeholder = "Enter email" value = "<?= htmlspecialchars($_POST["email"] ??"")?>" required>
             <input type="password" name="password" id="password" placeholder = "Enter Password" autocomplete="off" minlength="4"
  maxlength="8" required>
              
            <button>log in</button>
           
         </form>
         <div class="signup">
            <span class="signup">Don't have an account?
               <a href = "signUp.php">Signup</a>
            </span>
         </div>
      </div>
   </div>

</body>
</html>