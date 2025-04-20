<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="LandS.css" class="styles">
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <script src="https://unpkg.com/just-validate@latest/dist/just-validate.production.min.js" defer></script>
    <script src="/js/validation.js" defer></script>
   <title>Sign up</title>
</head>
<body>
<header class = "memento"> MEMENTO </header> 
<div class="container">
<div class="Registration form">
         <header>Signup</header>
         <form action = "process-signup.php" method = "POST" id ="signup">
      <div> 
     
      <input type="text" id = "name" name = "name" placeholder = "Enter Name" required>
      </div>

      <div>
        
         <input type="text" name="email" id="email" placeholder = "Enter Email" required>
      </div>

      <div>
        
         <input type="password" id = "password" name = "password" placeholder = "Create Password" required minlength="4"
  maxlength="8">
      </div>

      <div>
      
         <input type="password" id = "password_confirmation" name = "password_confirmation" placeholder = "Confirm Password" required minlength="4"
  maxlength="8">
      </div>
       <button>Sign up</button>
       // TODO:  EEDIT RIN ITO  
   </form>
   <div class="login">
            <span class="login   ">Already have an acccount?
               <a href = "index.php">login</a>
            </span>
         </div>
</div>
</div>
  
</body>
</html>

