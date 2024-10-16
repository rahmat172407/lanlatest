<?php
    require_once('header.php');
    require_once('../conn.php');


 if(isset($_POST['update'])){
     $fullName = $_POST['full_name'];
     $shortName = $_POST['short_name'];
     $url = $_POST['url'];
     $icon = $_POST['icon'];
     $delay = $_POST['delay'];
     $color = $_POST['color'];
     $updateId = $_POST['id'];

     date_default_timezone_set('Asia/Dacca');
     $updatedAt = date("Y-m-d");
     $updateQuery = "UPDATE application_soft SET full_name='$fullName',short_name='$shortName',url='$url',icon='$icon',delay='$delay',color='$color',updated_at='$updatedAt' WHERE id = $updateId";
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

    $insertQuery = "SELECT * FROM application_soft WHERE id = $editId";
    $execute = $conn->query($insertQuery);
    $row = mysqli_fetch_assoc($execute);
 }

?>
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-6"><button class="btn btn-sm btn-info">Add Application Software</button></div>
                <div class="col-md-6 text-right">
                    <a href="index.php" class="btn btn-sm btn-primary"><i class="fa fa-star-of-david"></i> All Software</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <form action="" method="post">
                <input type="hidden" value="<?php echo $row['id'];?>" name="id">
                <div class="row">
                    <div class="col-md-2 text-right">
                        <label for="">Name </label>
                    </div>
                    <div class="col-md-4">
                        <input type="text" name="full_name" placeholder="Full Name of Application" class="form-control" value="<?php echo $row['full_name'];?>">
                    </div>
                    <div class="col-md-1 text-right">
                        <label for="">URL</label>
                    </div>
                    <div class="col-md-5">
                        <input type="text" name="url" placeholder="Full Link of Application" class="form-control" value="<?php echo $row['url'];?>">
                    </div>
                 </div>
                <div class="row mt-3">
                    <div class="col-md-2 text-right">
                        <label for="">Application </label>
                    </div>
                    <div class="col-md-4">
                        <input type="text" name="short_name" placeholder="Short Name of Application" class="form-control" value="<?php echo $row['short_name'];?>">
                    </div>
                    <div class="col-md-1 text-right">
                        <label for="">Icon</label>
                    </div>
                    <div class="col-md-2">
                        <input type="text" name="icon" placeholder="Icon Name of Application" class="form-control" value="<?php echo $row['icon'];?>">
                    </div>
                    <div class="col-md-1 text-right">
                        <label for="">Delay</label>
                    </div>
                    <div class="col-md-2">
                        <input type="number" name="delay" placeholder="Delay" class="form-control" value="<?php echo $row['delay'];?>">
                    </div>
                    <div class="col-md-1 text-right">
                        <label for="">Color</label>
                    </div>
                    <div class="col-md-1">
                        <input type="color" name="color" placeholder="Color Code e.i #adas12" class="form-control" value="<?php echo $row['color'];?>">
                    </div>
                 </div>

                <div class="row mt-2">
                    <div class="col-md-12 text-center">
                        <button class="btn btn-sm btn-success" type="submit" name="update"> <i class="fa fa-plus"></i> Update</button>

                        <button class="btn btn-sm btn-warning"> <i class="fa fa-search-minus"></i> Reset</button>

                        <button class="btn btn-info btn-sm" onclick="window.history.go(-1); return false;"> <i class="fa fa-undo"></i>  Back</button>

                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<?php require_once ('footer.php');?>