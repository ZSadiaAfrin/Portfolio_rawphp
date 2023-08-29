<?php
require '../login_check.php';
require '../db.php';
$select_test="SELECT * FROM testimonials";
$select_test_res=mysqli_query($database_connection,$select_test);
$select_test_info="SELECT * FROM testimonial_infos";
$select_test_res_info=mysqli_query($database_connection,$select_test_info);
?>

<?php
require '../dashboard_parts/header.php';
?>
<div class="row">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <h1>Add new testimonial</h1>

            </div>
            <div class="card-body">
                <form action="testimonial_post.php" method="POST">
                    <div class="mb-3">
                        <label for="" class="form-label">
                        </label>
                        <input type="text" class="form-control" name="sub_title">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">
                        </label>
                        <input type="text" class="form-control" name="title">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">
                        </label>
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
            <?php foreach ($select_test_res as $sl => $test) {
                # code...
            ?>
            <tr>
                <td><?=$sl+1?></td>
                <td><?=$test['sub_title']?></td>
                <td><?=$test['title']?></td>
                <td><?=$test['desp']?></td>
                <td><a class="btn btn-danger" href="testimonial_delete.php?id=<?=$test['id']?>">Delete</a></td>
              
            </tr>
            <?php } ?>
        </table>
    </div>
    <div class="col-lg-6">
        <div class="card" style="height: auto;">
            <div class="card-header">
                <h1>Add new testimonial</h1> 
            </div>
            <div class="mb">
                <?php if(isset($_SESSION['error_msg'])){?>
                <div class="alert alert-danger"><?=$_SESSION['error_msg']?></div>
                <?php } unset($_SESSION['error_msg'])?>
            </div>
            <div class="card-body">
                <form action="testimonial_info_post.php" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="" class="form-label"> Sub title</label>
                        <input type="text" class="form-control" name="sub_title">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Title</label>
                        <input type="text" class="form-control" name="title">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Desp</label>
                        <input type="text" class="form-control" name="desp">
                    </div>
                       <div class="mb-3">
                        <label for="" class="form-label">Photo</label>
                        <input type="file" class="form-control" name="photo">
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
                <th>Desp</th>
                <th>Action</th>
            </tr>
            <?php foreach ($select_test_res_info as $sl => $test_info) {
                # code...
            ?>
            <tr>
                <td><?=$sl+1?></td>
                <td><?=$test_info['sub_title']?></td>
                <td><?=$test_info['title']?></td>
                <td><?=$test_info['desp']?></td>
                <td><img width="100" src="../uploads/testimonial/<?=$test_info['photo']?>" alt=""></td>
                <td><a class="btn btn-danger" href="testimonial_info_delete.php?id=<?=$test_info['id']?>">Delete</a></td>
              
            </tr>
            <?php } ?>
        </table>
    </div>
</div>
<?php
require '../dashboard_parts/footer.php';
?>