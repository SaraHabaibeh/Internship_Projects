<?php
include 'connect2.php';
// php code heree
if(isset($_POST['create'])){
  $item_id =$_POST['itemid'];
  $customer_id = $_POST['customerid'];
  $bill_quantity = $_POST['quantitybought'];
  $bill_price = $_POST['payment'];
  $user_id = $_POST['user_id'];
  $sql= "INSERT INTO bill(item_id, cus_id, bill_quantity, bill_price, user_id) 
  VALUES('$item_id', '$customer_id', '$bill_quantity', '$bill_price', '$user_id')";
   if (mysqli_query($conn,$sql)) {
      echo 'Item added successfully';
  };
};

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style2.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="sidebar">
    <div class="logo-details">
      <i class='bx bx-hive'></i>
        <div class="logo_name">Ekopatible</div>
        <i class='bx bx-menu' id="btn" ></i>
    </div>
    <ul class="nav-list">
      <li>
         <i class='bx bx-search' ></i>
         <input type="text" placeholder="Search...">
         <span class="tooltip">Search</span>
      </li>
      <li>
        <a href="index2.php">
          <i class='bx bx-grid-alt'></i>
          <span class="links_name">Dashboard</span>
        </a>
         <span class="tooltip">Dashboard</span>
      </li>
      <li>
       <a href="insert2.php">
         <i class='bx bx-plus-circle'></i>
         <span class="links_name">Add Items</span>
       </a>
       <span class="tooltip">Add Items</span> <!-- was users-->
     </li>
     <li>
       <a href="payments2.php">
         <i class='bx bx-receipt'></i>
         <span class="links_name">Display Payments</span>
       </a>
       <span class="tooltip">Payment</span> <!-- was messages-->
     </li>
     <li>
       <a href="stock2.php">
         <i class='bx bx-box'></i>
         <span class="links_name">Stock</span>
       </a>
       <span class="tooltip">Stock</span>
     </li>
     <li>
       <a href="create2.php">
         <i class='bx bxs-file-plus'></i>
         <span class="links_name">Create Bill</span>
       </a>
       <span class="tooltip">Create</span>
     </li>
     <li class="profile">
         <div class="profile-details">
           <!--<img src="profile.jpg" alt="profileImg">-->
           <div class="name_job">
             <div class="name">Sara Habaibeh</div>
             <div class="job">Manager</div>
           </div>
         </div>
         <i class='bx bx-log-out' id="log_out" ></i>
     </li>
    </ul>
  </div>
  <section class="home-section"> <!-- for the dashboard-->
    <div class="main-page">
      <h1>Create Payments</h1>
      <p></p>
    </div>
    <div class = "main-content-create">
      <?php require_once 'create2.php';?>
      <form action = "create2.php" method = "POST">
        <div action = "" method = "POST">
          <label> Item ID </label>
          <input type = "text" name="itemid">
        </div>
        <div class = "form-group">
          <label> Customer ID</label>
          <input type = "text" name="customerid">
        </div>
        <div class = "form-group">
          <label> Quantity bought </label>
          <input type = "text" name="quantitybought">
        </div>
        <div class = "form-group">
          <label>Total Payment</label>
          <input type = "text" name="payment">
        </div>
        <div class = "form-group">
          <label>Your User ID </label>
          <input type = "text" name="user_id">
        </div>
        <div class = "form-group">
          <button type = "submit" name = "create"> Create </button>
          <button type = "submit" name = "back"> Back </button>
        </div>
      </form>
    </div>
  </section>
  <script>
  let sidebar = document.querySelector(".sidebar");
  let closeBtn = document.querySelector("#btn");
  let searchBtn = document.querySelector(".bx-search");

  closeBtn.addEventListener("click", ()=>{
    sidebar.classList.toggle("open");
    menuBtnChange();//calling the function(optional)
  });

  searchBtn.addEventListener("click", ()=>{ // Sidebar open when you click on the search iocn
    sidebar.classList.toggle("open");
    menuBtnChange(); //calling the function(optional)
  });

  // following are the code to change sidebar button(optional)
  function menuBtnChange() {
   if(sidebar.classList.contains("open")){
     closeBtn.classList.replace("bx-menu", "bx-menu-alt-right");//replacing the iocns class
   }else {
     closeBtn.classList.replace("bx-menu-alt-right","bx-menu");//replacing the iocns class
   }
  }
  </script>
</body>
</html>