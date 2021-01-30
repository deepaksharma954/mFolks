<?php
header("Access-Control-Allow-Origin: *");

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'mfolks');

$con = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);



$username =$_POST['Uname'];
$password = $_POST['Pass'];
$password = password_hash($password,PASSWORD_BCRYPT);

$sql = " select * from user where username ='$username'";

$result = mysqli_query($con, $sql);
$num = mysqli_num_rows($result);
if($num == 0)
{
   $sql = "INSERT INTO user (username,password) VALUES ('$username', '$password')";
   mysqli_query($con, $sql);
   ?>
        <script>
        location.replace('../login/'); 
        </script>
        <?php
   
}
else{
    ?>
    <script>
      location.replace('index.php?error=1');
    </script>
    <?php
}
?>