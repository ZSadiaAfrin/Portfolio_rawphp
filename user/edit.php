<?php
require '../login_check.php';
$hostname = 'localhost';
$hostuser_name = 'root';
$password = '';
$dbname = 'sadia';
$database_connection = mysqli_connect($hostname, $hostuser_name, $password, $dbname);
$id = $_GET['id'];
$edit = "SELECT * FROM user_tables WHERE id=$id";
$edit_users = mysqli_query($database_connection, $edit);
$after_asoc = mysqli_fetch_assoc($edit_users);






?>
<?php
require '../dashboard_parts/header.php';
?>

<div class="row ">
    <div class="col-lg-6 ">
        <div class="card">
            <div class="card-header text-center bg-primary ">
                <h1 class="text-white">Edit User</h1>
            </div>
            <div class="card-body">
                <form action="update_user.php" method="POST">
                    <div class="mb-3">
                        <label for="" class="form-level">Name</label>
                        <input type="hidden" name="id" class="form-control" value="<?= $id ?>">
                        <input type="text" name="name" class="form-control" value="<?= $after_asoc['name'] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-level">Email</label>
                        <input type="text" name="email" class="form-control" value="<?= $after_asoc['email'] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-level">Password</label>
                        <input type="text" name="password" class="form-control" placeholder="password">
                    </div>

                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary">Edit user</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php
require '../dashboard_parts/footer.php';
?>