<?php

require '../login_check.php';
require '../db.php';
$select_skill_info = "SELECT * FROM skill_infos";
$select_skill_res_info = mysqli_query($database_connection, $select_skill_info);

$select_skill = "SELECT * FROM skills";
$select_skill_res = mysqli_query($database_connection, $select_skill);
?>
<?php
require '../dashboard_parts/header.php';
?>
<div class="row">
    <div class="col-lg-6">
        <div class="card" style="height: auto;">
            <div class="card-header">
                <h1>Add skill</h1>
            </div>
            <div class="card-body">
                <form  action="skill_info_post.php" method="POST">
                    <div class="mb-3">
                        <label class="form-level">Sub Title</label>
                        <input type="text" name="sub_title" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-level">Title</label>
                        <input type="text" name="title" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-level">Description</label>
                        <input type="text" name="desp" class="form-control">
                    </div>
                    <div class="mb-3">
                        <button class="btn btn-primary" type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <h1>Add your skills</h1>
            </div>
            <div class="card-body">
                <form action="skill_post.php" method="POST">
                    <div class="mb-3">
                        <label class="form-level">Skill</label>
                        <input type="text" name="skill" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-level">Percentage</label>
                        <input type="text" name="percentage" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-level">Week percentage</label>
                        <input type="text" name="week_per" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-level">Week</label>
                        <input type="text" name="week" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-level">Month Percentage</label>
                        <input type="text" name="month_per" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-level">Month</label>
                        <input type="text" name="month" class="form-control">
                    </div>
                    <div class="mb-3">
                        <button class="btn btn-primary" type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h1 class="m-auto">skill Description</h1>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <tr>
                        <th>SL</th>
                        <th>Title</th>
                        <th>Desp</th> 
                        <th>Action</th>
                    </tr>
                    <?php foreach ($select_skill_res_info as $sl => $info) { ?>
                        <tr>
                            <td><?= $sl + 1 ?></td>
                            <td><?= $info['sub_title'] ?></td>
                            <td><?= $info['title'] ?></td>
                            <td><?= $info['desp'] ?></td> 
                            <td><a class="btn btn-danger" href="delete_info.php?id=<?=$info['id'] ?>">Delete</a></td>
                        </tr>
                    <?php } ?>
                </table>
            </div>
        </div>

    </div>

    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h1 class="m-auto">List of add skills</h1>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <tr>
                        <th>SL</th>
                        <th>Skill</th> 
                        <th>Percentage</th>
                        <th>Week Percentage</th>
                        <th>Week</th>
                        <th>Month Percentage</th>
                        <th>Month</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    <?php foreach ($select_skill_res as $sl => $skills) { ?>
                        <tr>
                            <td><?= $sl + 1 ?></td>
                            <td><?= $skills['skill'] ?></td> 
                            <td><?= $skills['percentage'] ?></td>
                            <td><?= $skills['week_per'] ?></td>
                            <td><?= $skills['week'] ?></td>
                            <td><?= $skills['month_per'] ?></td>
                            <td><?= $skills['month'] ?></td>
                            <td><a class="btn btn-<?= $skills['status'] ? 'success' : 'info' ?>" href="skill_status.php?id=<?= $skills['id'] ?>"><?= $skills['status'] ? 'Active' : 'Deactive' ?></a></td>
                            <td><a class="btn btn-danger" href="delete.php?id=<?= $skills['id'] ?>">Delete</a></td>
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