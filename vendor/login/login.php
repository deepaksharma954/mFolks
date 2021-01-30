<?php
header("Access-Control-Allow-Origin: *");

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'mfolks');
$con= mysqli_connect('localhost','root');
$con = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

if($_SERVER["REQUEST_METHOD"] == "POST"){
mysqli_select_db($con, 'mfolks');
$username =$_POST['Uname'];
$password = $_POST['Pass'];

$sql = " select * from vendor where mobile = '$username' ";

$result = mysqli_query($con, $sql);
$num = mysqli_num_rows($result);
if($num==1){
    while($row = mysqli_fetch_assoc($result)) {
      $pass_stored = $row['password'];
        if(password_verify($password,$pass_stored)) {
       ?>
        <script>
          location.replace('../list/');
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
    
    }
    
}
else{
    ?>
        <script>
          location.replace('index.php?error=2');
        </script>
        <?php
}
}
?>