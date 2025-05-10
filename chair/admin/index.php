<?php require "admin.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible"
          content="IE=edge">
    <meta name="viewport" 
          content="width=device-width, 
                   initial-scale=1.0">
    <title>Admin - </title>
    <link rel="stylesheet" 
          href="style.css">
</head>

<body>
  
    <!-- for header part -->
    <header>

        <div class="logosec">
            <div class="logo"><?= $system_set['b_name'] ?></div>
            <img src="icon/menu.png"
                class="icn menuicn" 
                id="menuicn" 
                alt="menu-icon">
        </div>

        <div class="searchbar">
            <input type="text" 
                   placeholder="Search">
            <div class="searchbtn">
              <img src="icon/search.png"
                    class="icn srchicn" 
                    alt="search-icon">
              </div>
        </div>

        <div class="message">
            <div class="circle"></div>
            <img src="icon/noti.png"
                 class="icn" 
                 alt="">
            <a class="dp" href="?q=profile">
              <img src="icon/logo.png" class="dpicn" alt="dp">
            </a>
        </div>

    </header>

    <div class="main-container">
        <div class="navcontainer">
            <nav class="nav">
                <div class="nav-upper-options">
                    <a href="?q=dashboard" class="nav-option option1">
                        <img src="icon/dashboard.png"
                            class="nav-img" 
                            alt="dashboard">
                        <h3> Dashboard</h3>
                    </a>

                    <a href="?q=order" class="nav-option option2">
                        <img src="icon/product.png"
                            class="nav-img" 
                            alt="articles">
                        <h3> Order</h3>
                    </a>

                    <a href="?q=product" class="nav-option option3">
                        <img src="icon/report.png"
                            class="nav-img" 
                            alt="report">
                        <h3> Product</h3>
                    </a>

                    <a href="?q=section" class="nav-option option4">
                        <img src="icon/bank.png"
                            class="nav-img" 
                            alt="institution">
                        <h3> Section</h3>
                    </a>

                    <a href="?q=profile" class="nav-option option5">
                        <img src="icon/profile.png"
                            class="nav-img" 
                            alt="blog">
                        <h3> Profile</h3>
                    </a>

                    <a href="?q=setting" class="nav-option option6">
                        <img src="icon/setting.png"
                            class="nav-img" 
                            alt="settings">
                        <h3> Settings</h3>
                    </a>

                    <a href="logout.php" class="nav-option logout">
                        <img src="icon/logout.png"
                            class="nav-img" 
                            alt="logout">
                        <h3>Logout</h3>
                    </a>

                </div>
            </nav>
        </div>
        <div class="main">

            <div class="searchbar2">
                <input type="text" 
                       name="" 
                       id="" 
                       placeholder="Search">
                <div class="searchbtn">
                  <img src="icon/search.png"
                        class="icn srchicn" 
                        alt="search-button">
                  </div>
            </div>

            <!-- ========================================================================= -->
            <?php
                if(isset($_REQUEST['q'])){
                    $q = $_REQUEST['q'];
                    if($q == "dashboard" || $q == ""){
                        include "sec/dashboard.php";
                    }elseif($q == "setting"){
                        include "sec/system.php";
                    }elseif($q == "profile"){
                        include "sec/profile.php";
                    }elseif($q == "order"){
                        include "sec/order.php";
                    }elseif($q == "product"){
                        include "sec/product.php";
                    }elseif($q == "section"){
                        include "sec/section.php";
                    }
                }else{
                    include "sec/dashboard.php";
                }
            ?>
            <!-- ========================================================================= -->
        </div>
    </div>

    <script>
        let menuicn = document.querySelector(".menuicn");
        let nav = document.querySelector(".navcontainer");

        menuicn.addEventListener("click", () => {
            nav.classList.toggle("navclose");
        })

    </script>
</body>
</html>
