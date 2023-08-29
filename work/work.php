<?php
require '../login_check.php';
require '../db.php';

$select_work_info = "SELECT * FROM work_infos";
$select_work_res_info = mysqli_query($database_connection, $select_work_info);

$select_work_desp = "SELECT * FROM works";
$select_work_res_desp = mysqli_query($database_connection, $select_work_desp);

$select_work_service = "SELECT * FROM work_services";
$select_work_res_service = mysqli_query($database_connection, $select_work_service);

?>
<?php
require '../dashboard_parts/header.php';
?>
<div class="row">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <h1>Work Information</h1>
            </div>
            <div class="card-body">
                <form action="work_post.php" method="POST">
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
                <h1 class="m-auto">skill Description</h1>
            </div>
            <div class="card-body">
                <table class="table table-responsive">
                    <tr>
                        <th>SL</th>
                        <th>Title</th>
                        <th>Desp</th>
                        <th>Action</th>
                    </tr>
                    <?php foreach ($select_work_res_info as $sl => $info) { ?>
                        <tr>
                            <td><?= $sl + 1 ?></td>
                            <td><?= $info['sub_title'] ?></td>
                            <td><?= $info['title'] ?></td>
                            <td><?= substr($info['desp'], 0, 20) . '..more' ?></td>
                            <td><a class="btn btn-danger" href="delete_project.php?id=<?= $info['id'] ?>">Delete</a></td>
                        </tr>
                    <?php } ?>
                </table>
            </div>
        </div> 
    </div>
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <h2 class="m-auto">Work Service Description</h2>
            </div>
            <div class="card-body">
                <?php
                $fonts = array(
                    'fa-light fa-code-branch',
                    'fa-sharp fa-light fa-cubes',
                    'fa-sharp fa-light fa-browser',
                    'fa-sharp fa-light fa-code',
                    'fa fa-bandcamp',
                    'fa-bookmark',

                )
                ?>


                <form action="work_icon_post.php" method="POST">
                    <div class="mb-3">
                        <?php foreach ($fonts as $key => $icon) {  ?>
                            <i style="font-family:fontawesome;font-size:30px;margin-right:10px;" class="fa <?= $icon ?>"></i>
                        <?php } ?>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Icon</label>
                        <input type="text" class="form-control" id="icon" name="icon">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Link</label>
                        <input type="text" class="form-control" id="icon" name="link">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Sub title</label>
                        <input type="text" class="form-control" name="sub_title">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">title</label>
                        <input type="text" class="form-control" name="title">
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-lg-12">
        <div class="card" style="height: auto;">
            <div class="card-header">
                <h1 class="m-auto">skill Info Lists</h1>
            </div>
            <div class="card-body">
                <table class="table table-responsive">
                    <tr>
                        <th>SL</th>
                        <th>Icon</th>
                        <th>Link</th>
                        <th>Sub Title</th>
                        <th>Title</th>
                        <th>Action</th>
                    </tr>
                    <?php foreach ($select_work_res_desp as $sl => $works) { ?>
                        <tr>
                            <td><?= $sl + 1 ?></td>
                            <td><?= $works['icon'] ?></td>
                            <td><?= $works['link'] ?></td>
                            <td><?= $works['sub_title'] ?></td>
                            <td><?= substr($works['title'], 0, 20) . '..more' ?></td>
                            <td><a class="btn btn-danger" href="delete_work.php?id=<?= $works['id'] ?>">Delete</a></td>
                        </tr>
                    <?php } ?>
                </table>
            </div>
        </div>

    </div>
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <h1>Client Query</h1>
            </div>
            <div class="mb">
                <?php if (isset($_SESSION['error_msg'])) { ?>
                    <div class="alert alert-danger"><?=$_SESSION['error_msg']?></div>
                <?php } ?>
            </div>
            <div class="card-body">
                <form action="work_service_post.php" method="POST" enctype="multipart/form-data">
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
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-lg-12">
        <div class="card" style="height: auto;">
            <div class="card-header">
                <h1 class="m-auto">Client query lists</h1>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <tr>
                        <th>SL</th>
                        <th>Sub_title</th>
                        <th>Title</th>
                        <th>Photo</th> 
                        <th>Action</th>
                    </tr>
                    <?php foreach ($select_work_res_service as $sl => $service) { ?>
                        <tr>
                            <td><?= $sl + 1 ?></td>
                            <td><?= $service['sub_title'] ?></td>
                            <td><?= substr($service['title'], 0, 20) . '..more' ?></td> 
                            <td><img width="100" src="../uploads/service/<?=$service['photo']?>" alt=""></td>
                            <td><a class="btn btn-danger" href="delete_work_ser.php?id=<?= $service['id'] ?>">Delete</a></td>
                        </tr>
                    <?php } ?>
                </table>
            </div>
        </div>
</div>
<?php
require '../dashboard_parts/footer.php';
?>
<!-- <script>
    $('.fa').click(function() {
        var icon_class = $(this).attr('class');
        $('#icon').attr('value', icon_class);
    })
</script> -->
<script>
    $('.fa').click(function() {
        var icon = $(this).attr('class');
        $('#icon').attr('value', icon);

    });
</script>