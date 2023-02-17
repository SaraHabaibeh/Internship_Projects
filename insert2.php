<?php
include 'connect2.php';
// php code hereee
if(isset($_POST['save'])){
  $item_name =$_POST['item'];
  $item_serial = $_POST['serial'];
  $item_quantity = $_POST['quantity'];
  $item_price = $_POST['price'];
  $user_id = $_POST['user_id'];
  $sql = "INSERT INTO items(item_name, item_serial, item_quantity, item_price, user_id) 
  VALUES('$item_name', '$item_serial', '$item_quantity', '$item_price', '$user_id')";
   if (mysqli_query($conn,$sql)) {
      echo 'Item added successfully';
  };
};

if(isset($_POST['back'])) {
  header("Location:welcome.php");
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
      <h1>Insert Items</h1>
      <p></p>
    </div>
    <div class = "main-content-insert">
      <?php require_once 'insert2.php';?>
      <form action = "insert2.php" method = "POST">
        <div action = "" method = "POST">
          <label> Product name </label>
          <input type = "text" name="item">
        </div>
        <div class = "form-group">
          <label> Serial number</label>
          <input type = "text" name="serial">
        </div>
        <div class = "form-group">
          <label> Item Quantity </label>
          <input type = "text" name="quantity">
        </div>
        <div class = "form-group">
          <label>Product Price</label>
          <input type = "text" name="price">
        </div>
        <div class = "form-group">
          <label>Your User ID </label>
          <input type = "text" name="user_id">
        </div>
        <div class = "form-group">
          <button type = "submit" name = "save"> Save </button>
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