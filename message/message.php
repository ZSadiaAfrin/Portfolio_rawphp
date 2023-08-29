<?php
require '../login_check.php';
require '../db.php';
$select_msg = "SELECT * FROM messages";
$select_msg_res = mysqli_query($database_connection, $select_msg);
$select_msg_icon = "SELECT * FROM msg_icons";
$select_msg_res_res = mysqli_query($database_connection, $select_msg_icon);
$select_contact = "SELECT * FROM contacts";
$select_contact_res = mysqli_query($database_connection, $select_contact);
?>
<?php
require '../dashboard_parts/header.php';
?>
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h1>Message</h1>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <tr>
                        <th>SL</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Message</th>

                        <th>Action</th>
                    </tr>
                    <?php foreach ($select_msg_res as $sl => $msg) {
                        # code...
                    ?>
                        <tr class="<?= $msg['status'] == 0 ? 'bg-light' : '' ?>">
                            <td><?= $sl + 1 ?></td>
                            <td><?= $msg['name'] ?></td>
                            <td><?= $msg['email'] ?></td>
                            <td><?= $msg['message'] ?></td>
                            <!-- <td><?= $msg['status'] ?></td> -->
                            <td class="d-flex">
                                <a class="btn btn-info" href="message_view.php?id=<?= $msg['id'] ?>">View</a>
                                <a class="btn btn-danger " href="message_delete.php?id=<?= $msg['id'] ?>">Delete</a>
                            </td>
                        </tr>
                    <?php } ?>
                    <tr>
                        <?php if (mysqli_num_rows($select_msg_res) == 0) { ?>
                            <td colspan="5" class="text-center"><strong>No msg found here!</strong></td>
                        <?php } ?>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
<div class="col-lg-3">
    <div class="card" style="height:auto">
        <div class="card-header">
            <h1>Social Icon</h1>
        </div>

        <?php
        $fonts = array(
            'fa-location-arrow',
            'fa-mobile-phone',
            'fa-mail-forward',
            'fa-mail-reply',
            'fa-mail-reply-all',
            'fa-telegram',
            'fa-envelope',
            'fa-envelope-o',
            'fa-envelope-open',
            'fa-envelope-open-o',
            'fa-envelope-square'

        );

        ?>
        <form action="msg_icon_post.php" method="POST">
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
                <?php if (isset($_SESSION['error'])) { ?>
                    <div class="alert alert-danger"><?= $_SESSION['error'] ?></div>
                <?php }
                unset($_SESSION['error']) ?>
            </div>
            <table class="table table-bordered">
                <tr>
                    <th>SL</th>
                    <th>Icon</th>
                    <th>Link</th>

                </tr>
                <?php foreach ($select_msg_res_res as $sl => $msg_icon) { ?>
                    <tr>
                        <td><?= $sl + 1 ?></td>
                        <td><?= $msg_icon['icon'] ?></td>
                        <td><?= $msg_icon['link'] ?></td>
                    </tr>
                <?php } ?>
            </table>
        </div>
    </div>
</div>
<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <h1>Contact information</h1>
        </div>
        <div class="card-body">
            <form action="contact_post.php" method="POST">
                <div class="mb-3">
                    <label for="" class="form-label">Sub_title </label>
                    <input type="text" class="form-control" name="sub_title">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label"> Title</label>
                    <input type="text" class="form-control" name="title">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Description </label>
                    <input type="text" class="form-control" name="desp">
                </div>
                <div class="mb-3">
                    <Button type="submit" class="btn btn-primary">Submit</Button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="col-lg-12">
<div class="card">
    <div class="card-header">
        <h1>Contact information</h1>
    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <tr>
            <th>SL</th>
            <th>Sub_title</th>
            <th>Title</th>
            <th>Desp</th>
            </tr>
            <?php foreach ($select_contact_res as $key => $contact) {
                # code...
            ?>
            <tr>
                <td><?=$key+1?></td>
                <td><?=$contact['sub_title']?></td>
                <td><?=$contact['title']?></td>
                <td><?=$contact['desp']?></td> 
                <td>
                    <a href="contact_delete.php?id=<?=$contact['id']?>" class="btn btn-danger">Delete</a>
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
    $('.fa').click(function() {
        var icon_class = $(this).attr('class');
        $('#icon').attr('value', icon_class);
    })
</script>