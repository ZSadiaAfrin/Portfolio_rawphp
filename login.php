<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Gymove - Fitness Bootstrap Admin Dashboard</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="/sadia/dashboard_asset/images/favicon.png">
    <link href="/sadia/dashboard_asset/css/style.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
</head>

<body class="h-100">
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
									<div class="text-center mb-3">
										<a href="index.html"><img src="/sadia/dashboard_asset/images/logo-full.png" alt=""></a>
									</div>
                                    <h4 class="text-center mb-4 text-white">Sign in your account</h4>
                                    <form action="login_post.php" method="POST">
                                        <div class="form-group">
                                            <label class="mb-1 text-white"><strong>Email</strong></label>
                                            <input type="email" name="email" class="form-control" value="hello@example.com">
                                        </div>
                                        <?php if(isset($_SESSION['invalid_email'])){ ?>
                                            <strong class="text-danger"><?=$_SESSION['invalid_email']?></strong>
                                            <?php } unset($_SESSION['invalid_email']) ?>
                                        <div class="form-group">
                                            <label class="mb-1 text-white"><strong>Password</strong></label>
                                            <input type="password" name="password" class="form-control" value="password">
                                            <?php if(isset($_SESSION['wrong_pass'])){ ?>
                                            <strong class="text-danger"><?=$_SESSION['wrong_pass']?></strong>
                                            <?php }unset($_SESSION['wrong_pass']) ?>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn bg-white text-primary btn-block">Sign Me In</button>
                                        </div>
                                    </form>
                                    <div class="new-account mt-3">
                                        <p class="text-white">Don't have an account? <a class="text-white" href="registration.php">Sign up</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="/sadia/dashboard_asset/vendor/global/global.min.js"></script>
	<script src="/sadia/dashboard_asset/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="/sadia/dashboard_asset/js/custom.min.js"></script>
    <script src="/sadia/dashboard_asset/js/deznav-init.js"></script>

</body>

</html>

    <div class="row">
        <div class="col-lg-6 m-auto mt-5">
            <div class="card">
                <div class="card-header text-center">
                    <h1>Login</h1>
                </div>
                <form action="login_post.php" method="POST">
                <div class="card-body">
                    <div class="mb-3">
                        <label for="" class="form-label">Name</label>
                        <input type="text" class="form-control" name="name" value="<?=isset( $_SESSION['name_value'] )?$_SESSION['name_value'] :""?>"> 
                        <?php if (isset($_SESSION['name'])) { 
                         ?>
                         <strong class="text-danger" ><?=$_SESSION['name']?></strong>
                        <?php } ?>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Password</label>
                        <input type="text" class="form-control" name="password" value="<?=isset( $_SESSION['password_value'] )?$_SESSION['password_value'] :""?>"> 
                        <?php if (isset($_SESSION['password'])) { 
                         ?>
                         <strong class="text-danger"><?=$_SESSION['password']?></strong>
                        <?php } ?>
                    </div>
                    <button type="submit" class="btn btn-primary">Login</button>
                </div>
                </form>
   
            </div>
        </div>
    </div>
 
<?php 
unset($_SESSION['name']);
unset($_SESSION['password']);
unset($_SESSION['name_value']);
unset($_SESSION['password_value']);

?>