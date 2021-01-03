<?php 
	session_start();
	
	if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true)
	{
	include 'header.php';
   
	}
	else{
	if($_SESSION["id"] == 3)
	{
	 include 'header3.php';
	}
	else
	{
		include 'header2.php';
	}
	}
?>
<!-- banner -->
<div class="banner">    	   
    <img src="images/photos/banner3.jpg"  class="img-responsive" alt="slide">
    <div class="welcome-message">
        <div class="wrap-info">
            <div class="information">
                <h1  class="animated fadeInDown">One and Only, Dubai</h1>
				<h2  class="animated fadeInDown">Your arabian adventure</h2>
                
				<p class="animated fadeInDown">More than 65 acres of immaculate gardens, 
				soothing fountains, arches, domes and intricate Arabic details welcome you. 
				Meandering pathways lead down to our one-kilometre sweep of Jumeirah Beach. 
				Peaceful and serene, you'll feel instantly at home..</p>                
            </div>
            <a href="#information" class="arrow-nav scroll wowload fadeInDownBig"><i class="fa fa-angle-down"></i></a>
        </div>
    </div>
</div>
<!-- banner-->

<!-- services -->
<div class="spacer services wowload fadeInUp">
<div class="container">
    <div class="row">
        <div class="col-sm-4">
            <!-- RoomCarousel -->
            <div id="RoomCarousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                <div class="item active"><img src="images/photos/r8.jpg" class="img-responsive" alt="slide"></div>                
                <div class="item  height-full"><img src="images/photos/r9.jpg"  class="img-responsive" alt="slide"></div>
                <div class="item  height-full"><img src="images/photos/r10.jpg"  class="img-responsive" alt="slide"></div>
                </div>
                <!-- Controls -->
                <a class="left carousel-control" href="#RoomCarousel" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                <a class="right carousel-control" href="#RoomCarousel" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
            </div>
            <!-- RoomCarousel-->
            <div class="caption">Rooms<a href="rooms-tariff.php" class="pull-right"><i class="fa fa-edit"></i></a></div>
        </div>


        <div class="col-sm-4">
            <!-- RoomCarousel -->
            <div id="TourCarousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                <div class="item active"><img src="images/photos/r6.jpg" class="img-responsive" alt="slide"></div>
                <div class="item  height-full"><img src="images/photos/r3.jpg"  class="img-responsive" alt="slide"></div>
                <div class="item  height-full"><img src="images/photos/r4.jpg"  class="img-responsive" alt="slide"></div>
                </div>
                <!-- Controls -->
                <a class="left carousel-control" href="#TourCarousel" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                <a class="right carousel-control" href="#TourCarousel" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
            </div>
            <!-- RoomCarousel-->
            <div class="caption">Room Packages<a href="gallery.php" class="pull-right"><i class="fa fa-edit"></i></a></div>
        </div>


        <div class="col-sm-4">
            <!-- RoomCarousel -->
            <div id="FoodCarousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                <div class="item active"><img src="images/photos/r1.jpg" class="img-responsive" alt="slide"></div>
                <div class="item  height-full"><img src="images/photos/r2.jpg"  class="img-responsive" alt="slide"></div>
                <div class="item  height-full"><img src="images/photos/r5.jpg"  class="img-responsive" alt="slide"></div>
                </div>
                <!-- Controls -->
                <a class="left carousel-control" href="#FoodCarousel" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                <a class="right carousel-control" href="#FoodCarousel" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
            </div>
            <!-- RoomCarousel-->
            <div class="caption">Rooms<a href="gallery.php" class="pull-right"><i class="fa fa-edit"></i></a></div>
        </div>
    </div>
</div>
</div>
<!-- services -->


<?php include 'footer.php';?>