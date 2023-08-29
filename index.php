<?php 
session_start();
require 'db.php';
$select_logo="SELECT * FROM logos WHERE status=1";
$select_logo_res=mysqli_query($database_connection,$select_logo);
$after_assoc_res_logo=mysqli_fetch_assoc($select_logo_res);
//INFORMATION
$select_banner = "SELECT * FROM banners";
$select_banner_res = mysqli_query($database_connection, $select_banner);
$after_assoc_banner = mysqli_fetch_assoc($select_banner_res);
//information part2
$select_banner_info = "SELECT * FROM banner_informations";
$select_banner_res_info = mysqli_query($database_connection, $select_banner_info);
$after_assoc_banner_info = mysqli_fetch_assoc($select_banner_res_info);
//banner-photo
$select_banner_photo = "SELECT * FROM banner_photos WHERE status=1";
$select_banner_res_photo = mysqli_query($database_connection, $select_banner_photo);
$after_assoc_banner_photo=mysqli_fetch_assoc($select_banner_res_photo );
//banner photo part2
$select_banner_photo2 = "SELECT * FROM banner2_photos";
$select_banner_res_photo2 = mysqli_query($database_connection, $select_banner_photo2);
$after_assoc_banner_photo2=mysqli_fetch_assoc($select_banner_res_photo2);
//about information
$select_about="SELECT * FROM abouts";
$select_about_res=mysqli_query($database_connection,$select_about);
$after_assoc_about=mysqli_fetch_assoc($select_about_res);
//social
$select_social="SELECT * FROM socials WHERE status=1";
$select_social_res=mysqli_query($database_connection,$select_social);
$after_assoc_social=mysqli_fetch_assoc($select_social_res);
// about social
$about_icon="SELECT * FROM about_icons WHERE status=1" ;
$about_icon_res=mysqli_query($database_connection,$about_icon);
$about_photo="SELECT * FROM about_photos WHERE status=1";
$about_photo_res=mysqli_query($database_connection,$about_photo);
$after_assoc_about_photo=mysqli_fetch_assoc($about_photo_res);
//skill
$select_skill_info = "SELECT * FROM skill_infos";
$select_skill_res_info = mysqli_query($database_connection, $select_skill_info);
$after_assoc_res_info=mysqli_fetch_assoc($select_skill_res_info);

$select_skills = "SELECT * FROM skills WHERE status=1";
$select_skill_res_skill = mysqli_query($database_connection, $select_skills);
//work
$select_work_info = "SELECT * FROM work_infos";
$select_work_res_info = mysqli_query($database_connection, $select_work_info);
$after_assoc_work=mysqli_fetch_assoc($select_work_res_info);

$select_work_desp = "SELECT * FROM works";
$select_work_res_desp= mysqli_query($database_connection, $select_work_desp);

$select_work_service = "SELECT * FROM work_services";
$select_work_res_service = mysqli_query($database_connection, $select_work_service);
$after_assoc_service=mysqli_fetch_assoc($select_work_res_service);
//project
$select_project = "SELECT * FROM projects";
$select_project_res = mysqli_query($database_connection, $select_project);
$after_assoc_project = mysqli_fetch_assoc($select_project_res);

$select_project_desp = "SELECT * FROM project_describes";
$select_project_res_desp = mysqli_query($database_connection, $select_project_desp);
//testimonial
$select_test="SELECT * FROM testimonials";
$select_test_res=mysqli_query($database_connection,$select_test);
$after_assoc_testimonial=mysqli_fetch_assoc($select_test_res);

$select_test_info="SELECT * FROM testimonial_infos";
$select_test_res_info=mysqli_query($database_connection,$select_test_info);
//blog
$select_blog = "SELECT * FROM blogs";
$select_blog_res = mysqli_query($database_connection, $select_blog);
$after_assoc_blog=mysqli_fetch_assoc($select_blog_res);
$select_blog_info = "SELECT * FROM blog_infos";
$select_blog_res_info = mysqli_query($database_connection, $select_blog_info);
//msg
$select_contact = "SELECT * FROM contacts";
$select_contact_res = mysqli_query($database_connection, $select_contact);
$after_assoc_contact=mysqli_fetch_assoc($select_contact_res);

