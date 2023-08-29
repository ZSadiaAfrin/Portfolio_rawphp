<?php
session_start();
require '../db.php';
require '../dashboard_parts/header.php';
$select_logos = "SELECT * FROM logos";
$select_logos_res = mysqli_query($database_connection, $select_logos);
// $after_assoc_logo = mysqli_fetch_assoc($select_logos_res);


// $hostname="localhost";
// $hostuser_name='root';
// $password='';
// $database_name='sadia';
// $database_connection=mysqli_connect($hostname,$hostuser_name,$password,$database_name);

// print_r($after_assoc['name']); 
?>
<div class="row">
    <div class="col-lg-8">
        <div class="card">
            <div class="card-header">
                <h1>Lists of logos</h1>
            </div>
            <div class="card-body">

                <table class="table table-striped">
                    <tr>
                        <th>SL</th>
                        <th>Logos</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    <?php foreach ($select_logos_res as $sl => $logo) { ?>
                        <tr>
                            <td><?= $sl + 1 ?></td>
                            <td><img height="100" src="../uploads/logo/<?= $logo['logo'] ?>" alt=""></td>
                            <td>
                                <a class="btn btn-<?= $logo['status'] ? 'success' : 'info' ?>" href="logo_status.php?id=<?= $logo['id'] ?>"><?= $logo['status'] ? 'Active' : 'Deactivate' ?></a>
                            </td>
                            <td>Action</td>
                        </tr>
                    <?php } ?>
                </table>

            </div>
        </div>
    </div>

    <div class="col-lg-4">
        <div class="card" style="height:auto">
            <div class="card-header">
                <h3>Add Card Logo</h3>
            </div>
            <div class="card-body">
                <div class="mb-3">
                    <?php if (isset($_SESSION['error'])) {  ?>
                        <div class="alert alert-danger"><?= $_SESSION['error'] ?></div>
                    <?php }
                    unset($_SESSION['error']) ?>
                </div>
                <form action="logo_post.php" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <input type="file" name="logo_name" class="form-control">
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary">Add Logo</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php
require '../dashboard_parts/footer.php';
?>