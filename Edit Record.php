<?php
include 'connect.php'
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
	  
	<title>Edit Record</title>
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
<!--log-->

<div class = "containers">
	<table class="table">
	<caption>EDIT RECORDS</caption>
		<thead>
			<tr>
			  <th>Id<th>
			  <th>Full Name</th>
			  <th>Contact Number</th>
			  <th>Date</th>
			  <th>Product1</th>
			  <th>Qty1</th>
			  <th>Price1</th>
			  <th>Product2</th>
			  <th>Qty2</th>
			  <th>Price2</th>
			  <th>Product3</th>
			  <th>Qty3</th>
			  <th>Price3</th>
			  <th>Product4</th>
			  <th>Qty4</th>
			  <th>Price4</th>
			  <th>Product5</th>
			  <th>Qty5</th>
			  <th>Price5</th>
			  <th>TOTAL</th>
			  <th>Operations</th>	  
			</tr>
		</thead>
		<tbody>
			<?php 
			$sql = "Select * from `customer data`";
			$result = mysqli_query($con,$sql);
			while ($row = mysqli_fetch_assoc($result)) {
				$id = $row['id'];
				$fullName = $row['fullName']; 
				$contactNumber =  $row['contactNumber'];
				$utangDate = $row['utangDate'];
				$product1 = $row['product1'];
				$qty1 = $row['qty1'];
				$price1 = $row['price1'];
				$product2 = $row['product2'];
				$qty2 = $row['qty2'];
				$price2 = $row['price2'];
				$product3 = $row['product3'];
				$qty3 = $row['qty3'];
				$price3 = $row['price3'];
				$product4 = $row['product4'];
				$qty4 = $row['qty4'];
				$price4 = $row['price4'];
				$product5 = $row['product5'];
				$qty5 = $row['qty5'];
				$price5 = $row['price5'];
				$total = $row['total'];
				
				echo 
				'<tr>
					<td data-title="ID" colspan="2"><b>'.$id.'</Sb></td>
					<td data-title="Full Name">'.$fullName.'</td>
					<td data-title="Cellphone Number">'.$contactNumber.'</td>
					<td data-title="Utang Date">'.$utangDate.'</td>
					<td data-title="Product 1">'.$product1.'</td>
					<td data-title="Qty 1">'.$qty1.'</td>
					<td data-title="Price 1">'.$price1.'</td>
					<td data-title="Product 2">'.$product2.'</td>
					<td data-title="Qty 2">'.$qty2.'</td>
					<td data-title="Price 2">'.$price2.'</td>
					<td data-title="Product 3">'.$product3.'</td>
					<td data-title="Qty 3">'.$qty3.'</td>
					<td data-title="Price 3">'.$price3.'</td>
					<td data-title="Product 4">'.$product4.'</td>
					<td data-title="Qty 4">'.$qty4.'</td>
					<td data-title="Price 4">'.$price4.'</td>
					<td data-title="Product 5">'.$product5.'</td>
					<td data-title="Qty 5">'.$qty5.'</td>
					<td data-title="Price 5">'.$price5.'</td>
					<td data-title="Total"><b>₱'.$total.'</b></td>
					<td data-title="Operations"> 
					
						<a href="update.php?updateid='.$id.'" class="btn btn-dark">Update</a><br>
						<a href="delete.php?deleteid='.$id.'" class="btn btn-danger">Delete</a>
					
					</td>
				</tr>';
				
			}
			?>
	
		</tbody>
	</table>
</div>
// TODO:  EEDIT RIN ITO  
      
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

