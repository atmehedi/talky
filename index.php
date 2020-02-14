

<?php ob_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- <link rel="stylesheet" href="style.css"> -->
    <?php include "style.php";  ?>
    <title>Talky</title>
</head>
<body>
    <div class="navbar">
        <section class='navContain'>
            <div class="left-half">
                    <h1 id='logo'>Talky</h1>
            </div>
        <div class="right-half">
            <div class="search">
            <form action="">
                <input type="text">
                <input type="submit" value='search'>
            </form>
        </div>
        </div>
        </section>
    </div>
  <div class="topmenu">
      <h1>Login</h1>
  </div>
  <?php include "login.php";?>
  <!-- Sign up from here -->
  <div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <div class="signup">
    <script>
                    function myFunction() {
                var x = document.getElementById("psww").value;     
                var x = document.getElementById("psww");
                var y = "hehe";
                var e = x.value;
                var n = e.length;
               if(n < 6){
               alert("password must be greater than 6  !!\nsignUp button will be availabe after entering sufficiant password !! ");
               document.getElementById("btns").style.display = "none";
              

                 }
                 else{
                    document.getElementById("btns").style.display = "block"; 
                   
                 }
                 
               }
            
                    </script>
   <!-- signupinclude -->
           <?php include "signup.php"; ?>
    </div>
  </div>
  

 <span style="font-size:30px; cursor:pointer" onclick="openNav()">Signup for new account !!</span></div>
  
  <script>
  function openNav() {
    document.getElementById("mySidenav").style.width = "100%";
  }
  
  function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
  }
  </script>
  
</body>
</html>