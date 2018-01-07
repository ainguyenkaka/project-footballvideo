<?php
include 'sessions.php';

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
						<li><a href="/#tube">One</a></li>
						<li><a href="/#best-matches">Matches</a></li>
						<li><a href="watching">Watch</a></li>
						<li><a href="#">Videos</a></li>
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

		<!--Section: Best Matches-->
		<section id="best-matches">
			<div class="divider-new"></div>
			<div id="row">


				<div class="btn-group">
					<ul id="dropdown2" class="dropdown-content">
						<li><a href="#!">Name</a></li>
						<li><a href="#!">Date</a></li>
						<li><a href="#!">View</a></li>
					</ul>
					<a class="btn btn-primary dropdown-button" href="#!"
						data-activates="dropdown2">Sorting!<i class="material-icons right">arrow_drop_down</i></a>

				</div>


			</div>
			<div class="row">
                <?php foreach (array_slice ( $videos, 0, 4 ) as $v):?>
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

			<div class="row">
                <?php foreach (array_slice ( $videos, 4, 4 ) as $v):?>
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


			<div id="row">
				<div align="center">
					<div class="card">
						<ul class="pagination pag-circle">
							<li><a href="#"><i class="material-icons">chevron_left</i></a></li>
							<li><a href="#">1</a></li>
							<li class="active"><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">4</a></li>
							<li><a href="#">5</a></li>
							<li><a href="#"><i class="material-icons">chevron_right</i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</section>
		<!--/.Section: Best Matches-->
	</div>
	<!--/.Main Container-->

	<div class="fixed-action-btn">
		<a class="btn-floating btn-large waves-effect waves-light red"
			href="/watching?v=V002"><i class="material-icons right">play_arrow</i></a>
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
                 window.location.href = "watching?v=" + id;
            });
            
             $("ul.pagination li").click(function(){
                 $('ul.pagination li').removeClass('active');
                 $(this).addClass('active');
             });
        });
    </script>




	<!-- Bootstrap core JavaScript -->
	<script type="text/javascript" src="js/bootstrap.min.js"></script>

	<!-- Material Design Bootstrap -->
	<script type="text/javascript" src="js/mdb.js"></script>


</body>

</html>