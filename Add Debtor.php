<?php 
include 'connect.php';

// TODO:  EEDIT RIN ITO  
$see_result = false;
if (isset($_POST['compute'])){
	$fullName = $_POST['fullName'];
	$contactNumber = $_POST['contactNumber'];
	$utangDate = $_POST['utangDate'];
	
	$product1 = $_POST['product1'];
	$qty1 = $_POST['qty1'];
	$price1 = $_POST['price1'];
	
	$product2 = $_POST['product2'];
	$qty2 = $_POST['qty2'];
	$price2 = $_POST['price2'];
	
	$product3 = $_POST['product3'];
	$qty3 = $_POST['qty3'];
	$price3 = $_POST['price3'];
	
	$product4 = $_POST['product4'];
	$qty4 = $_POST['qty4'];
	$price4 = $_POST['price4'];
	
	$product5 = $_POST['product5'];
	$qty5 = $_POST['qty5'];
	$price5 = $_POST['price5'];
	
	if (empty ($product1)){
		$product1 = "-";
	}
	if (empty ($price1)){
		$price1 = 0;
	}
	if (empty ($qty1)){
		$qty1 = 0;
	}
	if (empty ($price1)){
		$price1 = 0;
	}
	if (empty ($product2)){
		$product2 = "-";
	}
	if (empty ($qty2)){
		$qty2 = 0;
	}
	if (empty ($price2)){
		$price2 = 0;
	}
	if (empty ($product3)){
		$product3 = "-";
	}
	if (empty ($qty3)){
		$qty3 = 0;
	}
	if (empty ($price3)){
		$price3 = 0;
	}
	if (empty ($product4)){
		$product4 = "-";
	}
	if (empty ($qty4)){
		$qty4 = 0;
	}
	if (empty ($price4)){
		$price4 = 0;
	}
	if (empty ($product5)){
		$product5 = "-";
	}
	if (empty ($qty5)){
		$qty5 = 0;
	}
	if (empty ($price5)){
		$price5 = 0;
	}
	
	$total = ($qty1*$price1)+($qty2*$price2)+($qty3*$price3)+($qty4*$price4)+($qty5*$price5);
	
	$see_result = true;
	
}

if (isset($_POST['submit'])){
   $fullname = $_POST['fullName'];
   $contactNumber = $_POST['contactNumber'];
   $utangDate = $_POST['utangDate'];
	$product1 = $_POST['product1'];
	$qty1 = $_POST['qty1'];
	$price1 = $_POST['price1'];
	
	$product2 = $_POST['product2'];
	$qty2 = $_POST['qty2'];
	$price2 = $_POST['price2'];
	
	$product3 = $_POST['product3'];
	$qty3 = $_POST['qty3'];
	$price3 = $_POST['price3'];
	
	$product4 = $_POST['product4'];
	$qty4 = $_POST['qty4'];
	$price4 = $_POST['price4'];
	
	$product5 = $_POST['product5'];
	$qty5 = $_POST['qty5'];
	$price5 = $_POST['price5']; 
	
	if (empty ($product1)){
		$product1 = "-";
	}
	if (empty ($qty1)){
		$qty1 = 0;
	}
	if (empty ($price1)){
		$price1 = 0;
	}
	if (empty ($product2)){
		$product2 = "-";
	}
	if (empty ($qty2)){
		$qty2 = 0;
	}
	if (empty ($price2)){
		$price2 = 0;
	}
	if (empty ($product3)){
		$product3 = "-";
	}
	if (empty ($qty3)){
		$qty3 = 0;
	}
	if (empty ($price3)){
		$price3 = 0;
	}
	if (empty ($product4)){
		$product4 = "-";
	}
	if (empty ($qty4)){
		$qty4 = 0;
	}
	if (empty ($price4)){
		$price4 = 0;
	}
	if (empty ($product5)){
		$product5 = "-";
	}
	if (empty ($qty5)){
		$qty5 = 0;
	}
	if (empty ($price5)){
		$price5 = 0;
	}
	
	$total = ($qty1*$price1)+($qty2*$price2)+($qty3*$price3)+($qty4*$price4)+($qty5*$price5);

   //insert query
   $sql="insert into `customer data` (fullName, contactNumber, utangDate, product1, qty1, price1, product2, qty2, price2, 
									  product3, qty3, price3, product4, qty4, price4, product5, qty5, price5, total)
    values ('$fullname', '$contactNumber', '$utangDate', '$product1', '$qty1', '$price1', '$product2', '$qty2', '$price2',
			'$product3', '$qty3', '$price3', '$product4', '$qty4', '$price4', '$product5', '$qty5', '$price5', '$total')";

    $result = mysqli_query($con,$sql);
    if($result){
    header ('location:Edit Record.php');
    }else {
      die(mysqli_connect($con));
    }
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
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
	
	<title>Add Debtor</title>
  </head>
  <body>

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
                <span class="link">List of Debtors</span>
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

