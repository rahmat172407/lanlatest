<?php session_start();
    require_once('../conn.php');
    if(isset($_POST['id'])){
        $deleteId = $_POST['id'];
        $sql = "DELETE from users WHERE id='$deleteId'";
        $done = $conn->query($sql);
        if($done){
            $_SESSION['failMsg'] = "Deleted Successfully.";
            echo "<script>window.location.href='index.php';</script>";
            exit;
        }

    }
