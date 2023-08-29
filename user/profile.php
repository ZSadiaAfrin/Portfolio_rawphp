<?php
session_start();
require '../db.php';
require '../dashboard_parts/header.php';
?>
<div class="row">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <h3>Profile</h3>
            </div>
            <div class="card-body">
                <form action="profile_update.php" method="POST">
                    <div class="mb-3">
                        <input type="hidden" name="id" value="<?= $after_assoc['id'] ?>" class="form-control">
                        <input type="text" name="name" value="<?= $after_assoc['name'] ?>" class="form-control">
                    </div>
                    <div class="mb-3">
                        <input type="text" name="email" value="<?= $after_assoc['email'] ?>" class="form-control">
                    </div>
                    <div class="mb-3">
                        <input type="text" name="password" placeholder="Password" class="form-control">
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="card" style="height:auto">
            <div class="card-header">
                <h3>Profile Photo Update</h3>
            </div>
            <div class="card-body">
                <?php if(isset($_SESSION['error'])) { ?>
                    <div class="alert alert-danger"><?= $_SESSION['error'] ?></div>
                <?php }
                unset($_SESSION['error']) ?>

                <form action="profile_photo.php" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <input type="hidden" name="id" value="<?= $after_assoc['id'] ?>" class="form-control">
                        <input type="file" name="photo" value=" " class="form-control">
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<?php
require '../dashboard_parts/footer.php';
?>