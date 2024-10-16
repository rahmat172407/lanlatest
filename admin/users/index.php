<?php
    require_once('header.php');
    require_once('../conn.php');

    $selectQuery = "SELECT * FROM users ORDER BY id ASC";
    $result = $conn->query($selectQuery);
    $sl=1;
?>
<style>
    .button-borderless{
        border: none;
        background: none;
    }
</style>
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-6"><button class="btn btn-sm btn-info">List of Users</button></div>
                <div class="col-md-6 text-right">
                    <a href="create.php" class="btn btn-sm btn-primary"><i class="fa fa-plus"></i> Add New</a>
                </div>
            </div>
            <?php if(isset($_SESSION['successMsg'])){
                echo "<p style='color: green;text-align:center;margin:0;font-size: 20px;background:#D9FCDF'>".$_SESSION['successMsg']."</p>";}
            if(isset($_SESSION['failMsg'])){
                echo "<p style='color:red;text-align:center;margin:0;font-size:20px; background:#FCD9DC'>".$_SESSION['failMsg']."</p>";}
            unset($_SESSION['successMsg']);
            unset($_SESSION['failMsg']);
            ?>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-lg-12">
                    <table id="omarTable" class="table table-bordered table-striped table-center" cellspacing="0" width="100%" >
                        <thead>
                        <tr class="head-tr-css">
                            <th width="6%" class="text-center">SN</th>
                            <th width="35%">Name</th>
                            <th width="25%">User Name</th>
                            <th width="10%">Status</th>
                            <th width="10%">User Role</th>
                            <th width="8%" class="text-center">Action</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr class="head-tr-css">
                            <th colspan="6"></th>
                        </tr>
                        </tfoot>
                        <tbody>
                        <?php while($single = $result->fetch_assoc()) { ?>
                            <tr>
                                <td class="text-center"><?php echo $sl; ?></td>
                                <td><?php echo $single['uname'];?></td>
                                <td><?php echo $single['user_name'];?></td>
                                <td><?php echo $single['status'];?></td>
                                <td><?php echo $single['user_type'];?></td>
                                <td class="text-center">
                                    <form action="edit.php" method="post" style="display: inline;">
                                        <input type="hidden" value="<?php echo $single['id'];?>" name="id">
                                        <button type="submit" class="button-borderless" name="edit">
                                            <span class="text-success"><i class="fa fa-pencil-alt"></i></span>
                                        </button>
                                    </form>
                                    <form action="delete.php" method="post" style="display: inline;">
                                        <input type="hidden" value="<?php echo $single['id'];?>" name="id">
                                        <button type="submit" class="button-borderless" onclick="return confirm('Are you sure to delete ?');">
                                            <span class="text-danger"><i class="fa fa-times"></i></span>
                                        </button>
                                    </form>
                                </td>

                            </tr>
                        <?php
                            $sl++;
                         }
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once ('footer.php');?>
<script type="text/javascript" src='../ui/dataTable/jquery-3.3.1.js'></script>
<script type="text/javascript" src='../ui/dataTable/jquery.dataTables.min.js'></script>
<script type="text/javascript" src='../ui/dataTable/dataTables.bootstrap4.min.js'></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#omarTable').DataTable();
    });
</script>
