<?php
// php code here
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
         <a href = 'login.html'>
          <i class='bx bx-log-out' id="log_out" ></i>
         </a>
     </li>
    </ul>
  </div>
  <section class="home-section"> <!-- for the dashboard-->
    <div class="main-page">
      <h1>Dashboard</h1>
    </div>
    <div class="main-content-dashboard" style="display:inline-block;vertical-align:top;">
    <img src = "suit1.jpg" alt = 'stockimg' width = '200' height="250">
    <img src = "suit2.jpg" alt = 'stockimg' width = '250' height="250">
    <img src = "suit3.jpg" alt = 'stockimg' width = '200' height="250">
    <img src = "shoe1.jpg" alt = 'stockimg' width = '200' height="250">
    <img src = "shoe2.jpg" alt = 'stockimg' width = '200' height="250">
    <img src = "hat1.jpg" alt = 'stockimg' width = '200' height="250">
    <img src = "hat2.jpg" alt = 'stockimg' width = '200' height="250">
    <img src = "shoe3.jpg" alt = 'stockimg' width = '200' height="250">
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
