<?php
require '../login_check.php';
require '../db.php';
$select_project = "SELECT * FROM projects";
$select_project_res = mysqli_query($database_connection, $select_project);

$select_project_desp = "SELECT * FROM project_describes";
$select_project_res_desp = mysqli_query($database_connection, $select_project_desp);
?>

<?php
require '../dashboard_parts/header.php';
?>
<div class="row">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <h1>Project Information</h1>
            </div>
            <div class="card-body">
                <form action="project_post.php" method="POST">
                    <div class="mb-3">
                        <label class="form-label">Sub Title</label>
                        <input type="text" class="form-control" name="sub_title">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Title</label>
                        <input type="text" class="form-control" name="title">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Description</label>
                        <input type="text" class="form-control" name="desp">
                    </div>
                    <div class="mb-3">
                        <button class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="card" style="height: auto;">
            <div class="card-header">
                <h1 class="m-auto">Project Information view</h1>
            </div>
            <div class="card-body">
                <table class="table table-responsive">
                    <tr>
                        <th>SL</th>
                        <th>Sub title</th>
                        <th>Title</th>
                        <th>Desp</th>
                        <th>Action</th>
                    </tr>
                    <?php foreach ($select_project_res as $sl => $project) { ?>
                        <tr>
                            <td><?= $sl + 1 ?></td>
                            <td><?= $project['sub_title'] ?></td>
                            <td><?= $project['title'] ?></td>
                            <td><?= substr($project['desp'], 0, 20) . '..more' ?></td>
                            <td><a class="btn btn-danger" href="delete_project.php?id=<?= $project['id'] ?>">Delete</a></td>
                        </tr>
                    <?php } ?>
                </table>
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <h1>Project information description</h1>
            </div>
            <div class="mb-3">
                <?php if (isset($_SESSION['error_msg'])) {
                    # code...
                ?>
                <div class="alert alert-danger"><?=$_SESSION['error_msg']?></div>
                <?php }unset($_SESSION['error_msg'])?>
            </div>
            <div class="card-body">
                <form action="project_desp_post.php" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label class="form-label">Sub Title</label>
                        <input type="text" class="form-control" name="sub_title">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Title</label>
                        <input type="text" class="form-control" name="title">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Photo</label>
                        <input type="file" class="form-control" name="photo">
                    </div> 
                    <div class="mb-3">
                        <button class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="card" style="height: auto;">
            <div class="card-header">
                <h1 class="m-auto">Project Information view</h1>
            </div>
            <div class="card-body">
                <table class="table table-responsive">
                    <tr>
                        <th>SL</th>
                        <th>Sub title</th>
                        <th>Title</th>
                        <th>Desp</th>
                        <th>Action</th>
                    </tr>
                    <?php foreach ($select_project_res_desp  as $sl => $project_desp) { ?>
                        <tr>
                            <td><?= $sl + 1 ?></td>
                            <td><?= $project_desp['sub_title'] ?></td>
                            <td><?= $project_desp['title'] ?></td>
                            <td><img width="100" src="../uploads/project/<?=$project_desp['photo']?>" alt=""></td>
                  
                            <td><a class="btn btn-danger" href="delete_project_desp.php?id=<?= $project_desp['id'] ?>">Delete</a></td>
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