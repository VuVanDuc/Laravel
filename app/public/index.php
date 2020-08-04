<HTML>
<body>

<?php 
$username = $password = "";
$password_err = $username_err = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(empty($_POST["name"])){
        $username_err = "Ten dang nhap khong duoc de trong";
    }
    else {
        $username = test_input($_POST["name"]);
    }
    if(empty($_POST["password"])){
        $password_err = "Mat khau khong duoc de trong";
    }
    else{
        $password = test_input($_POST["password"]);
    }
    
}
function test_input($data){
    $data = trim($data);
    $data = stripcslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
<p>Username</p>
<input type="text" name="name" id="username" value="<?php echo $username ?>"><br>
<p><?php echo $username_err ?></p>
<p>Password</p>
<input type="password" name="password" id="password" value="<?php echo $password ?>"><br>
<p><?php echo $password_err ?></p>
<button type="submit">Dang nhap</button>
</form>   

<?php
if(!empty($username) && !empty($password)){
    echo "Username: ";
    echo $username;
    echo "<br>";
    echo "Password: ";
    echo $password;
}
?>
</body>
</HTML>