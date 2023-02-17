<?php 
include 'connect2.php';


if(isset($_GET["page"]))
{
  $page=$_GET["page"];
}
else
{
  $page=1;
}
$num_per_page = 02;
$start_from=($page-1)*02;
$sql="SELECT * FROM items limit $start_from,$num_per_page";
$result = mysqli_query($conn,$sql);

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
      <h1>Display Stock</h1>
    </div>
    <table>
      <tr>
       <th>Item ID</th>
       <th>Item Name</th>
       <th>Serial Number</th>
       <th>Available Quantity</th>
       <th>Item Price</th>
       <th>Admin User</th>
      </tr>
      <?php 
      // include 'connect2.php';
      // $sql = 'SELECT * FROM items';
      // $result = mysqli_query($conn,$sql);
      // if ($result-> num_rows>0){
      //   While($row = $result-> fetch_assoc()) {
      //     echo "<tr><td>".$row['item_id'] ."</td><td>". $row["item_name"]."</td><td>". $row["item_serial"]."</td><td>". $row["item_quantity"]."</td><td>". $row["item_price"]."</td><td>". $row["user_id"] . "</td></tr>";
      //   };
      //   echo "</table>";
      // }
      while($rows= mysqli_fetch_array($result))
        {
      ?>
      <tr>
      <td><?php echo $rows['item_id'];?></td>
            <td><?php echo $rows['item_name'];?></td>
            <td><?php echo $rows['item_serial'];?></td>
            <td><?php echo $rows['item_quantity'];?></td>
            <td><?php echo $rows['item_price'];?></td>
            <td><?php echo $rows['user_id'];?></td>
        </tr>  
        <?php
        }
        ?>
    </table>

    <?php
    $pr_sql="SELECT * FROM items";
    $pr_result= mysqli_query($conn,$pr_sql);
    $total_records=mysqli_num_rows($pr_result);
    $total_pages=ceil($total_records/$num_per_page);
    
    if($page>1){
      echo "<a href = 'stock2.php?page=".($page-1)."' class ='btn btn-danger'> Previous </a>";
    }

    for($i=1;$i<=$total_pages;$i++)
    {
        echo "<a href='stock2.php?page=".$i."' class='btn btn-primary'>".$i."</a>" ;
    }

    if($i>$page){
      echo "<a href = 'stock2.php?page=".($page+1)."' class='btn btn-danger'>Next</a>";
    }
    
    ?>
    
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