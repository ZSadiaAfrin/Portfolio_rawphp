<?php
require '../login_check.php';
require '../db.php';

$id = $_GET['id'];
$select_msg = "SELECT * FROM messages WHERE id=$id";
$select_msg_res = mysqli_query($database_connection, $select_msg);
$msg = mysqli_fetch_assoc($select_msg_res);
$update="UPDATE messages SET status=1 where id=$id";
mysqli_query($database_connection,$update);

?>
<?php
require '../dashboard_parts/header.php';
?>
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h1 class="m-auto">Message</h1>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <tr>
                        <th>Name</th>
                        <td><?= $msg['name'] ?></td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td><?= $msg['email'] ?></td>
                    </tr>
                    <tr>
                        <th>Message</th>
                        <td><?= $msg['message'] ?></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
<?php
require '../dashboard_parts/footer.php';
?>