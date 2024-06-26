<?php
include "../../Model/user.php";
include '../../Model/session.php';
include '../../Model/auth_check.php';
?>
<!DOCTYPE html>
<html>

<head>
  <title>Finance Dashboard</title>
  <link rel="stylesheet" href="../../Asset/CSS/finance.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx" crossorigin="anonymous" />
  <title>Finance</title>
</head>
<?php include("config.php"); ?>

<body>

  <div class="sidebar" id='sidebar'>
    <div class="headeri">
      <button type="button" class="toggle" id="toggle">
        <span></span>
      </button>
      <div class="admin-dashboard">
        <h1>Finance Dashboard</h1>
      </div>
      <div class="header">
        <div class="user-profile">
          <span>Username</span>
          <div class="dropdown-menu">
            <ul>
              <li><a href="#">Profile</a></li>
              <li><a href="#">Settings</a></li>
              <li><a href="../../View/Login/logout.php">Logout</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <ul>
      <li><a href="#"><i class="fa fa-home" aria-hidden="true"></i> Dashboard</a></li>
      <br>
      <li><a href="#"><i class="fas fa-clipboard-check" aria-hidden="true"></i> Check Stock</a></li>
      <br>
      <li><a href="#"><i class="fas fa-money-bills" aria-hidden="true"></i> Buy Stock</a></li>
      <br>
      <li><a href="#"><i class="fa fa-sharp fa-light fa-file-pen" aria-hidden="true"></i> Make Requests</a></li>
      <br>
    </ul>
  </div>

  

  <script>
    var btn = document.querySelector('.toggle');
    var btnst = true;
    btn.onclick = function() {
      if (btnst == true) {
        document.querySelector('.toggle span').classList.add('toggle');
        document.getElementById('sidebar').classList.add('sidebarshow');
        btnst = false;
      } else if (btnst == false) {
        document.querySelector('.toggle span').classList.remove('toggle');
        document.getElementById('sidebar').classList.remove('sidebarshow');
        btnst = true;
      }
    }
  </script>
  <script rel="script" href="insertStockContr.js">

  </script>

</body>

</html>