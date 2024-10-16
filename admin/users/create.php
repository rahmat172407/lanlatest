<?php
    require_once('header.php');
    require_once('../conn.php');
 if(isset($_POST['sub'])){
     $uname = $_POST['uname'];
     $userName = $_POST['user_name'];
     $status = $_POST['status'];
     $password = $_POST['password'];
     $userType = $_POST['user_type'];

     date_default_timezone_set('Asia/Dacca');
     $createdAt = date("Y-m-d");

     $insertQuery = "INSERT INTO users (uname,user_name,status,password,user_type,created_at) VALUES ('$uname','$userName','$status','$password','$userType','$createdAt')";
     $execute = $conn->query($insertQuery);
     if($execute){
         $_SESSION['successMsg'] = "Created Successfully.";
         echo "<script>window.location.href='index.php';</script>";
     }else{
         $_SESSION['failMsg'] = "Cannot be Created.";
         echo "<script>window.location.href='create.php';</script>";
     }
 }
?>
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-6"><button class="btn btn-sm btn-info">Add User</button></div>
                <div class="col-md-6 text-right">
                    <a href="index.php" class="btn btn-sm btn-primary"><i class="fa fa-users"></i> Users</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <form action="" method="post">
                <div class="row">
                    <div class="col-md-2 text-right">
                        <label for="">Name</label>
                    </div>
                    <div class="col-md-4">
                        <input type="text" name="uname" placeholder="Name" class="form-control">
                    </div>
                    <div class="col-md-2 text-right">
                        <label for="">User Name</label>
                    </div>
                    <div class="col-md-4">
                        <input type="text" name="user_name" placeholder="User Name" class="form-control">
                    </div>
                 </div>
                <div class="row mt-3">
                    <div class="col-md-2 text-right">
                        <label for="">Password</label>
                    </div>
                    <div class="col-md-2">
                        <input type="password" name="password" placeholder="Password" class="form-control">
                    </div>

                    <div class="col-md-2 text-right">
                        <label for="">Status</label>
                    </div>
                    <div class="col-md-2">
                        <select name="status" id="" class="form-control">
                            <option value="">Select Status</option>
                            <option value="Active">Active</option>
                            <option value="De Active">De Active</option>
                        </select>
                    </div>
                    <div class="col-md-2 text-right">
                        <label for="">Icon</label>
                    </div>
                    <div class="col-md-2">
                        <select name="user_type" id="" class="form-control">
                            <option value="">Select Role</option>
                            <option value="Admin">Admin</option>
                            <option value="User">User</option>
                        </select>
                    </div>
                 </div>

                <div class="row mt-2">
                    <div class="col-md-12 text-center">
                        <button class="btn btn-sm btn-success" type="submit" name="sub"> <i class="fa fa-plus"></i> Create</button>

                        <button class="btn btn-sm btn-warning"> <i class="fa fa-search-minus"></i> Reset</button>

                        <button class="btn btn-info btn-sm" onclick="window.history.go(-1); return false;"> <i class="fa fa-undo"></i>  Back</button>

                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<?php require_once ('footer.php');?>