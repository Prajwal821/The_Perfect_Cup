<?php
//Initialize Session
session_start();

if (isset($_SESSION['login'])) {

    $fname = $_SESSION['fname'];
    $lname = $_SESSION['lname'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
		
		<style>
	body {
	  background-image: url('background.png');
	  background-repeat: no-repeat;
	  background-attachment: fixed;
	  background-size: 100% 100%;
	}
	</style>

	
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>The Perfect Cup - Blog</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/business-casual.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div class="brand">The Perfect Cup</div>
    <div class="address-bar">3481 Melrose Place | Beverly Hills, CA 90210 | 123.456.7890</div>

    <!-- Navigation -->
    <?php require_once 'nav.php'; ?>

    <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
				
				<h2 class="text-center">Welcome <?php echo $fname; echo " "; echo $lname; ?> - <a href="logout.php">Logout</a></h2>
				
                    <hr>
                    <h2 class="intro-text text-center">The Perfect Cup
                        <strong>blog</strong>
                    </h2>
                    <hr>
                </div>
                <div class="col-lg-12 text-center">
                    <img class="img-responsive img-border img-full" src="img/slide-1.jpg" alt="">
                    <h2>COCONUT OIL COFFEE
                        <br>
                        <small>OCTOBER 13, 2016</small>
                    </h2>
                    <p>Start your morning off with this great recipe for hot coffee with coconut oil and butter.</p>
                    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Read More</button>
                    <hr>
                </div>
                <div class="col-lg-12 text-center">
                    <img class="img-responsive img-border img-full" src="img/slide-2.jpg" alt="">
                    <h2>IRISH COFFEE 
                        <br>
                        <small>SEPTEMBER, 2014</small>
                    </h2>
                    <p>Take the edge off with a Fresh hot cup of coffee made with Irish whiskey and Irish Cream.</p>
                    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal2">Read More</button>
                    <hr>
                </div>
                <div class="col-lg-12 text-center">
                    <img class="img-responsive img-border img-full" src="img/slide-3.jpg" alt="">
                    <h2>FROZEN CARAMEL LATTE 
                        <br>
                        <small>JULY 18, 2012</small>
                    </h2>
                    <p>Sweetened with caramel sauce and topped with whipped cream, this will make you happy any time of day.</p>
                    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal3">Read More</button>
                    <hr>
                </div>
                <div class="col-lg-12 text-center">
                    <ul class="pager">
                        <li class="previous"><a href="#">&larr; Older</a>
                        </li>
                        <li class="next"><a href="#">Newer &rarr;</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container -->

	<!-- Modal 1 -->
	<div id="myModal" class="modal fade" role="dialog">
	  <div class="modal-dialog">

		<!-- Modal content-->
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
			<h4 class="modal-title">Coconut Oil Coffee</h4>
		  </div>
		  <div class="modal-body">
			<p>Millions of people around the world depend on a morning cup of coffee to get their day started.

Coffee is not only a great source of caffeine that provides a convenient boost of energy but also has many beneficial antioxidants and nutrients.

A recent trend is to add coconut oil to coffee to reap the health benefits of this popular fat, too.

However, you may wonder whether this practice is healthy.</p>
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		  </div>
		</div>

	  </div>
	</div>
	
	<!-- Modal 2 -->
	<div id="myModal2" class="modal fade" role="dialog">
	  <div class="modal-dialog">

		<!-- Modal content-->
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
			<h4 class="modal-title">Irish Coffee</h4>
		  </div>
		  <div class="modal-body">
			<p>The Irish coffee is an iconic cocktail, and the original recipe is not difficult. It requires four common ingredients: The combination of a smooth Irish whiskey with rich black coffee that's sweetened and topped with cream is an absolute delight.

This recipe was created in Ireland by Joe Sheridan in the early 1940s. Despite some common shortcuts, authentic Irish coffee is not as simple as spiking coffee with a shot of whiskey. Instead, this is a well-planned, carefully constructed coffee drink that should be mixed with the care of any latte or cappuccino. That said, it is actually quite easy.</p>
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		  </div>
		</div>

	  </div>
	</div>
	
	<!-- Modal 3 -->
	<div id="myModal3" class="modal fade" role="dialog">
	  <div class="modal-dialog">

		<!-- Modal content-->
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
			<h4 class="modal-title">Frozen Caramel Latte</h4>
		  </div>
		  <div class="modal-body">
			<p>This frothy, blended espresso drink will wake you up and make you happy any time of day. Sweetened with caramel sauce and topped with whipped cream, this is one delicious frozen latte. I wanted something different than my usual frozen coffee drink so decided to try this. It was disappointing; not at all like the Starbuck's drink. I didn't have regular milk so used almondmilk instead and strong brewed coffee. Part of the problem is the consistancy. It is thin; there is too much fluid for the amount of ice. My usual frozen coffee drink has only 6 oz. of fluid with 1 1/2 cups of ice. I will try this again with regular milk but will use only 1/4 c. of it.</p>
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		  </div>
		</div>

	  </div>
	</div>
	
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p>Copyright &copy; The Perfect Cup 2022</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>

<?php

} else {
    header("location:login.php ");
}
?>
