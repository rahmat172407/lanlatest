<?php
    require_once('header.php');
    require_once('../conn.php');
 if(isset($_POST['sub'])){
     $fullName = $_POST['full_name'];
     $shortName = $_POST['short_name'];
     $url = $_POST['url'];
     $icon = $_POST['icon'];
     $delay = $_POST['delay'];
     $color = $_POST['color'];
     date_default_timezone_set('Asia/Dacca');
     $createdAt = date("Y-m-d");
     $insertQuery = "INSERT INTO application_soft (full_name,short_name,url,icon,delay,color,created_at) VALUES ('$fullName','$shortName','$url','$icon','$delay','$color','$createdAt')";
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
                <div class="col-md-6"><button class="btn btn-sm btn-info">Add Application Software</button></div>
                <div class="col-md-6 text-right">
                    <a href="index.php" class="btn btn-sm btn-primary"><i class="fa fa-star-of-david"></i> All Software</a>
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
                        <input type="text" name="full_name" placeholder="Full Name of Application" class="form-control">
                    </div>
                    <div class="col-md-1 text-right">
                        <label for="">URL</label>
                    </div>
                    <div class="col-md-5">
                        <input type="text" name="url" placeholder="Full Link of Application" class="form-control">
                    </div>
                 </div>
                <div class="row mt-3">
                    <div class="col-md-2 text-right">
                        <label for="">Application</label>
                    </div>
                    <div class="col-md-4">
                        <input type="text" name="short_name" placeholder="Short Name of Application" class="form-control">
                    </div>
                    <div class="col-md-1 text-right">
                        <label for="">Icon</label>
                    </div>
                    <div class="col-md-2">
                        <input type="text" name="icon" placeholder="Icon Name of Application" class="form-control">
                    </div>
                    <div class="col-md-1 text-right">
                        <label for="">Delay</label>
                    </div>
                    <div class="col-md-2">
                        <input type="number" name="delay" placeholder="Delay" class="form-control">
                    </div>
                    <div class="col-md-1 text-right">
                        <label for="">Color</label>
                    </div>
                    <div class="col-md-1">
                        <input type="color" name="color" placeholder="Color Code e.i #adas12" class="form-control">
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