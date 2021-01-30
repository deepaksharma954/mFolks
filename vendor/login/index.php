<!DOCTYPE html>
<html>

<head>
    <title>Login Form</title>
    <link rel="stylesheet" type="text/css" href="common.css">
</head>

<body>
    <h2>Shopkeeper Login Page</h2><br>
    <div class="login">
        <form id="login" method="POST" action="login.php">
        <div class="error"><?php if(isset($_GET['error'])) { if($_GET['error']==1) { echo 'ivalid credientails.';} } ?></div>    
        <div class="error2"><?php if(isset($_GET['error'])) { if($_GET['error']==2){ echo 'Vendor doesnot exist.';} } ?></div>
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
            <input type="submit" name="log" id="log" value="Log In Here">
            <br><br>

        </form>
    </div>
</body>

</html>