<?php
session_start();
require '../login_check.php';
$hostname = 'localhost';
$hostuser_name = 'root';
$password = '';
$dbname = 'sadia';
$database_connection = mysqli_connect($hostname, $hostuser_name, $password, $dbname);


$user = "SELECT * FROM  user_tables";
$user_select = mysqli_query($database_connection, $user);
?>
<?php
require '../dashboard_parts/header.php';
?>



<div class="row">
    <div class="col-lg-12 m-auto mt-5">
        <div class="card">
            <div class="card-header text-center bg-primary">
                <h1 class=" text-white m-auto">Users List</h1>
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <table class="table table-striped">
                        <tr>
                            <th>SL</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Photo</th>
                            <th>Action</th>
                        </tr>
                        <?php foreach ($user_select as $key => $user) { ?>
                            <tr>
                                <td><?= $key + 1 ?></td>
                                <td><?= $user['name'] ?></td>
                                <td><?= $user['email'] ?></td>
                                <td><img class="rounded-circle" height="100" width="100" src="../uploads/user/<?= $user['photo'] ?>" alt=""></td>
                                <td>
                                    <a href="edit.php?id=<?= $user['id'] ?>" class="btn btn-info">Edit</a>
                                    <button class="btn btn-danger delete_btn" delete-id="delete.php?id=<?= $user['id'] ?>">Delete</button>
                                </td>
                            </tr>
                        <?php } ?>

                    </table>
            </div>
        </div>
    </div>
</div>
<?php
require '../dashboard_parts/footer.php';
?>
<!-- <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script> -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    $(".delete_btn").click(function() {
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                link = $(this).attr('delete-id');
                window.location.href = link;
            }
        })
    });
</script>
<?php if (isset($_SESSION['delete'])) { ?>
    <script>
        Swal.fire(
            'Deleted!',
            '<?= $_SESSION['delete'] ?>',
            'success'
        )
    </script>
<?php }
unset($_SESSION['delete']) ?>

