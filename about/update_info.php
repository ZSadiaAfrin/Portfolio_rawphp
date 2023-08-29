<?php 
require '../login_check.php';
require '../db.php'; 
$select_about="SELECT * FROM abouts";
$select_about_res=mysqli_query($database_connection,$select_about);
 $after_assoc_about=mysqli_fetch_assoc($select_about_res);
?>
<?php 
require '../dashboard_parts/header.php'; 
?>
<div class="row">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <h1>About my information</h1>
            </div>
            <div class="card-body">
                <form action="update_post.php" method="POST">
                    <div class="mb-3">
                        <label  class="form-label">Sub_title</label>
                        <input type="text" name="sub_title" class="form-control" value="<?=$after_assoc_about['sub_title']?>">
                    </div>
                    <div class="mb-3">
                        <label  class="form-label">Title</label>
                        <input type="text" name="title" class="form-control"value="<?=$after_assoc_about['title']?>">
                    </div> 
                    <div class="mb-3">
                        <label  class="form-label">Description</label>
                        <input type="text" name="desp" class="form-control" value="<?=$after_assoc_about['desp']?>">
                    </div> 
                    <div class="mb-3">
                        <label  class="form-label">Name</label>
                        <input type="text" name="name" class="form-control" value="<?=$after_assoc_about['name']?>">
                    </div> 
                    <div class="mb-3">
                        <label  class="form-label">Date of birth</label>
                        <input type="date" name="dob" class="form-control" value="<?=$after_assoc_about['dob']?>">
                    </div> 
                    <div class="mb-3">
                        <label  class="form-label">Address</label>
                        <input type="text" name="address" class="form-control" value="<?=$after_assoc_about['address']?>">
                    </div> 
                    <div class="mb-3">
                        <label  class="form-label">Zip code</label>
                        <input type="number" name="zip" class="form-control" value="<?=$after_assoc_about['zip']?>">
                    </div> 
                    <div class="mb-3">
                        <label  class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" value="<?=$after_assoc_about['email']?>">
                    </div> 
                    <div class="mb-3">
                        <label  class="form-label">Phone</label>
                        <input type="number" name="phone" class="form-control" value="<?=$after_assoc_about['phone']?>">
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