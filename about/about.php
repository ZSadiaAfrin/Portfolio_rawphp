<?php 
require '../login_check.php';
require '../db.php'; 
$select_about="SELECT * FROM abouts";
$select_about_res=mysqli_query($database_connection,$select_about);
// $after_assoc_about=mysqli_fetch_assoc($after_assoc_about);

$about_icon="SELECT * FROM about_icons";
$about_icon_res=mysqli_query($database_connection,$about_icon);
$about_photo="SELECT * FROM about_photos";
$about_photo_res=mysqli_query($database_connection,$about_photo);
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
                <form action="add_post.php" method="POST">
                    <div class="mb-3">
                        <label  class="form-label">Sub_title</label>
                        <input type="text" name="sub_title" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label  class="form-label">Title</label>
                        <input type="text" name="title" class="form-control">
                    </div> 
                    <div class="mb-3">
                        <label  class="form-label">Description</label>
                        <input type="text" name="desp" class="form-control">
                    </div> 
                    <div class="mb-3">
                        <label  class="form-label">Name</label>
                        <input type="text" name="name" class="form-control">
                    </div> 
                    <div class="mb-3">
                        <label  class="form-label">Date of birth</label>
                        <input type="date" name="dob" class="form-control">
                    </div> 
                    <div class="mb-3">
                        <label  class="form-label">Address</label>
                        <input type="text" name="address" class="form-control">
                    </div> 
                    <div class="mb-3">
                        <label  class="form-label">Zip code</label>
                        <input type="number" name="zip" class="form-control">
                    </div> 
                    <div class="mb-3">
                        <label  class="form-label">Email</label>
                        <input type="email" name="email" class="form-control">
                    </div> 
                    <div class="mb-3">
                        <label  class="form-label">Phone</label>
                        <input type="number" name="phone" class="form-control">
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
                <h1>List of about information</h1>
            </div>
            <div class="card-body">
                <table class="table table-responsive">
                    <tr>
                        <th>SL</th>
                        <th>Sub title</th>
                        <th>Title</th>
                        <th>Desp</th>
                        <th>Name</th>
                        <th>Date of birth</th>
                        <th>Address</th>
                        <th>Zip</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Edit</th>
                    </tr>
                    <?php foreach ($select_about_res as $key => $about) {
                        # code...
                     ?>
                    <tr>
                        <td><?=$key+1?></td>
                        <td><?=$about['sub_title']?></td>
                        <td><?=$about['title']?></td>
                        <td><?=$about['desp']?></td>
                        <td><?=$about['name']?></td>
                        <td><?=$about['dob']?></td>
                        <td><?=$about['address']?></td>
                        <td><?=$about['zip']?></td>
                        <td><?=$about['email']?></td>
                        <td><?=$about['phone']?></td>
                        <td><a class="btn btn-info" href="update_info.php">Edit</a></td>
                    </tr>
                    <?php } ?>
                </table>
            </div>
        </div>
    </div>
    <div class="col-lg-3" >
        <div class="card" style="height:auto">
            <div class="card-header">
                <h1>Social Icon</h1>
            </div>

            <?php
            $fonts = array(
                'fa-music',
                'fa-file-movie-o',
                'fa-fighter-jet',

            );

            ?>
            <form action="about_icon_post.php" method="POST">
                <div class="card-body">
                    <div class="mb-3">
                        <?php foreach ($fonts as $icon) { ?>
                            <i style="font-family:fontawesome;font-size:30px;margin-right:10px" class="fa <?= $icon ?>"></i>
                        <?php } ?>
                    </div>
                    <div class="mb-3">
                        <input type="text" name="icon" class="form-control" id="icon" placeholder="Icon">
                    </div>
                    <div class="mb-3">
                        <input type="text" name="link" class="form-control" id="icon" placeholder="Link">
                    </div>
                    <div class="mb-3">
                        <input type="text" name="name" class="form-control" id="icon" placeholder="Name">
                    </div>
                    <div class="mb-3">
                        <button class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>

    </div>
    
    <div class="col-lg-9">
        <div class="card">
            <div class="card-header">
                <h1>List of social icons</h1>
            </div>
            <div class="card-body">
            <div class="mb-3"> 
                <?php if(isset($_SESSION['error'])){?>
                    <div class="alert alert-danger"><?=$_SESSION['error']?></div>
                    <?php }unset($_SESSION['error']) ?>
            </div>
                <table class="table table-bordered">
                    <tr>
                        <th>SL</th>
                        <th>Icon</th>
                        <th>Link</th>
                        <th>Name</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    <?php foreach($about_icon_res as $sl=>$about_icon){?>
                    <tr>
                        <td><?=$sl+1?></td>
                        <td><?=$about_icon['icon']?></td>
                        <td><?=$about_icon['link']?></td>
                        <td><?=$about_icon['name']?></td>
                        <td><a class="btn  btn-<?=$about_icon['status']==1?'success':'info'?>" href="icon_status.php?id=<?=$about_icon['id']?>"><?=$about_icon['status']==1?'Active':'Deactivate'?></a></td>
                        <td>Action</td>
                    </tr>
                    <?php } ?>
                </table>
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="card">
        <div class="card-header">
            <h1>Photo view</h1>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <tr>
                    <th>SL</th>
                    <th>Photo</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
                <?php foreach ($about_photo_res as $key => $photo) {
                    # code...
                ?>
                <tr>
                    <td><?=$key+1?></td>
                    <td><img width="100" src="../uploads/about_photo/<?=$photo['photo']?>" alt=""></td>
                    <td><a class="btn btn-<?=$photo['status']==1?'success':'info'?>" href="about_status.php?id=<?=$photo['id']?>"><?=$photo['status']==1?'Active':'Deactive'?></a></td>
                    <td>
                        <a class="btn btn-danger" href="delete.php?id=<?=$photo['id']?>">Delete</a>
                    </td>
                </tr>
                <?php }?>
            </table>
        </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <h1>Add photo</h1>
            </div>
            <div class="mb-3">
                <?php if(isset($_SESSION['msg'])) {?>
                    <div class="alert alert-danger"><?=$_SESSION['msg']?></div>
                    <?php } unset($_SESSION['msg'])?>
            </div>

            <div class="card-body">
                <form action="about_photo.php" method="POST" enctype="multipart/form-data">
                <div class="mb-3">
                    <label class="from-label">Photo</label>
                    <input type="file" class="form-control" name="photo">
                </div>
                 <div class="mb-3">
                    <button class="btn btn-primary" type="submit">Add photo</button>
                </div>
                </form>
            </div>
        </div>
    </div>

</div>
<?php 
require '../dashboard_parts/footer.php'; 
?>
<script>
    $('.fa').click(function() {
        var icon_class = $(this).attr('class');
        $('#icon').attr('value', icon_class);
    })
</script>