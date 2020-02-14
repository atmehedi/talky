<?php ob_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <link rel="stylesheet" href="style.css"> -->
    <?php include "style1.php";    ?>
   <?php include('session.php'); ?>
    <title>Talky</title>
</head>
<body>
    <div class="navbar">
        <section class='navContain'>
            <div class="left-half">
                    <h1 id='logo'>Talky</h1>
            </div>
        <div class="right-half">
        <div class="searchbar">
            <form action="">
                <input type="text" id="searchi">
               <input type="submit" value="search" name="search" id="search">
            </form>
        </div>
        </div>
        </section>
    </div>
  <div class="topmenu">
  <section>
  <div class="left-half">
 
<div class="icons">
    <a href="" title="Home"> <i class="fa fa-home"></i></a>
    <a href=""><i class="fa fa-map" title="local timeline"></i></a>
    <a href="" title="globle timeline"><i class="fa fa-globe"></i></a>
    <a href=""><i class="fa fa-envelope" title="mesaages"></i></a>
    
       
  </div>
  </div>
  <div class="right-half">
  <!-- profile menu -->
  <div id="mySidenav" class="sidenav">
 
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a> 
  <a href="profile.php">&#128104; Myprofile</a>
  <a href="#">&#128105; Myfriends</a>
  <a href = "Logout.php">&#9888; logOut</a>
</div>



<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>

<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "30%";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>
  
  </div>
  </section>
     
  </div>
 <!-- database demo -->


 
  
 

</body>
</html>