<!-- // TODO: log --> 
	<div class="containerADD">
        <header>Add Debtor </header>

        <form method = "POST">
            <div class="form first">
                <div class="details personal">
                    <span class="title">Debtor Personal Details</span>

                    <div class="fields">
                        <div class="input-field">
                           <label>Full Name</label>
                           <input type="text" class="form-control"  placeholder="Full Name" name = "fullName" required <?php if ($see_result): ?> value= "<?= $fullName ?>" <?php endif; ?>>
                        </div>

                        <div class="input-field">
                            <label>Contact Number</label>
                            <input type="text" class="form-control"  placeholder="Contact Number" name = "contactNumber" required <?php if ($see_result): ?> value= "<?= $contactNumber ?>" <?php endif; ?>>
                        </div>

                        <div class="input-field">
                        <label>Date</label>
                               <!-- //!form text to DATE type input -->
                        <input type="date" class="form-control"  placeholder="Date"name = "utangDate" required <?php if ($see_result): ?> value= "<?= $utangDate ?>" <?php endif; ?>>
                        </div>

                    </div>
                </div>

                <div class="details ID">
                    <span class="title">Debt Section</span>

                    <div class="fields">
                        <div class="input-field">
                             <label>Product 1: </label>  
                             <input type="text" class="form-control"  placeholder="Product 1" name = "product1" <?php if ($see_result): ?> value= "<?= $product1 ?>" <?php endif; ?>>              
                        </div>

                        <div class="input-field">
                              <label>Quantity 1: </label>
                              <input type="number" class="form-control"  placeholder="Quantity 1"name = "qty1" value= "<?= $qty1 ?>">
                        </div>

                        <div class="input-field">
                              <label>Price 1: </label>
                              <input type="number" class="form-control"  placeholder="Price 1"name = "price1" value= "<?= $price1 ?>"></label>
                        </div>
                                 <!-- // ! end product 1 -->


                        <div class="input-field">
                            <label>Product 2: </label>
                            <input type="text" class="form-control"  placeholder="Product 2"name = "product2" <?php if ($see_result): ?> value= "<?= $product2 ?>" <?php endif; ?>>
                        </div>

                        <div class="input-field">
                            <label>Quantity 2: </label>
                            <input type="number" class="form-control"  placeholder="Quantity 2"name = "qty2" value= "<?= $qty2 ?>">
                        </div>

                        <div class="input-field">
                            <label>Price 2: </label>
                            <input type="number" class="form-control"  placeholder="Price 2"name = "price2" value= "<?= $price2 ?>">
                        </div>
                                <!-- // ! end product 2 -->

                        <div class="input-field">
                            <label>Product 3: </label>
                            <input type="text" class="form-control"  placeholder="Product 3"name = "product3" <?php if ($see_result): ?> value= "<?= $product3 ?>" <?php endif; ?>>
                        </div>

                        <div class="input-field">
                            <label>Quantity 3: </label>
                            <input type="number" class="form-control"  placeholder="Quantity 3"name = "qty3" value= "<?= $qty3 ?>">
                        </div>

                        <div class="input-field">
                            <label>Price 3: </label>
                            <input type="number" class="form-control"  placeholder="Price 3"name = "price3" value= "<?= $price3 ?>">
                        </div>
                                <!-- // ! end product 3  -->

                        <div class="input-field">
                            <label>Product 4: </label>
                            <input type="text" class="form-control"  placeholder="Product 4"name = "product4" <?php if ($see_result): ?>  value= "<?= $product4 ?>" <?php endif; ?>>
                        </div>

                        <div class="input-field">
                            <label>Quantity 4: </label>
                            <input type="number" class="form-control"  placeholder="Quantity 4"name = "qty4" value= "<?= $qty4?>">
                        </div>

                        <div class="input-field">
                            <label>Price 4: </label>
                            <input type="number" class="form-control"  placeholder="Price 4"name = "price4" value= "<?= $price4 ?>">
                        </div>

                              <!-- // TODO end product 4  -->

                        <div class="input-field">
                            <label>Product 5: </label>
                            <input type="text" class="form-control"  placeholder="Product 5"name = "product5" <?php if ($see_result): ?>  value= "<?= $product5 ?>" <?php endif; ?>>
                        </div>

                        <div class="input-field">
                            <label>Quantity 5: </label>
                            <input type="number" class="form-control"  placeholder="Quantity 5"name = "qty5" value= "<?= $qty5 ?>">
                        </div>

                        <div class="input-field">
                            <label>Price 5: </label>
                            <input type="number" class="form-control"  placeholder="Price 5"name = "price5" value= "<?= $price5 ?>">
                        </div>

                               <!-- // TODO end product 5  -->
						

					</div> <!-- end -->
					   <center>
						<?php if ($see_result): ?>
	  
						  <div class="input-field">
							<label><b>TOTAL: ₱</b></label>
							<input type="text" class="form-control"  placeholder="Total" name= "total"
									value="<?= $total ?>" disabled>
						  </div>
						  <?php endif; ?>
						</center>
                            
                    <div class="buttons">
                        <button class="compBtn" type = "submit" name = "compute">
                            <i class="uil uil-navigator"></i>
                            <span class="btnText">Compute</span>
                        </buttons>
                        
                        <button class="sumbit" type = "submit" name = "submit">
                            <span class="btnText">Submit</span>
                            <i class="uil uil-navigator"></i>
                        </button>
                    </div>
 
                </div> 
            </div>

        </form>
	</div>

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

