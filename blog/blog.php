<?php
require '../login_check.php';
require '../db.php';
$select_blog = "SELECT * FROM blogs";
$select_blog_res = mysqli_query($database_connection, $select_blog);
$select_blog_info = "SELECT * FROM blog_infos";
$select_blog_res_info = mysqli_query($database_connection, $select_blog_info);
?>

<?php
require '../dashboard_parts/header.php';
?>
<div class="row">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <h1>Add new blog</h1>

            </div>
            <div class="card-body">
                <form action="blog_post.php" method="POST">
                    <div class="mb-3">
                        <label for="" class="form-label">Sub_title </label>
                        <input type="text" class="form-control" name="sub_title">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label"> Title</label>
                        <input type="text" class="form-control" name="title">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Description </label>
                        <input type="text" class="form-control" name="desp">
                    </div>
                    <div class="mb-3">
                        <Button type="submit" class="btn btn-primary">Submit</Button>
                    </div>
                </form>

            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <table class="table table-bordered">
            <tr>
                <th>SL</th>
                <th>Sub_title</th>
                <th>Title</th>
                <th>Desp</th>
                <th>Action</th>
            </tr>
            <?php foreach ($select_blog_res as $sl => $blog) {
                # code...
            ?>
                <tr>
                    <td><?= $sl + 1 ?></td>
                    <td><?= $blog['sub_title'] ?></td>
                    <td><?= $blog['title'] ?></td>
                    <td><?= $blog['desp'] ?></td>
                    <td><a class="btn btn-danger" href="blog_delete.php?id=<?= $blog['id'] ?>">Delete</a></td>

                </tr>
            <?php } ?>
        </table>
    </div>
    <div class="col-lg-6">
        <div class="card" style="height: auto;">
            <div class="card-header">
                <h1>Add new blog info</h1>
            </div>
            <div class="mb">
                <?php if (isset($_SESSION['error_msg'])) { ?>
                    <div class="alert alert-danger"><?= $_SESSION['error_msg'] ?></div>
                <?php }
                unset($_SESSION['error_msg']) ?>
            </div>
            <div class="card-body">
                <form action="blog_info_post.php" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="" class="form-label"> Sub title</label>
                        <input type="text" class="form-control" name="sub_title">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Title</label>
                        <input type="text" class="form-control" name="title">
                    </div> 
                    <div class="mb-3">
                        <label for="" class="form-label">Photo</label>
                        <input type="file" class="form-control" name="photo">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Date</label>
                        <input type="text" class="form-control" name="date">
                    </div>
                    <div class="mb-3">
                        <Button type="submit" class="btn btn-primary">Submit</Button>
                    </div>
                </form>

            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <table class="table table-responsive">
            <tr>
                <th>SL</th>
                <th>Sub_title</th>
                <th>Title</th>
                <th>Photo</th>
                <th>Date</th>
                <th>Action</th>
            </tr>
            <?php foreach ($select_blog_res_info as $sl => $blog_info) {
                # code...
            ?>
                <tr>
                    <td><?= $sl + 1 ?></td>
                    <td><?= $blog_info['sub_title'] ?></td>
                    <td><?= $blog_info['title'] ?></td> 
                    <td><img width="100" src="../uploads/blog/<?= $blog_info['photo'] ?>" alt=""></td>
                    <td><?= $blog_info['date'] ?></td>
                    <td><a class="btn btn-danger" href="blog_info_delete.php?id=<?= $blog_info['id'] ?>">Delete</a></td>

                </tr>
            <?php } ?>
        </table>
    </div>
</div>
<?php
require '../dashboard_parts/footer.php';
?>