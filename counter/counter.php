<?php
require '../login_check.php';
require '../db.php';
$select_counter="SELECT * FROM counters";
$select_counter_res=mysqli_query($database_connection,$select_counter);
?>
<?php
require '../dashboard_parts/header.php';
?>
<div class="row">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <h1>Add new icon</h1>
            </div>
            <?php
            $fonts = array(
                'fa-facebook',
                'fa-facebook-f',
                'fa-facebook-official',
                'fa-facebook-square',

                'fa-twitter',
                'fa-twitter-square',

                'fa-instagram',

                'fa-youtube',
                'fa-youtube-play',
                'fa-youtube-square',

                'fa-snapchat',
                'fa-snapchat-ghost',
                'fa-snapchat-square',

                'fa-telegram',

                'fa-pinterest',
                'fa-pinterest-p',
                'fa-pinterest-square',

                'fa-whatsapp',

                'fa-linkedin',
                'fa-linkedin-square',
                'fa-flaticon-like',
                'fa-users',
                'fa-hand-o-up',

                'fa-hand-grab-o',
                'fa-hand-lizard-o',
                'fa-hand-o-down',
                'fa-hand-o-left',
                'fa-hand-o-right',
                'fa-hand-o-up',
                'fa-hand-paper-o',
                'fa-hand-peace-o',
                'fa-hand-pointer-o',
                'fa-hand-rock-o',
                'fa-hand-scissors-o',
                'fa-hand-spock-o',
                'fa-hand-stop-o', '
                fa-handshake-o',
                'fa-hard-of-hearing',
                'fa-hashtag',
                'fa-hdd-o',
                'fa-header',
                'fa-headphones',
                'fa-heart',
                'fa-arrow-circle-up',
                'fa-calendar',



            );
            ?>
            <div class="card-body">
                <form action="counter_post.php" method="POST">
                    <div class="mb-3">
                        <?php foreach ($fonts as $key => $icon) { ?>
                            <i style="font-family: fontawesome;font-size:30px;mergin-right:5px;" class="fa <?= $icon ?>"></i>
                        <?php } ?>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Icon</label>
                        <input type="text" class="form-control" id="icon" name="icon">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Number</label>
                        <input type="text" class="form-control" name="number">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Sub_title</label>
                        <input type="text" class="form-control" name="sub_title">
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
                <h1>View information List</h1>
            </div>
            <div class="card-body">
                <table class="table table-responsive"> 
                    <tr>
                        <th>SL</th>
                        <th>Icon</th>
                        <th>Number</th>
                        <th>Sub_title</th>
                        <th>Action</th>
                    </tr>
                    <?php foreach ($select_counter_res as $key => $counter) {
                        # code...
                    ?>
                    <tr>
                        <td><?=$key+1?></td>
                        <td><?=$counter['icon']?></td> 
                        <td><?=$counter['number']?></td> 
                        <td><?=$counter['sub_title']?></td>
                        <td>
                            <a href="" class="btn btn-danger">Delete</a>
                        </td> 
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
<script>
    $('.fa').click(function(click) {
        var icon = $(this).attr('class');
        $('#icon').attr('value', icon);
    })
</script>