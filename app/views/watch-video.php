<?php
include 'sessions.php';
$sideVideos = array_slice ( $videos, 0, 5 );
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
		<nav class="navbar m-blue navbar-fixed-top z-depth-1"
			role="navigation">
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
						<li><a href="#tube">One</a></li>
						<li><a href="#matches">Matches</a></li>
						<li><a href="#">Watch</a></li>
						<li><a href="/videos">Videos</a></li>
					</ul>
					<form class="navbar-form navbar-right" role="search">
						<div class="form-group waves-effect waves-light">
							<input type="text" class="form-control" placeholder="Search">
						</div>
					</form>
				</div>
			</div>
		</nav>
		<!--/.Navigation-->

	</header>

	<main> <!--Main Container-->
	<div class="container">
		<!--Section: Tube-->
		<section id="tube">
			<div class="divider-new"></div>
			<div class="row">
				<div class="col-md-7 center">
					<div class="card">
						<div class="card-image">
							<!-- 16:9 aspect ratio -->
							<div class="embed-responsive embed-responsive-16by9">
								<video id="tube-player" class="embed-responsive-item" controls
									preload="auto" poster="img/ct.jpg">
									<source src="https://www.dropbox.com/s/o6ixdlmmj1el5qh/chelsea-tottenham?dl=1" type="video/mp4">
									<track src="subtitles_en.vtt" kind="subtitles" srclang="en"
										label="English"> <track src="subtitles_no.vtt"
										kind="subtitles" srclang="no" label="Norwegian">
								
								</video>

							</div>
						</div>
						<div class="card-footer">
							<b class="h4-responsive">&nbspChelsea vs Man City</b>
						</div>
					</div>
				</div>

				<div class="col-md-5 center">
					<ul class="collection card">
						<?php foreach ($sideVideos as $v):?>
						<li class="collection-item avatar waves-effect"
							data-id="<?php echo $v->id;?>"
							data-source="<?php echo $v->source;?>"><img
							src="img/<?php echo $v->img;?>.jpg" alt="" class="circle"> <span
							class="title"><?php echo $v->name;?></span>
							<p><?php echo $v->des;?></p> <a href="#!"
							class="secondary-content"> <i class="material-icons">grade</i> <i
								class="material-icons">grade</i> <i class="material-icons">grade</i></a>
						</li>
						<?php endforeach;?>

					</ul>

				</div>
			</div>

		</section>
		<!--/.Section: Tube-->


		<!--Section: matches-->

		<section id="matches">

			<!-- Carousel -->
			<div id="matches-carousel" class="carousel slide multiitem-car">

				<!-- Wrapper for slides -->
				<div class="carousel-inner">

					<ol class="carousel-indicators" style="top: 0px; height: 30px;">
						<li data-target="#matches-carousel" data-slide-to="0"
							class="active"></li>
						<li data-target="#matches-carousel" data-slide-to="1"></li>
						<li data-target="#matches-carousel" data-slide-to="2"></li>
					</ol>
					<!-- First slide -->
					<div class="item active">

						<!-- Row -->
						<div class="row text-center">

						<?php foreach (array_slice($videos, 0,4) as $v):?>
							<!-- Card -->
							<div class="col-sm-3 item-card" data-id="<?php echo $v->id;?>"
								data-source="<?php echo $v->source;?>">
								<div class="card z-depth-1 hoverable">
									<div class="card-up green"></div>
									<div class="card-image  waves-effect">
										<img src="img/<?php echo $v->img;?>.jpg"
											class="img-responsive" alt="">
										<h5><?php echo $v->name;?></h5>
									</div>
								</div>
							</div>
							<!-- /.Card -->
						<?php endforeach;?>
						</div>
						<!-- /.row -->

					</div>
					<!-- /.item -->

					<!-- First slide -->
					<div class="item">

						<!-- Row -->
						<div class="row text-center">

						<?php foreach (array_slice($videos, 0,4) as $v):?>
							<!-- Card -->
							<div class="col-sm-3 item-card" data-id="<?php echo $v->id;?>"
								data-source="<?php echo $v->source;?>">
								<div class="card z-depth-1 hoverable">
									<div class="card-up green"></div>
									<div class="card-image  waves-effect">
										<img src="img/<?php echo $v->img;?>.jpg"
											class="img-responsive" alt="">
										<h5><?php echo $v->name;?></h5>
									</div>
								</div>
							</div>
							<!-- /.Card -->
						<?php endforeach;?>
						</div>
						<!-- /.row -->

					</div>
					<!-- /.item -->

					<!-- First slide -->
					<div class="item">

						<!-- Row -->
						<div class="row text-center">

						<?php foreach (array_slice($videos, 0,4) as $v):?>
							<!-- Card -->
							<div class="col-sm-3 item-card" data-id="<?php echo $v->id;?>"
								data-source="<?php echo $v->source;?>">
								<div class="card z-depth-1 hoverable">
									<div class="card-up green"></div>
									<div class="card-image  waves-effect">
										<img src="img/<?php echo $v->img;?>.jpg"
											class="img-responsive" alt="">
										<h5><?php echo $v->name;?></h5>
									</div>
								</div>
							</div>
							<!-- /.Card -->
						<?php endforeach;?>
						</div>
						<!-- /.row -->

					</div>
					<!-- /.item -->

				</div>
				<!-- /.carousel-inner -->

				<div class="text-center">
					<a
						class="btn-floating btn-small waves-effect waves-light grey darken-4"
						href="#matches-carousel" role="button" data-slide="prev"><i
						class="material-icons">keyboard_arrow_left</i></a> <a
						class="btn-floating btn-small waves-effect waves-light grey darken-4"
						href="#matches-carousel" role="button" data-slide="next"><i
						class="material-icons">keyboard_arrow_right</i></a>
				</div>


			</div>
			<!-- /.carousel -->

		</section>
		<!--Section: matches-->
	</div>
	<!--/.Main Container--> </main>

   <?php include 'footer.php';?>


 	<!-- JQuery -->
	<script type="text/javascript" src="js/jquery.min.js"></script>

	<!-- SCRIPTS -->
	<script type="text/javascript">
        $(document).ready(function() {
            $('.carousel').carousel();
           
            
            var videoId = getParameterByName('v');
            if(videoId) {
                <?php
																$v = $videoManager->get ( $_GET ["v"] );
																?>
				
                var source = "<?php echo $v->source;?>";
            	var poster = "img/" + "<?php echo $v->img;?>" + ".jpg";
                changeVideo(source,poster,"other");								
            }

            $('.collection-item').click(function() {
            	clickVideoItem($(this));
            });
            
            $('.item-card').click(function() {
              
                 clickVideoItem($(this));
                 window.location.href = "#tube";
            });
            
            function changeVideo(source,poster,otherState){
            	 $('#tube-player').attr('poster',poster);
                  $('#tube-player').attr('src','https://www.dropbox.com/s/' + source + '?dl=1');
                  $('#tube-player').attr('autoplay','true');
            }

            function clickVideoItem(e){
            	 var id = e.attr('data-id');
            	 changeUrl(id);
                 var source = e.attr('data-source');
                 var poster = e.find('img').attr('src');
                 changeVideo(source,poster);
            }

            function changeUrl(id) {
            	window.history.pushState('watching video', 'Football Videos', '/watching?v=' + id);
            }
            
            function getParameterByName(name, url) {
                if (!url) url = window.location.href;
                name = name.replace(/[\[\]]/g, "\\$&");
                var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
                    results = regex.exec(url);
                if (!results) return null;
                if (!results[2]) return '';
                return decodeURIComponent(results[2].replace(/\+/g, " "));
            }
        });
    </script>



	<!-- Bootstrap core JavaScript -->
	<script type="text/javascript" src="js/bootstrap.min.js"></script>

	<!-- Material Design Bootstrap -->
	<script type="text/javascript" src="js/mdb.js"></script>



</body>

</html>