<?php
require "../login_check.php";
require "../db.php";
$select_social="SELECT * FROM socials";
$select_social_res=mysqli_query($database_connection,$select_social);
?>
<?php
require "../dashboard_parts/header.php";
?>
<div class="row">
    <div class="col-lg-3" >
        <div class="card" style="height:auto">
            <div class="card-header">
                <h1>Social Icon</h1>
            </div>

            <?php
            $fonts = array(
                'fa-youtube',
                'fa-youtube-play',
                'fa-youtube-square',
                'fa-facebook',
                'fa-facebook-f',
                'fa-facebook-official',
                'fa-facebook-square',
                'fa-telegram',
                'fa-whatsapp',
                'fa-twitter',
                'fa-twitter-square',
                'fa-sharp fa-light fa-cubes',

            );

            ?>
            <form action="icon_post.php" method="POST">
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
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    <?php foreach($select_social_res as $sl=>$social){?>
                    <tr>
                        <td><?=$sl+1?></td>
                        <td><?=$social['icon']?></td>
                        <td><?=$social['link']?></td>
                        <td><a class="btn  btn-<?=$social['status']==1?'success':'info'?>" href="icon_status.php?id=<?=$social['id']?>"><?=$social['status']==1?'Active':'Deactivate'?></a></td>
                        <td>Action</td>
                    </tr>
                    <?php } ?>
                </table>
            </div>
        </div>
    </div>
</div>

<?php
require "../dashboard_parts/footer.php";
?>
<script>
    $('.fa').click(function() {
        var icon_class = $(this).attr('class');
        $('#icon').attr('value', icon_class);
    })
</script>