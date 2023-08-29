<?php
require '../login_check.php';
require  '../db.php';
$select_banner = "SELECT * FROM banners";
$select_banner_res = mysqli_query($database_connection, $select_banner);
$after_assoc_banner = mysqli_fetch_assoc($select_banner_res);
//update2
$select_banner_info = "SELECT * FROM banner_informations";
$select_banner_res_info = mysqli_query($database_connection, $select_banner_info);
$after_assoc_banner_info = mysqli_fetch_assoc($select_banner_res_info);

$select_banner_photo = "SELECT * FROM banner_photos";
$select_banner_res_photo = mysqli_query($database_connection, $select_banner_photo);
//update photo part 2
$select_banner_photo2 = "SELECT * FROM banner2_photos";
$select_banner_res_photo2 = mysqli_query($database_connection, $select_banner_photo2);






?>
<?php
require '../dashboard_parts/header.php';
?>
<div class="row">
  <div class="col-lg-6">
    <div class="card">
      <div class="card-header">
        <h1>Update Information</h1>
      </div>
      <div class="card-body">
        <form action="add_banner_post.php" method="POST">
          <div class="mb-3">
            <input type="text" class="form-control" name="id" value="<?= $after_assoc_banner['id'] ?>">
            <input type="text" class="form-control" name="sub_title" value="<?= $after_assoc_banner['sub_title'] ?>">
          </div>
          <div class="mb-3">
            <input type="text" class="form-control" name="title" value="<?= $after_assoc_banner['title'] ?>">
          </div> 
          <div class="mb-3">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>

      </div>
    </div>
  </div>

  <div class="col-lg-6">
    <div class="card">
      <div class="card-header">
        <h1>Update informtion part-2</h1>
      </div>
      <div class="card-body">
        <form action="update_information.php" method="POST">
          <div class="mb-3">
            <input type="hidden" class="form-control" name="id" value="<?= $after_assoc_banner_info['id'] ?>">
            <input type="text" class="form-control" name="sub_title" value="<?= $after_assoc_banner_info['sub_title'] ?>">
          </div>
          <div class="mb-3">
            <input type="text" class="form-control" name="title" value="<?= $after_assoc_banner_info['title'] ?>">
          </div> 
          <div class="mb-3">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>

      </div>
    </div>
  </div>

  <div class="col-lg-12">
    <div class="card">
      <div class="card-header">
        <h1>Banner Photo List  2</h1>
      </div>
      <div class="card-body">
        <table class="table table-bordered">
          <tr>
            <th>SL</th>
            <th>Photo</th>
            <th>Status</th>
            <th>Action</th>
          </tr>
          <?php foreach ($select_banner_res_photo as $key => $photo) {  ?>
            <tr>
              <td><?= $key + 1 ?></td>
              <td><img height="100" width="100" src="../uploads/banner/<?= $photo['photo'] ?>" alt=""></td>
              <td><a class="btn btn-<?= $photo['status'] == 1 ? 'success' : 'info' ?>" href="update_banner_status.php?id=<?= $photo['id'] ?>"><?= $photo['status'] == 1 ? 'Active' : 'Deactivate' ?></a></td>
              <td><a class="btn btn-danger" href="delete_banner.php?id=<?= $photo['id'] ?>">Delete</a></td>
            </tr>
          <?php } ?>
        </table>
      </div>
    </div>
  </div>
<!-- part 2-->
  <div class="col-lg-12">
    <div class="card">
      <div class="card-header">
        <h1>Banner Photo List</h1>
      </div>
      <div class="card-body">
        <table class="table table-bordered">
          <tr>
            <th>SL</th>
            <th>Photo</th>
            <th>Status</th>
            <th>Action</th>
          </tr>
          <?php foreach ($select_banner_res_photo2 as $key => $photos) {  ?>
            <tr>
              <td><?= $key + 1 ?></td>
              <td><img height="100" width="100" src="../uploads/banner1/<?= $photos['photo'] ?>" alt=""></td>
              <td><a class="btn btn-<?= $photos['status'] == 1 ? 'success' : 'info' ?>" href="add_banner_photo_2.php?id=<?= $photos['id'] ?>"><?= $photos['status'] == 1 ? 'Active' : 'Deactivate' ?></a></td>
              <td><a class="btn btn-danger" href="delete_banner2.php?id=<?= $photos['id'] ?>">Delete</a></td>
            </tr>
          <?php } ?>
        </table>
      </div>
    </div>
  </div>

  <div class="col-lg-6">
    <div class="card" style="height:auto">
      <div class="card-header">
        <h1>Add Photo</h1>
      </div>
      <div class="card-body">
        <div class="mb-3">
          <?php if (isset($_SESSION['error'])) { ?>
            <div class="alert alert-danger"><?= $_SESSION['error'] ?></div>
          <?php }
          unset($_SESSION['error']) ?>
        </div>
        <form action="add_banner_photo.php" method="POST" enctype="multipart/form-data">
          <div class="mb-3">
            <input type="file" class="form-control" name="photo">
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
        <h1>Add Photo part 2</h1>
      </div>
      <div class="card-body">
        <div class="mb-3">
          <?php if (isset($_SESSION['error1'])) { ?>
            <div class="alert alert-danger"><?= $_SESSION['error1'] ?></div>
          <?php }
          unset($_SESSION['error1']) ?>
        </div>
        <form action="add_banner_photo_2_post.php" method="POST" enctype="multipart/form-data">
          <div class="mb-3">
            <input type="file" class="form-control" name="photo">
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