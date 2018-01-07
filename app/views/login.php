<?php
include 'sessions.php';
$videos = array_slice ( $videos, 0, 4 );
?>
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Football Videos</title>

   <?php include 'css-header.php';?>

</head>

<body>
	<header>

		<!--Navigation-->
		<nav class="navbar navbar-fixed-top z-depth-1" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed"
						data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span> <span
							class="icon-bar"></span> <span class="icon-bar"></span> <span
							class="icon-bar"></span>
					</button>
				</div>
				<div class="collapse navbar-collapse"
					id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li><a href="/">Home<i class="fa fa-home left"></i></a></li>
						<li><a href="/#tube">One</a></li>
						<li><a href="#best-matches">Matches</a></li>
						<li><a href="/watching">Watch</a></li>
						<li><a href="/videos">Videos</a></li>
					</ul>

				</div>
			</div>
		</nav>
		<!--/.Navigation-->
	</header>

	<!-- Intro image -->
	<section class="full-bg-img" id="sec-home">
		<!--Mask-->
		<div class="view">

			<!--Alignment-->
			<div class="verticalcenter">
				<div class="container">
					<div class="row">

						<!--Content-->
						<div class="col-md-6 white-text wow fadeInLeft">
							<br>
							<h2>Football Videos</h2>

							<p>Football Videos is the website that allows users watch their
								favorite videos by just few clicks. Enjoy watching and have fun!</p>

							<a href="/watching"
								class="btn btn-primary btn-ptc btn-lg waves-effect waves-light">Watch
								Now</a>

						</div>
						<!--/.Content-->

						<!--Form-->
						<div class="col-md-6 wow fadeInRight">
							<div class="card-panel">

								<!--Header-->
								<div class="text-center">
									<h4>
										<i class="fa fa-user"></i> Login with:
									</h4>
									<a class="btn-floating btn-large waves-effect waves-light m-fb"><i
										class="fa fa-facebook"> </i></a> <a
										class="btn-floating btn-large waves-effect waves-light m-tw"><i
										class="fa fa-twitter"> </i></a> <a
										class="btn-floating btn-large waves-effect waves-light m-gplus"><i
										class="fa fa-google-plus"> </i></a> <a
										class="btn-floating btn-large waves-effect waves-light m-link"><i
										class="fa fa-linkedin"> </i></a> <a
										class="btn-floating btn-large waves-effect waves-light m-git"><i
										class="fa fa-github"> </i></a>
								</div>
								<!--/.Header-->
								<!--Form-->
								<form>
									<h4 class="text-center">or:</h4>

									<div class="input-field">
										<i class="material-icons prefix">account_circle</i> <input
											id="icon_prefix" type="text" class="validate"> <label
											for="icon_prefix">Your name</label>
									</div>

									<div class="input-field">
										<i class="material-icons prefix">email</i> <input
											id="icon_email" type="tel" class="validate"> <label
											for="icon_email">Your email</label>
									</div>

									<div class="text-center">
										<button type="button"
											class="btn btn-primary btn-lg btn-ptc waves-effect waves-light">Sign
											up</button>
										<div class="subscription-checkbox">
											<label for="test6"></label>
										</div>
									</div>

								</form>
								<!--/.Form-->
							</div>
						</div>
						<!--/.Form-->

					</div>
				</div>
			</div>
			<!--/.Alignment-->

		</div>
		<!--/.Mask-->
	</section>
	<!--/. Intro image -->
	<main> <!--Main Container-->
	<div class="container">
		<!--Section: Best Features-->
		<section id="best-matches">
			<div class="divider-new">Best matches</div>

			<div class="row">
					<?php foreach ($videos as $v):?>
                    <!--First column-->
				<div class="col-md-3">
					<!--Image Card-->
					<div class="card hoverable m-card" data-id="<?php echo $v->id;?>">
						<div class="card-image">
							<div class="view overlay hm-white-slight z-depth-1">
								<img src="img/<?php echo $v->img;?>.jpg" class="img-responsive"
									alt="">
								<div class="mask waves-effect"></div>
							</div>

						</div>
						<div class="card-content">
							<b><?php echo $v->name;?></b>
						</div>

					</div>
					<!--Image Card-->
				</div>
				<!--/.First column-->

                  <?php endforeach;?>
                </div>

		</section>
		<!--/.Section: Best Features-->
	</div>
	</main>
   
   <?php include 'footer.php';?>

 <!-- JQuery -->
	<script type="text/javascript" src="js/jquery.min.js"></script>

	<!-- SCRIPTS -->
	<script type="text/javascript">
        $(document).ready(function() {
            
            
            $('.m-card').click(function() {
                window.location.href = "#tube";
                 var id = $(this).attr('data-id');
                 window.location.href = "/watching?v=" + id;
            });
            
        });
    </script>




	<!-- Bootstrap core JavaScript -->
	<script type="text/javascript" src="js/bootstrap.min.js"></script>

	<!-- Material Design Bootstrap -->
	<script type="text/javascript" src="js/mdb.js"></script>


</body>

</html>