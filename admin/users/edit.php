<?php
    require_once('header.php');
    require_once('../conn.php');

 if(isset($_POST['update'])){
     $uname = $_POST['uname'];
     $userName = $_POST['user_name'];
     $status = $_POST['status'];
     $password = $_POST['password'];
     $userType = $_POST['user_type'];
     $updateId = $_POST['id'];

     date_default_timezone_set('Asia/Dacca');
     $updatedAt = date("Y-m-d");
     $updateQuery = "UPDATE users SET uname='$uname',user_name='$userName',url='$url',icon='$icon',delay='$delay',color='$color',updated_at='$updatedAt' WHERE id = $updateId";
     $execute = $conn->query($updateQuery);
     if($execute){
         $_SESSION['successMsg'] = "Updated Successfully.";
         echo "<script>window.location.href='index.php';</script>";
     }else{
         $_SESSION['failMsg'] = "Cannot be Updated.";
         echo "<script>window.location.href='edit.php';</script>";
     }
 }

if(isset($_POST['edit'])) {
    $editId = $_POST['id'];

    $insertQuery = "SELECT * FROM users WHERE id = $editId";
    $execute = $conn->query($insertQuery);
    $row = mysqli_fetch_assoc($execute);
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
                        <input type="text" name="uname" placeholder="Name" class="form-control" value="<?php echo $row['uname']; ?>">
                    </div>
                    <div class="col-md-2 text-right">
                        <label for="">User Name</label>
                    </div>
                    <div class="col-md-4">
                        <input type="text" name="user_name" placeholder="User Name" class="form-control" value="<?php echo $row['user_name']; ?>">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-2 text-right">
                        <label for="">Password</label>
                    </div>
                    <div class="col-md-2">
                        <input type="password" name="password" placeholder="Password" class="form-control" value="<?php echo $row['password']; ?>">
                    </div>

                    <div class="col-md-2 text-right">
                        <label for="">Status</label>
                    </div>
                    <div class="col-md-2">
                        <select name="status" id="" class="form-control">
                            <option value="" <?php if($row['uname'] = '') {echo "selected='selected'";}?> >Select Status</option>
                            <option value="Active" <?php if($row['uname'] = 'Active') {echo "selected='selected'";}?>>Active</option>
                            <option value="Deactive" <?php if($row['uname'] = 'Deactive') {echo "selected='selected'";}?>>De Active</option>
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