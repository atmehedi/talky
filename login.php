<div class="login">
      <form action="" method="post">
          <label for="username">Username</label></br>
          <input type="text" placeholder="username " name="username" id="input"></br>
          <label for="password">Password</label></br>
          <input type="password" name="password" placeholder="password" id="input"><br>
          <input type="submit" value="login" id="btn" name="login">
      </form>
      <?php
      ob_start();
       session_start();
                    if(isset($_POST['submit'])){
                        $firstname = $_POST['firstname'];
                        $lastname = $_POST['lastname'];
                        $username = $_POST['username'];
                        $password = $_POST['password'];
                        $repassword = $_POST['repassword'];
                        $bd = $_POST['bd'];
                        $gender = $_POST['gender'];    
                 
                    $connection = mysqli_connect('localhost','root','','talkies');
                    if(!$connection){
                        echo "not connected";
                    }
                    $username = mysqli_real_escape_string($connection,  $username);
                    $password = mysqli_real_escape_string($connection, $password);
                    $repassword = mysqli_real_escape_string($connection, $repassword);
                  
                    ?>
                    
                    <?php
                     $sql="SELECT * FROM users where (username='$username');";
                     $res=mysqli_query($connection,$sql);
                    if($password != $repassword){
                        echo "<h3>password does not matches !!!</h3></br>";
                    } 
                  else if(mysqli_num_rows($res) > 0) { // email checks here
                    // output data of each row
                    $row = mysqli_fetch_assoc($res);
                    if($username==$row['username'])
                    {
                        echo "<h3>Username already exists !!! please log in !</h3></br>";
                    }
                }
                    //emailchecks end
                    else{
                        $hashFormat = "$2y$10$";
                        $salt = "dowhateveryouwanttoyourself54";
                        $hashF_and_salt = $hashFormat . $salt;
                        $password = crypt($password , $hashF_and_salt);
                        $repassword = crypt($repassword , $hashF_and_salt);



                  $query="INSERT INTO `users` (`firstname`, `lastname`, `username`, `password`, `Cpassword`, `bd`, `gender`) VALUES ('$firstname', '$lastname', '$username', '$password', '$repassword', '$bd', '$gender')";
                    
                $result= mysqli_query($connection,$query);
               if($result){
                    echo "<h1>Account has been successfully created</h1>";
                 
                    $mysqli = new mysqli('localhost','root','','talkies');

                    if ($mysqli->connect_errno) {
                        printf("Connect failed: %s\n", $mysqli->connect_error);
                        exit();
                    }
                    
                    $objects_table = 
                        "CREATE TABLE IF NOT EXISTS $username (
                            ID bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
                            picture text NOT NULL,
                            PRIMARY KEY (ID)
                        )";
                    
                    if ($mysqli->query($objects_table) === TRUE) {
                      
                     echo "fuck off";

                    }
                    
                     
                }
                }
            }
            ?>
                <?php
                 if($_SERVER["REQUEST_METHOD"] == "POST") {
                 if(isset($_POST['login'])){
                 $username = $_POST['username'];
                 $password = $_POST['password'];
                 $connection = mysqli_connect('localhost','root','','talkies');
                 if(!$connection){
                     echo "not connected";
                 }
                $username = mysqli_real_escape_string($connection,$username);
                $password = mysqli_real_escape_string($connection,$password);
                $hashFormat = "$2y$10$";
                $salt = "dowhateveryouwanttoyourself54";
                $hashF_and_salt = $hashFormat . $salt;
                $password = crypt($password , $hashF_and_salt);
                 $connection = mysqli_connect('localhost','root','','talkies');
                 if(!$connection){
                     echo "not connected";
                 }
                 $lquery = "SELECT * FROM users WHERE username = '{$username}'";
                
                  $result = mysqli_query($connection,$lquery);
                  while($row = mysqli_fetch_assoc($result)){
                    $dusername = $row['username'];
                    $dpassword = $row['password'];
                
                }
               if(isset($dusername)){
                if($username == $dusername && $password == $dpassword){
                    $_SESSION['login_user'] = $dusername;
                    header("Location:main.php");
                } 
                else{
                    echo "wrong password";
                }
               }
               else{
                   echo "username is not exists";
               }

               
            
            
         }
        }
                  
                 ?>


  </div>