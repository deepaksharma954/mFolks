<!DOCTYPE html>
<html>

<head>
    <title>Login Form</title>
    <link rel="stylesheet" type="text/css" href="common.css">
</head>

<body>
    <h2>Vendor Registration Page</h2><br>
    <div class="login">
        <form id="login" method="POST" action="registration.php">
        <div class="error"><?php if(isset($_GET['error'])) { echo 'Vendor already registered'; } ?></div>    
        <label><b>Mobile    
        </b>    
        </label>
            <input type="tel" name="Uname" id="Uname" placeholder="Enter Mobile Number">
            <br><br>
            <label><b>Password     
        </b>    
        </label> 
            <input type="Password" name="Pass" id="Pass" placeholder="Password">
            <br><br>
            <input type="submit" name="log" id="log" value="Register">
            <br><br>

        </form>
    </div>
</body>

</html>