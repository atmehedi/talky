<?php ob_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <link rel="stylesheet" href="style.css"> -->
    <?php include"style1.php";?>
    <link rel="stylesheet" href="style2.css">
  
    <title>Talky</title>
</head>
<body>
<?php include"session.php"; ?>
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
    <a href="main.php" title="Home"> <i class="fa fa-home"></i></a>
    <a href=""><i class="fa fa-map" title="local timeline"></i></a>
    <a href="" title="globle timeline"><i class="fa fa-globe"></i></a>
    <a href=""><i class="fa fa-envelope" title="mesaages"></i></a>
    
       
  </div>
  </div>
  <div class="right-half">
  <!-- profile menu -->
  <div id="mySidenav" class="sidenav">
 
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a> 
  <a href="#">&#128104; Myprofile</a>
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
  

</section>
      </div>
      <?php 

   
if(isset($_POST['changepic'])){
$post_image = $_FILES['image']['name'];
$post_image_temp = $_FILES['image']['tmp_name'];
move_uploaded_file($post_image_temp,"./images/$post_image" );
$connection = mysqli_connect('localhost','root','','talkies');
$query = "INSERT INTO `$login_session` (`id`, `picture`) VALUES (NULL, '$post_image')";
$checkQuery = mysqli_query($connection,$query);
if(!$checkQuery){
    die("query failed". mysqli_error($connection) );
}
}
?>
<?php

$query  = "SELECT    *FROM      $login_session
ORDER BY  id DESC
LIMIT     1";
// demo table




  
$select_all_photos = mysqli_query($connection, $query);
while($row = mysqli_fetch_assoc($select_all_photos)){

   $post_image = $row['picture'];

?>
<img src="images/<?php echo $post_image; ?>" alt="" width="100%"><?php } ?>
<h1 text-align="center"> <?php echo $login1; ?></h1>
<form action="" method="post" enctype="multipart/form-data" >

                       <p>change profile picture</p>
                        <input type="file" placeholder="image" name="image" required>
                      <input type="submit" name="changepic" value="change">

    </form>
<div class="respose">
  <table>
    <tr>
      <td> <a href="photo.php">photos</a> </td>
      <td> <a href="">friends</a> </td>
      <td> <a href="">posts</a> </td>
    </tr>
  </table>
  <h2 ><a href="profile/editprofile.php">Add more profile details</a></h2>
  
 
</div>



</body>
</html>