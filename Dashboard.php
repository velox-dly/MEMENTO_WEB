<?php 

session_start();
if(isset($_SESSION["user_id"])){
  $mysqli = require __DIR__ . "/connect_user.php";

  $sql = "SELECT * FROM login_db WHERE id = {$_SESSION["user_id"]}";

  $result = $mysqli->query($sql);

  $user = $result->fetch_assoc();

}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!--<title>Sidebar Menu | Side Navigation Bar</title>-->
    <!-- CSS -->
    <link rel="stylesheet" href="style2.css" />
    <!-- Boxicons CSS -->
    <link
      href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css"
      rel="stylesheet"/>
	<title>Dashboard</title>
  </head>
  <body>
    
    <!---DASHBOARD START-->
    <div class="service">
      <div class="title">
      <?php if (isset($user)):?>
        <h3>Hello  <em><?= htmlspecialchars($user["name"]) ?></em>! Welcome to</h3>
        <h2>MEMENTO</h2>
       
      </div>
          <?php endif; ?>
  
      <div class="box">
        <div class="card">
          <a class="button" href="Add Debtor.php"><i class="bx bx-list-plus icon"></i></a>
          <br><br>
          <h5>Add Debtor</h5>
        </div>
  
        <div class="card">
          <a class="button" href="Edit Record.php"><i class="bx bx-edit icon"></i></a> 
          <br><br>
          <h5>Edit Record</h5>
        </div>
  
        <div class="card">
          <a class="button" href="ListDebtor.php"><i class="bx bx-list-ul icon"></i></a> 
          <br><br>
          <h5>List of Debtors</h5>
        </div>
      </div>
      <!---about us (maglalagay na pu)-->
      <div class="box2">
      <div class="about-us">
        <p>About Memento</p>
        <h5>&emsp;&emsp;&emsp;&emsp;A Retail Store Debt Management System that is made especially for small businesses like "Sari-Sari" stores. 
          Every small business owner might benefit from this system's considerably more effective, precise, and 
          straightforward approach to handling consumer debts. The system's user has the ability to add or modify a 
          debtor's record. The user specifies the essential items in the Sari-Sari store, and the system computes them automatically. </h5><br>
        <a class="button-two" href="About.html">Learn More</a>
      </div>
    </div> </div>
  <!---DASHBOARD END (ininsert q po)-->

    <nav>
      <div class="logo">
        <i class="bx bx-menu menu-icon"></i>
        <span class="logo-name">Memento</span>
      </div>
      <div class="sidebar">
        <div class="logo">
          <i class="bx bx-menu menu-icon"></i>
          <span class="logo-name">Memento</span>
        </div>
    <nav>
      <div class="logo">
        <i class="bx bx-menu menu-icon"></i>
        <span class="logo-name">Memento</span>
      </div>
      <div class="sidebar">
        <div class="logo">
          <i class="bx bx-menu menu-icon"></i>
          <span class="logo-name">Memento</span>
        </div>

<!---UPPER NAVIGATION-->
        <div class="sidebar-content">
          <ul class="lists">
            <li class="list">
              <a href="Dashboard.php" class="nav-link">
                <i class="bx bx-home-alt icon"></i>
                <span class="link">Dashboard</span>
              </a>
            </li>
            <li class="list">
              <a href="Add Debtor.php" class="nav-link">
                <i class="bx bx-list-plus icon"></i>
                <span class="link">Add Debtor</span>
              </a>
            </li>
            <li class="list">
              <a href="ListDebtor.php" class="nav-link">
                <i class="bx bx-list-ul icon"></i>
                <span class="link">List of Debtor's</span>
              </a>
            </li>
            <li class="list">
              <a href="Edit Record.php" class="nav-link">
                <i class="bx bx-edit icon"></i>
                <span class="link">Edit Record</span>
              </a>
            </li>
          </ul>
          
<!---BOTTOM NAVIGATION-->
          <div class="bottom-cotent">
            <ul class="lists">
            <li class="list">
              <a href="About.html" class="nav-link">
                <i class="bx bx-question-mark icon"></i>
                <span class="link">About</span>
              </a>
            </li>
            <li class="list">
              <a href="logout.php" class="nav-link">
                <i class="bx bx-log-out icon"></i>
                <span class="link">Logout</span>
              </a>
            </li>
        </ul>
          </div>
        </div>
      </div>
    </nav>
      <!--log-->
  
   
      
    <section class="overlay"></section>

    <script>
      const navBar = document.querySelector("nav"),
        menuBtns = document.querySelectorAll(".menu-icon"),
        overlay = document.querySelector(".overlay");

      menuBtns.forEach((menuBtn) => {
        menuBtn.addEventListener("click", () => {
          navBar.classList.toggle("open");
        });
      });

      overlay.addEventListener("click", () => {
        navBar.classList.remove("open");
      });
    </script>
  </body>
</html>