$select_msg1 = "SELECT * FROM msg_icons WHERE status=1";
$select_msg_res1 = mysqli_query($database_connection, $select_msg1);
$after_assoc_msg1=mysqli_fetch_assoc($select_msg_res1);

$select_msg3 = "SELECT * FROM msg_icons WHERE status=3";
$select_msg_res3 = mysqli_query($database_connection, $select_msg3);
$after_assoc_msg3=mysqli_fetch_assoc($select_msg_res3);

$select_msg2 = "SELECT * FROM msg_icons WHERE status=2";
$select_msg_res2 = mysqli_query($database_connection, $select_msg2);
$after_assoc_msg2=mysqli_fetch_assoc($select_msg_res2);

$select_msg4 = "SELECT * FROM msg_icons WHERE status=4";
$select_msg_res4 = mysqli_query($database_connection, $select_msg4);
$after_assoc_msg4=mysqli_fetch_assoc($select_msg_res4);
//counters
$select_counter="SELECT * FROM counters";
$select_counter_res=mysqli_query($database_connection,$select_counter);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Clyde - Free Bootstrap 4 Template by Colorlib</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
	
	<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="css/animate.css">
	
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<link rel="stylesheet" href="css/magnific-popup.css">
	
	<link rel="stylesheet" href="css/flaticon.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
	
	
	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light site-navbar-target" id="ftco-navbar">
		<div class="container">
			<a class="navbar-brand" href="index.html"><span><img src="uploads/logo/<?=$after_assoc_res_logo['logo']?>" alt=""></span><span>.</span></a>
			<button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="oi oi-menu"></span> Menu
			</button>

			<div class="collapse navbar-collapse" id="ftco-nav">
				<ul class="navbar-nav nav ml-auto">
					<li class="nav-item"><a href="#home-section" class="nav-link"><span>Home</span></a></li>
					<li class="nav-item"><a href="#about-section" class="nav-link"><span>About</span></a></li>
					<li class="nav-item"><a href="#skills-section" class="nav-link"><span>Skills</span></a></li>
					<li class="nav-item"><a href="#services-section" class="nav-link"><span>Services</span></a></li>
					<li class="nav-item"><a href="#projects-section" class="nav-link"><span>Projects</span></a></li>
					<li class="nav-item"><a href="#blog-section" class="nav-link"><span>Blog</span></a></li>
					<li class="nav-item"><a href="#contact-section" class="nav-link"><span>Contact</span></a></li>
				</ul>
			</div>
		</div>
	</nav>
	<section id="home-section" class="hero">
		<div class="home-slider owl-carousel">
			<div class="slider-item">
				<div class="overlay"></div>
				<div class="container-fluid px-md-0">
					<div class="row d-md-flex no-gutters slider-text align-items-end justify-content-end" data-scrollax-parent="true">
						<div class="one-third order-md-last img" style="background-image:url(uploads/banner1/<?=$after_assoc_banner_photo2['photo']?>);">
							<div class="overlay"></div>
							<div class="overlay-1"></div>
						</div>
						<div class="one-forth d-flex  align-items-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
							<div class="text">
								
								<span class="subheading"><?=$after_assoc_banner['sub_title']?></span>
								<h1 class="mb-4 mt-3"><?=$after_assoc_banner['title']?></h1>
								
								<p><a href="#about-section" class="btn btn-primary">About me</a> <a href="#skills-section" class="btn btn-primary btn-outline-primary">Skills</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="slider-item">
				<div class="overlay"></div>
				<div class="container-fluid px-md-0">
					<div class="row d-flex no-gutters slider-text align-items-end justify-content-end" data-scrollax-parent="true">
						<div class="one-third order-md-last img" style="background-image:url(uploads/banner/<?=$after_assoc_banner_photo['photo']?>);">
							<div class="overlay"></div>
							<div class="overlay-1"></div>
						</div>
						<div class="one-forth d-flex align-items-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
							<div class="text">
								<span class="subheading"><?=$after_assoc_banner_info['sub_title']?></span>
								<h1 class="mb-4 mt-3"><?=$after_assoc_banner_info['title']?></h1>
								<p><a href="#about-section" class="btn btn-primary">About me</a> <a href="#skills-section" class="btn btn-primary btn-outline-primary">Skills</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-counter img bg-light" id="section-counter">
		<div class="container">
			<div class="row">
				<?php foreach ($select_counter_res as $key => $counter) {
					# code...
				?>
				<div class="col-md-3 justify-content-center counter-wrap ftco-animate">
					<div class="block-18 d-flex">
						<div class="icon d-flex justify-content-center align-items-center">
							<i style="font-family: fontawesome;">
								<span class="<?=$counter['icon']?>"></span>
							</i>
						</div>
						<div class="text">
							<strong class="number" data-number="<?=$counter['number']?>">k</strong>
							<span><?=$counter['sub_title']?></span>
						</div>
					</div>
				</div>
				<?php } ?> 
			</div>
		</div>
	</section>

	<section class="ftco-about ftco-section ftco-no-pt ftco-no-pb" id="about-section">
		<div class="container">
			<div class="row d-flex no-gutters">
				<div class="col-md-6 col-lg-5 d-flex">
					<div class="img-about img d-flex align-items-stretch">
						<div class="overlay"></div>
						<div class="img d-flex align-self-stretch align-items-center" style="background-image:url(uploads/about_photo/<?=$after_assoc_about_photo['photo']?>);">
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-7 pl-md-4 pl-lg-5 py-5">
					<div class="py-md-5">
						<div class="row justify-content-start pb-3">
							<div class="col-md-12 heading-section ftco-animate">
								<span class="subheading"><?=$after_assoc_about['sub_title']?></span>
								<h2 class="mb-4" style="font-size: 34px; text-transform: capitalize;"><?=$after_assoc_about['title']?></h2>
								<p><?=$after_assoc_about['desp']?></p>

								<ul class="about-info mt-4 px-md-0 px-2">
									<li class="d-flex"><span>Name:</span> <span><?=$after_assoc_about['name']?></span></li>
									<li class="d-flex"><span>Date of birth:</span> <span><?=$after_assoc_about['dob']?></span></li>
									<li class="d-flex"><span>Address:</span> <span><?=$after_assoc_about['address']?></span></li>
									<li class="d-flex"><span>Zip code:</span> <span><?=$after_assoc_about['zip']?></span></li>
									<li class="d-flex"><span>Email:</span> <span><?=$after_assoc_about['email']?></span></li>
									<li class="d-flex"><span>Phone: </span> <span><?=$after_assoc_about['phone']?></span></li>
								</ul>
							</div>
							<div class="col-md-12">
								<div class="my-interest d-lg-flex w-100">
									<!-- <div class="interest-wrap d-flex align-items-center">
										<div class="icon d-flex align-items-center justify-content-center">
											<span class="flaticon-listening"></span>
										</div>
										<div class="text">Music</div>
									</div>
									<div class="interest-wrap d-flex align-items-center">
										<div class="icon d-flex align-items-center justify-content-center">
											<span class="flaticon-suitcases"></span>
										</div>
										<div class="text">Travel</div>
									</div>
									<div class="interest-wrap d-flex align-items-center">
										<div class="icon d-flex align-items-center justify-content-center">
											<span class="flaticon-video-player"></span>
										</div>
										<div class="text">Movie</div>
									</div>
									<div class="interest-wrap d-flex align-items-center">
										<div class="icon d-flex align-items-center justify-content-center">
											<span class="flaticon-football"></span>
										</div>
										<div class="text">Sports</div>
									</div> -->
									<?php foreach ($about_icon_res as $key => $value) {
											# code...
										?>
									<div class="interest-wrap d-flex align-items-center">
										
										<div class="icon d-flex align-items-center justify-content-center">
										
											<a href="<?=$value['link']?>"><i class="font-family:fontawesome">
											<span class="<?=$value['icon']?>"></span>
											</i><a>
										</div>
										<a href="<?=$value['link']?>" >
										<div class="text"><?=$value['name']?></div><a>
										
									</div>
									<?php } ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<section class="ftco-section bg-light" id="skills-section">
		<div class="container">
			<div class="row justify-content-center pb-5">
				<div class="col-md-12 heading-section text-center ftco-animate">
					<span class="subheading"><?=$after_assoc_res_info['sub_title']?></span>
					<h2 class="mb-4"><?=$after_assoc_res_info['title']?></h2>
					<p><?=$after_assoc_res_info['desp']?></p>
				</div>
			</div>
			<div class="row progress-circle mb-5"> 
			<?php foreach ($select_skill_res_skill as $key => $skill) {
						# code...
					?>
				<div class="col-lg-4 mb-4">
					
					<div class="bg-white rounded-lg shadow p-4">
					
						<h2 class="h5 font-weight-bold text-center mb-4"><?=$skill['skill']?></h2>

						<!-- Progress bar 1 -->
						<div class="progress mx-auto" data-value='92'>
							<span class="progress-left">
								<span class="progress-bar border-primary"></span>
							</span>
							<span class="progress-right">
								<span class="progress-bar border-primary"></span>
							</span>
							<div class="progress-value w-100 h-100 rounded-circle d-flex align-items-center justify-content-center">
								<div class="h2 font-weight-bold"><?=$skill['percentage']?><sup class="small">%</sup></div>
							</div>
						</div>
						<!-- END -->

						<!-- Demo info -->
						<div class="row text-center mt-4">
							<div class="col-6 border-right">
								<div class="h4 font-weight-bold mb-0"><?=$skill['week_per']?></div><span class="small text-gray"><?=$skill['week']?></span>
							</div>
							<div class="col-6">
								<div class="h4 font-weight-bold mb-0"><?=$skill['month_per']?></div><span class="small text-gray"><?=$skill['month']?></span>
							</div>
						</div>
						<!-- END -->
					
					</div>
					
				</div> 
				<?php } ?>
			</div>
		</div>
	</section>

	<section class="ftco-section" id="services-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-12 heading-section text-center ftco-animate mb-5">
					<span class="subheading"><?=$after_assoc_work['title']?></span>
					<h2 class="mb-4"><?=$after_assoc_work['sub_title']?></h2>
					<p><?=$after_assoc_work['desp']?></p>
				</div>
			</div>

			<div class="row" > 
				<?php foreach ($select_work_res_desp as $key => $work) {
					# code...
				?>
				<div class="col-md-6 col-lg-4" style="height:auto!important;" >
			
				 <div class="media block-6 services d-block bg-white rounded-lg shadow ftco-animate">
						<div class="icon shadow d-flex align-items-center justify-content-center"><a href="<?=$work['link']?>"><span style="font-family: fontawesome;" class="<?=$work['icon']?>"></span></a></div>
						<div class="media-body">
							<h3 class="heading mb-3"><?=$work['sub_title']?></h3>
							<p><?=$work['title']?></p>
						</div>
					</div>
				 </div>
				
				<?php }?>
			
			</div>

			<!-- <div class="row">
				<div class="col-md-6 col-lg-3">
					<div class="media block-6 services d-block bg-white rounded-lg shadow ftco-animate">
						<div class="icon shadow d-flex align-items-center justify-content-center"><span class="flaticon-computer"></span></div>
						<div class="media-body">
							<h3 class="heading mb-3">Branding</h3>
							<p>A small river named Duden flows by their place and supplies.</p>
						</div>
					</div> 
				</div>
				<div class="col-md-6 col-lg-3">
					<div class="media block-6 services d-block bg-white rounded-lg shadow ftco-animate">
						<div class="icon shadow d-flex align-items-center justify-content-center"><span class="flaticon-vector"></span></div>
						<div class="media-body">
							<h3 class="heading mb-3">Icon Design</h3>
							<p>A small river named Duden flows by their place and supplies.</p>
						</div>
					</div> 
				</div>
				<div class="col-md-6 col-lg-3">
					<div class="media block-6 services d-block bg-white rounded-lg shadow ftco-animate">
						<div class="icon shadow d-flex align-items-center justify-content-center"><span class="flaticon-vector"></span></div>
						<div class="media-body">
							<h3 class="heading mb-3">Graphic Design</h3>
							<p>A small river named Duden flows by their place and supplies.</p>
						</div>
					</div> 
				</div>
				<div class="col-md-6 col-lg-3">
					<div class="media block-6 services d-block bg-white rounded-lg shadow ftco-animate">
						<div class="icon shadow d-flex align-items-center justify-content-center"><span class="flaticon-zoom"></span></div>
						<div class="media-body">
							<h3 class="heading mb-3">SEO</h3>
							<p>A small river named Duden flows by their place and supplies.</p>
						</div>
					</div> 
				</div>
			</div> -->
		</div>
	</section>

	<section class="ftco-hireme">
		<div class="container">
			<div class="row justify-content-between">
				<div class="col-md-8 col-lg-8 d-flex align-items-center">
					<div class="w-100 py-4">
						<h2><?=$after_assoc_service['sub_title']?></h2>
						<p><?=$after_assoc_service['title']?></p>
						<p class="mb-0"><a href="#" class="btn btn-white py-3 px-4">Contact me</a></p>
					</div>
				</div>
				<div class="col-md-4 col-lg-4 d-flex align-items-end">
					<img src="uploads/service/<?=$after_assoc_service['photo']?>" class="img-fluid" alt="">
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section ftco-project" id="projects-section">
		<div class="container-fluid px-md-4">
			<div class="row justify-content-center pb-5">
				<div class="col-md-12 heading-section text-center ftco-animate">
					<span class="subheading"><?=$after_assoc_project['sub_title']?></span>
					<h2 class="mb-4"><?=$after_assoc_project['title']?></h2>
					<p><?=$after_assoc_project['desp']?></p>
				</div>
			</div>
			<div class="row">
				<?php foreach ($select_project_res_desp as $key => $project) {?> 
				<div class="col-md-4">
					<a href="https://github.com/ZSadiaAfrin">
					<div class="project img shadow ftco-animate d-flex justify-content-center align-items-center" style="background-image: url(uploads/project/<?=$project['photo']?>);">
					</a>
						<div class="overlay"></div>
						<div class="text text-center p-4">
							<h3><a href="https://github.com/ZSadiaAfrin"><?=$project['sub_title']?></a></h3>
							<span><?=$project['title']?></span>
						</div>
					</div>
				</div> 
				<?php }?>
			</div>
		</div>
	</section>

	<section class="ftco-section testimony-section bg-primary">
		<div class="container">
			<div class="row justify-content-center pb-5">
				<div class="col-md-12 heading-section heading-section-white text-center ftco-animate">
					<span class="subheading"><?=$after_assoc_testimonial['sub_title']?></span>
					<h2 class="mb-4"><?=$after_assoc_testimonial['title']?></h2>
					<p><?=$after_assoc_testimonial['desp']?></p>
				</div>
			</div>
			<div class="row ftco-animate">
				
				<div class="col-md-12">
				
					<div class="carousel-testimony owl-carousel">
						<?php foreach ($select_test_res_info as $key => $testimonial) {
						# code...
						?>
						<div class="item">
							<div class="testimony-wrap py-4">
								<div class="text">
									<span class="fa fa-quote-left"></span>
									<p class="mb-4 pl-5"><?=$testimonial['desp']?></p>
									<div class="d-flex align-items-center">
										<div class="user-img" style="background-image: url(uploads/testimonial/<?=$testimonial['photo']?>)"></div>
										<div class="pl-3">
											<p class="name"><?=$testimonial['sub_title']?></p>
											<span class="position"><?=$testimonial['title']?></span>
										</div>
									</div>
								</div>
							</div>
						</div> 
						<?php } ?>
					</div>
					
				</div>
				
			</div>
		</div>
	</section>


	<section class="ftco-section bg-light" id="blog-section">
		<div class="container">
			<div class="row justify-content-center mb-5 pb-5">
				<div class="col-md-7 heading-section text-center ftco-animate">
					<span class="subheading"><?=$after_assoc_blog['sub_title']?></span>
					<h2 class="mb-4"><?=$after_assoc_blog['title']?></h2>
					<p><?=$after_assoc_blog['desp']?></p>
				</div>
			</div>
			<div class="row d-flex">
				<?php foreach ($select_blog_res_info as $key => $blog) {
					# code...
				?>
				<div class="col-md-4 d-flex ftco-animate">
					<div class="blog-entry justify-content-end">
						<a href="" class="block-20" style="background-image: url('uploads/blog/<?=$blog['photo']?>');">
						</a>
						<div class="text mt-3 float-right d-block">
							<div class="d-flex align-items-center mb-3 meta">
								<p class="mb-0">
									<!-- <span class="mr-2"></span> -->
									<a href="#" class="mr-2"><?=$blog['date']?></a>
									<!-- <a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a> -->
								</p>
							</div>
							<h3 class="heading"><a href=""><?=$blog['sub_title']?></a></h3>
							<p><?=$blog['title']?></p>
						</div>
					</div>
				</div> 
				<?php }?>
			</div>
		</div>
	</section>

	<section class="ftco-section contact-section ftco-no-pb" id="contact-section">
		<div class="container">
			<div class="row justify-content-center mb-5 pb-3">
				<div class="col-md-7 heading-section text-center ftco-animate">
					<span class="subheading"><?=$after_assoc_contact['sub_title']?></span>
					<h2 class="mb-4"><?=$after_assoc_contact['title']?></h2>
					<p><?=$after_assoc_contact['desp']?></p>
				</div>
			</div>

			<div class="row block-9">
				<div class="col-md-8">
					<?php if(isset($_SESSION['msg'])){?>
						<div class="alert alert-success"><?=$_SESSION['msg']?></div>
						<?php }unset($_SESSION['msg'])?>
					<form action="message/message_post.php" method="POST" class="bg-light p-4 p-md-5 contact-form">
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<input type="text" class="form-control" name="name" placeholder="Your Name">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<input type="text" name="email" class="form-control" placeholder="Your Email">
								</div>
							</div>
							<!-- <div class="col-md-12">
								<div class="form-group">
									<input type="text"  class="form-control" placeholder="Subject">
								</div>
							</div> -->
							<div class="col-md-12">
								<div class="form-group">
									<textarea name="msg" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<button type="submit" value="Send Message" class="btn btn-primary py-3 px-5">Submit</button>
								</div>
							</div>
						</div>
					</form>
					
				</div>

				<div class="col-md-4 d-flex pl-md-5">
					<div class="row">
						<div class="dbox w-100 d-flex">
							<div class="icon d-flex align-items-center justify-content-center">
								<a href="<?=$after_assoc_msg1['link']?>">
									<i class="font-family:fontawesome"><span class="<?=$after_assoc_msg1['icon']?>"></span></i>
								</a>
							</div>
							<div class="text">
								<p><span>Address:</span><?=$after_assoc_about['address']?></p>
							</div>
						</div>
						<div class="dbox w-100 d-flex">
							<div class="icon d-flex align-items-center justify-content-center">
							<a href="<?=$after_assoc_msg3['link']?>">
									<i class="font-family:fontawesome"><span class="<?=$after_assoc_msg3['icon']?>"></span></i>
								</a>
							</div>
							<div class="text">
								<p><span>Phone:</span> <a href="tel://1234567920"><?=$after_assoc_about['phone']?></a></p>
							</div>
						</div>
						<div class="dbox w-100 d-flex">
							<div class="icon d-flex align-items-center justify-content-center">
							<a href="<?=$after_assoc_msg2['link']?>">
									<i class="font-family:fontawesome"><span class="<?=$after_assoc_msg2['icon']?>"></span></i>
								</a>
							</div>
							<div class="text">
								<p><span>Email:</span> <a href="mailto:info@yoursite.com"><?=$after_assoc_about['email']?></a></p>
							</div>
						</div>
						<div class="dbox w-100 d-flex">
							<div class="icon d-flex align-items-center justify-content-center">
							<a href="<?=$after_assoc_msg4['link']?>">
									<i class="font-family:fontawesome"><span class="<?=$after_assoc_msg4['icon']?>"></span></i>
								</a>
							</div>
							<div class="text">
								<p><span>telegram</span> <a href="#"><?=$after_assoc_about['phone']?></a></p>
							</div>
						</div>
					</div>
					<!-- <div id="map" class="map"></div> -->
				</div>
			</div>
		</div>
	</section>
	

	<footer class="ftco-footer ftco-section">
		<div class="container">
			<!-- <div class="row mb-5">
				<div class="col-md">
					<div class="ftco-footer-widget mb-4">
						<h2 class="ftco-heading-2">Lets talk about</h2>
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
						<p><a href="#" class="btn btn-primary">Learn more</a></p>
					</div>
				</div>
				<div class="col-md">
					<div class="ftco-footer-widget mb-4 ml-md-4">
						<h2 class="ftco-heading-2">Links</h2>
						<ul class="list-unstyled">
							<li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Home</a></li>
							<li><a href="#"><span class="fa fa-chevron-right mr-2"></span>About</a></li>
							<li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Services</a></li>
							<li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Projects</a></li>
							<li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Contact</a></li>
						</ul>
					</div>
				</div>
				<div class="col-md">
					<div class="ftco-footer-widget mb-4">
						<h2 class="ftco-heading-2">Services</h2>
						<ul class="list-unstyled">
							<li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Web Design</a></li>
							<li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Web Development</a></li>
							<li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Business Strategy</a></li>
							<li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Data Analysis</a></li>
							<li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Graphic Design</a></li>
						</ul>
					</div>
				</div>
				<div class="col-md">
					<div class="ftco-footer-widget mb-4">
						<h2 class="ftco-heading-2">Have a Questions?</h2>
						<div class="block-23 mb-3">
							<ul>
								<li><span class="icon fa fa-map marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
								<li><a href="#"><span class="icon fa fa-phone"></span><span class="text">+2 392 3929 210</span></a></li>
								<li><a href="#"><span class="icon fa fa-paper-plane pr-4"></span><span class="text">info@yourdomain.com</span></a></li>
							</ul>
						</div>
						<ul class="ftco-footer-social list-unstyled mt-2">
							<li class="ftco-animate"><a href="#"><span class="fa fa-twitter"></span></a></li>
							<li class="ftco-animate"><a href="#"><span class="fa fa-facebook"></span></a></li>
							<li class="ftco-animate"><a href="#"><span class="fa fa-instagram"></span></a></li>
						</ul>
					</div>
				</div>
			</div> -->
			<div class="row">
				<div class="col-md-12 text-center">

					<p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Sadia Afrin</a>
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
					</div>
				</div>
			</div>
		</footer>
		
		

		<!-- loader -->
		<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


		<script src="js/jquery.min.js"></script>
		<script src="js/jquery-migrate-3.0.1.min.js"></script>
		<script src="js/popper.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/jquery.easing.1.3.js"></script>
		<script src="js/jquery.waypoints.min.js"></script>
		<script src="js/jquery.stellar.min.js"></script>
		<script src="js/owl.carousel.min.js"></script>
		<script src="js/jquery.magnific-popup.min.js"></script>
		<script src="js/jquery.animateNumber.min.js"></script>
		<script src="js/scrollax.min.js"></script>
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
		<script src="js/google-map.js"></script>
		
		<script src="js/main.js"></script>
		
	</body>
	</html>