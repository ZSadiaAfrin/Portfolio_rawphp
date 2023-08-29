<?php 
session_start();
require 'login_check.php';
require 'db.php'; 

?>
<?php  require 'dashboard_parts/header.php'; ?>

    <div class="row ">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header">
                    <h2>Welcome To Dashboard <span class="text-primary text-bolder"><?=$after_assoc['name']?></span</h2>
                </div>
                <div class="card-body">
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Obcaecati aliquam.</p>
                </div>
            </div>
        </div>
    </div>

<?php 
require 'dashboard_parts/footer.php';
?>
	
		