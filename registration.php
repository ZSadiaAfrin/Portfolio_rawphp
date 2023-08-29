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
                                    <h4 class="text-center mb-4 text-white">Sign up your account</h4>
                                    <form action="registration_post.php" method="POST" enctype="multipart/form">
                                        <div class="form-group">
                                            <label class="mb-1 text-white"><strong>Username</strong></label>
                                            <input type="text" name="name" class="form-control" placeholder="username" value="<?= isset($_SESSION['name_value']) ? $_SESSION['name_value'] : '' ?>">
                                            <?php if (isset($_SESSION['name'])) { ?>
                                              <strong class="text-danger"><?= $_SESSION['name'] ?></strong>
                                            <?php } ?>
                                        </div>
                                        <div class="form-group">
                                            <label class="mb-1 text-white"><strong>Email</strong></label>
                                            <input type="email" name="email" class="form-control" placeholder="hello@example.com" value="<?php if (isset($_SESSION['email_value'])) {
                                                                            echo $_SESSION['email_value'];
                                                                          } else {
                                                                            echo " ";
                                                                          }

                                                                          ?>"> 
                                           <?php if (isset($_SESSION['email'])) { ?>
                                            <strong class="text-danger"><?= $_SESSION['email'] ?></strong>
                                          <?php } ?>
                                        </div>
                                        <div class="form-group">
                                            <label class="mb-1 text-white"><strong>Password</strong></label>
                                            <input type="password" name="password" class="form-control" value="<?= isset($_SESSION['pass_value']) ? $_SESSION['pass_value'] : '' ?>">
                                            <?php if (isset($_SESSION['password'])) { ?>
                                              <strong class="text-danger"><?= $_SESSION['password'] ?></strong>
                                            <?php } ?>
                                        </div>
                                        <div class="text-center mt-4">
                                            <button type="submit" class="btn bg-white text-primary btn-block">Sign me up</button>
                                        </div>
                                    </form>
                                    <div class="new-account mt-3">
                                        <p class="text-white">Already have an account? <a class="text-white" href="login.php">Sign in</a></p>
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



 
 
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>`
  <script>
    function show_password() {
      var password = document.getElementById("password");
      if (password.type == "password") {
        password.type = 'text';
      } else {
        password.type = "password";
      }
    }
  </script>
  <?php
  if (isset($_SESSION['reg_success'])) {
  ?>
    <script>
      Swal.fire({
        position: 'center',
        icon: 'success',
        title: '<?= $_SESSION['reg_success'] ?>',
        showConfirmButton: false,
        timer: 1500
      })
    </script>
  <?php }
  unset($_SESSION['reg_success']) ?> 
<?php
unset($_SESSION['name']);
unset($_SESSION['email']);
unset($_SESSION['password']);
unset($_SESSION['name_value']);
unset($_SESSION['email_value']);
unset($_SESSION['pass_value']);
?>