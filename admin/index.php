<?php session_start();
    require_once('conn.php');

if(isset($_POST['signin'])){
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $uname = test_input($_POST["user_name"]);
    $bpass = test_input($_POST["password"]);
    //$upass = md5($bpass);

    $sql = "SELECT * from users where user_name = '$uname' AND password = '$bpass' AND status = 'Active'";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result);

    if($row['user_name'] != "" && $row['password'] != ""){
        $_SESSION["error"] = 0;
        $_SESSION["login"] = "hundredTrue";
        $_SESSION["msg"] = "Please Enter User Name and Password";
        session_write_close();
        header('Location: dashboard.php');
    }
    else{
        $_SESSION["msg"] = "Username or Password is incorrect !!";
        $_SESSION["error"] = 1;
        session_write_close();
        header('Location: index.php');
    }
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login : BAF</title>
    <meta charset="utf-8">
    <link href="css/style.css" rel='stylesheet' type='text/css' />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="ui/img/favicon.png" type="image/x-icon">
</head>
<body>
    <div class="main">
		<div class="login-form">
			<h1>Bangladesh Air Force</h1>
            <?php if(isset($_SESSION['msg'])){
                echo "<p style='color:red'>User Name and Password is not correct..</p>";
                }
            unset($_SESSION['msg']);
            session_destroy();
            ?>
            <div class="head">
                <img src="css/baf-logo.png" alt=""/>
            </div>
            <form action="" method="post">
                <input type="text" class="text" name="user_name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'USERNAME';}" >

                <input type="password" name="password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}">
                <div class="submit">
                    <input type="submit" onclick="myFunction()" value="LOGIN" name="signin" >
                </div>
                <p><a href="#">BAF Communication Unit</a></p>
            </form>
        </div>
    </div>
</body>
</html>