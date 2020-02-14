<?php
$query  = "SELECT    *FROM   $login_session ";
// demo table




  
$select_all_photos = mysqli_query($connection, $query);
while($row = mysqli_fetch_assoc($select_all_photos)){

   $post_image = $row['picture'];

?>
<img src="./images/<?php echo $post_image; ?>" alt="" width="100%"><?php } ?>











?>