<?php include 'sessions.php';
$videos = array_slice($videos, 0,4);
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
						<li><a href="#intro">Home<i class="fa fa-home left"></i></a></li>
						<li><a href="#tube">One</a></li>
						<li><a href="#best-matches">Matches</a></li>
						<li><a href="/watching">Watch</a></li>
						<li><a href="/videos">Videos</a></li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<li><a href="/login">Login</a></li>
					</ul>
					<form class="navbar-form navbar-right" role="search" action="#">
						<div class="form-group waves-effect waves-light">
							<input type="text" class="form-control" placeholder="Search">
						</div>
					</form>
				</div>
			</div>
		</nav>
		<!--/.Navigation-->
	</header>

	<!-- Section: Intro -->
	<section class="full-bg-img">
	<!--Mask-->
		<div class="view">

			<!--Alignment-->
			<div class="verticalcenter">
				<div class="container">
					<div class="verticalcenter text-center white-text">
						<h3>Welcome to football videos</h3>

						<a href="/watching"
							class="btn btn-primary waves-effect waves-light"><i
							class="material-icons right">play_arrow</i>Watch Now</a>

					</div>
				</div>
			</div>
		</div>
	</section>
	<!--/. Section: Intro -->

	<main> <!--Main Container-->
	<div class="container">
		<!--Section: Tube-->
		<section id="tube">
			<div class="divider-new">Best one</div>
			<div class="row">
				<div class="col-md-12 center" align="center">
					<div class="card video-tube hoverable">
						<div class="card-image">
							<!-- 16:9 aspect ratio -->
							<div class="embed-responsive embed-responsive-16by9">
								<video class="embed-responsive-item" controls preload="auto"
									poster="img/chelseavsarseanl.jpg">
									<source
										src="https://www.dropbox.com/s/n0arzgxv5sm4rej/rolnaldo-skills.mp4?dl=1"
										type="video/mp4">
									<track src="subtitles_en.vtt" kind="subtitles" srclang="en"
										label="English"> <track src="subtitles_no.vtt"
										kind="subtitles" srclang="no" label="Norwegian">
								
								</video>
							</div>


						</div>
						<div class="card-content">
							<b class="main-tube-title">Chelsea vs Man City</b>
						</div>
					</div>
				</div>

			</div>

		</section>
		<!--/.Section: Tube-->

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
	<!--/.Main Container--> </main>



<?php include 'footer.php';?>


  <!-- JQuery -->
	<script type="text/javascript" src="js/jquery.min.js"></script>


	<!-- SCRIPTS -->
	<script type="text/javascript">
        $(document).ready(function() {
            
            
            $('.m-card').click(function() {
                window.location.href = "#tube";
                 var id = $(this).attr('data-id');
                 window.location.href = "watching?v=" + id;
            });
            
        });
    </script>



	<!-- Bootstrap core JavaScript -->
	<script type="text/javascript" src="js/bootstrap.min.js"></script>

	<!-- Material Design Bootstrap -->
	<script type="text/javascript" src="js/mdb.js"></script>


</body>

</html>