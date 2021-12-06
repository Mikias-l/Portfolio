<!DOCTYPE html>
<html lang="zxx">

<head>
  <meta charset="utf-8">
  <title>Cygeez</title>

  <!-- mobile responsive meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  
  <!-- ** Plugins Needed for the Project ** -->
  <!-- Bootstrap -->
  <link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css">
	<!-- FontAwesome -->
  <link rel="stylesheet" href="plugins/fontawesome/font-awesome.min.css">
	<!-- Animation -->
	<link rel="stylesheet" href="plugins/animate.css">
	<!-- Prettyphoto -->
	<link rel="stylesheet" href="plugins/prettyPhoto.css">
	<!-- Owl Carousel -->
	<link rel="stylesheet" href="plugins/owl/owl.carousel.css">
	<link rel="stylesheet" href="plugins/owl/owl.theme.css">
	<!-- Flexslider -->
	<link rel="stylesheet" href="plugins/flex-slider/flexslider.css">
	<!-- Flexslider -->
	<link rel="stylesheet" href="plugins/cd-hero/cd-hero.css">
	<!-- Style Swicther -->
	<link id="style-switch" href="css/presets/preset3.css" media="screen" rel="stylesheet" type="text/css">

	<!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="plugins/html5shiv.js"></script>
      <script src="plugins/respond.min.js"></script>
    <![endif]-->

  <!-- Main Stylesheet -->
  <link href="css/style.css" rel="stylesheet">
  
  <!--Favicon-->
	<link rel="icon" href="img/favicon/favicon-32x32.png" type="image/x-icon" />
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="img/favicon/favicon-144x144.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/favicon/favicon-72x72.png">
	<link rel="apple-touch-icon-precomposed" href="img/favicon/favicon-54x54.png">

</head>

<body>

	<!-- Style switcher start -->
	<div class="style-switch-wrapper">
		<div class="style-switch-button">
			<i class="fa fa-sliders"></i>
		</div>
		<h3>Style Options</h3>
		<button id="preset1" class="btn btn-sm btn-primary"></button>
		<button id="preset2" class="btn btn-sm btn-primary"></button>
		<button id="preset3" class="btn btn-sm btn-primary"></button>
		<button id="preset4" class="btn btn-sm btn-primary"></button>
		<button id="preset5" class="btn btn-sm btn-primary"></button>
		<button id="preset6" class="btn btn-sm btn-primary"></button>
		<br/><br/>
		<a class="btn btn-sm btn-primary close-styler float-right">Close X</a>
	</div>
	<!-- Style switcher end -->

	<div class="body-inner">
		<style>
			.nav-font{
				font-family: chilanka;
				font-size: 19px;
				font-weight: bold;
			}
		</style>
			<div class="body-inner">
		
		<!-- Header start -->
		<header id="header" class="fixed-top header" role="banner">
			<a class="navbar-brand navbar-bg" href="index.html"><img class="img-fluid float-right" src="images/logo2.png" alt="logo"></a>
			<div class="container">
				<nav class="navbar navbar-expand-lg navbar-dark">
					<button class="navbar-toggler ml-auto border-0 rounded-0 text-white" type="button" data-toggle="collapse"
						data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
						<span class="fa fa-bars"></span>
					</button>
		
					<div class="collapse navbar-collapse text-center" id="navigation">
						<ul class="navbar-nav ml-auto">
							<li class="nav-item">
								<a class="nav-link nav-font " href="index.html" role="button" >
									Home
								</a>
								
							</li>
							<li class="nav-item ">
								<a class="nav-link nav-font" href="about.html" role="button" >
									About Us
								</a>
								
							</li>
							
							<li class="nav-item ">
								<a class="nav-link nav-font" href="service.html">Services</a>
		
								</a>
							</li>
							<li class="nav-item ">
								<a class="nav-link nav-font" href="blog-rightside.html" role="button" > Blog </a>
							
							</li>
							
							<li class="nav-item">
								<a class="nav-link nav-font" href="contact.html">Contact</a></a>
							</li>
						</ul>
					</div>
				</nav>
			</div>
		</header>
		<!--/ Header end -->
<div id="banner-area">
	<img src="images/banner/banner1.jpg" alt="" />
	<div class="parallax-overlay"></div>
	<!-- Subpage title start -->
	<div class="banner-title-content">
		<div class="text-center">
			<h2>Blog With Right Side</h2>
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb justify-content-center">
					<li class="breadcrumb-item"><a href="#">Home</a></li>
					<li class="breadcrumb-item text-white" aria-current="page">Blog With Right Side</li>
				</ol>
			</nav>
		</div>
	</div><!-- Subpage title end -->
</div><!-- Banner area end -->

<!-- Blog details page start -->
<section id="main-container">
	<div class="container">
		<div class="row">
			
			<!-- Blog start -->
			<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
            <?php 
				include('dbconn.php');
                $start=0;
                $limit=3;
                $id=1;
                  if(isset($_GET['id']))
                  {
                    $id=$_GET['id'];
                    $start=($id-1)*$limit;
                  }
      
                  $query=mysqli_query($conn,"select * from post order by id desc LIMIT $start, $limit");
      
                  while($query2=mysqli_fetch_array($query))
                  {
                    $strpost = $query2['post'];
                    $string = strip_tags($strpost);
                    $date = $query2['posted_date'];
                    $fdate = date('F jS Y', strtotime($date));
                    if (strlen($string)>50) {
                         
                         $stringcut = substr($string, 0,300);
                         $nstring = substr($string, 0, strrpos($stringcut, ' ')).' ...';
                  }
       
				echo "<div class='post'>
					<!-- post image start -->
					<div class='post-image-wrapper'>
						<img src='images/blog/". $query2["post_image"]."' class='img-fluid' alt='' />
						<span class='blog-date'><a href='#'> $fdate</a></span>
					</div><!-- post image end -->
					<div class='post-header clearfix'>
						<h2 class='post-title'>
							<a href='#'>". $query2["title"]."</a>
						</h2>
						<div class='post-meta'>
							<span class='post-meta-author'>Posted by <a href='#'> Admin</a></span>
							<span class='post-meta-cats'>in <a href='#'> News</a></span>
							<div class='float-right'>

								<span class='post-meta-comments'><a href='#'><i class='fa fa-comment-o'></i> 11</a></span>
								<span class='post-meta-hits'><a href='#'><i class='fa fa-heart-o'></i> 62</a></span>
							</div>

						</div><!-- post meta end -->
					</div><!-- post heading end -->
					<div class='post-body'>
                    <p>
                    $nstring
                  </p>
					</div>
					<div class='post-footer'>
                    
                     <a href='news_detail.php?readmore_id=". $query2["id"]." '>Continue Reading <i
                     class='fa fa-angle-double-right'>&nbsp;</i></a>
					</div>
				</div><!-- 1st post end -->

						<nav>
					<ul class='pagination'>
						<li class='page-item'>
							<a class='page-link' href='#' aria-label='Previous'>
								<i class='fa fa-angle-left'></i>
							</a>
						</li>
						<li class='page-item active'><a class='page-link' href='#'>1</a></li>
						<li class='page-item'><a class='page-link' href='#'>2</a></li>
						<li class='page-item'><a class='page-link' href='#'>3</a></li>
						<li class='page-item'><a class='page-link' href='#'>4</a></li>
						<li class='page-item'><a class='page-link' href='#'>5</a></li>
						<li class='page-item'>
							<a class='page-link' href='#' aria-label='Next'>
								<i class='fa fa-angle-right'></i>
							</a>
						</li>
					</ul>
				</nav>
			</div>
			<!--/ Content col end -->
			";}
            ?>
			<!-- sidebar start -->
			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">

				<div class="sidebar sidebar-right">

					<!-- Blog search start -->
					<div class="widget widget-search">
						<h3 class="widget-title">Search</h3>
						<div id="search">
							<input class="form-control form-control-lg" placeholder="search" type="search">
						</div>
					</div><!-- Blog search end -->

					<!-- Tab widget start-->
					<div class="widget widget-tab">
						<ul class="nav nav-tabs">
							<li class="nav-item"><a class="nav-link active" href="#popular-tab" data-toggle="tab">popular</a></li>
							<li class="nav-item"><a class="nav-link" href="#recent-tab" data-toggle="tab">recent</a></li>
							<li class="nav-item"><a class="nav-link" href="#comments-tab" data-toggle="tab">comments</a></li>
						</ul>
						<div class="tab-content">
							<div class="tab-pane fade show active" id="popular-tab">
								<ul class="posts-list list-unstyled clearfix">
									<li>
										<div class="posts-thumb float-left">
											<a href="#">
												<img alt="img" src="images/blog/blog1.jpg">
											</a>
										</div>
										<div class="post-content">
											<h4 class="entry-title"><a href="#">Bulgaria claims to find Europe's 'oldest town'</a>
											</h4>
											<p class="post-meta">
												<span class="post-meta-author">Posted by <a href="#"> Admin</a></span>
												<span class="post-meta-date"><a href="#"> <i class="fa fa-clock-o"></i> November 14</a>
												</span>
											</p>
										</div>
										<div class="clearfix"></div>
									</li><!-- First post end-->
									<li>
										<div class="posts-thumb float-left">
											<a href="#">
												<img alt="img" src="images/blog/blog2.jpg">
											</a>
										</div>
										<div class="post-content">
											<h4 class="entry-title">
												<a href="#">Lorem ipsum dolor sit amet, consectetur claims</a>
											</h4>
											<p class="post-meta">
												<span class="post-meta-author">Posted by <a href="#"> Admin</a></span>
												<span class="post-meta-date"><a href="#"> <i class="fa fa-clock-o"></i> October 19</a>
												</span>
											</p>
										</div>
										<div class="clearfix"></div>
									</li><!-- 2nd post end-->
									<li>
										<div class="posts-thumb float-left">
											<a href="#">
												<img alt="img" src="images/blog/blog3.jpg">
											</a>
										</div>
										<div class="post-content">
											<h4 class="entry-title">
												<a href="#">Should You Ever Skip Giving A Tip?</a>
											</h4>
											<p class="post-meta">
												<span class="post-meta-author">Posted by <a href="#"> Admin</a></span>
												<span class="post-meta-date"><a href="#"> <i class="fa fa-clock-o"></i> November 21</a>
												</span>
											</p>
										</div>
										<div class="clearfix"></div>
									</li><!-- 3rd post end-->
								</ul>
							</div><!-- Popular tabpan end -->

							<div class="tab-pane fade" id="recent-tab">
								<ul class="posts-list list-unstyled clearfix">
									<li>
										<div class="posts-thumb float-left">
											<a href="#">
												<img alt="img" src="images/blog/blog3.jpg">
											</a>
										</div>
										<div class="post-content">
											<h4 class="entry-title"><a href="#">Bulgaria claims to find Europe's 'oldest town'</a>
											</h4>
											<p class="post-meta">
												<span class="post-meta-author">Posted by <a href="#"> Admin</a></span>
												<span class="post-meta-date"><a href="#"> <i class="fa fa-clock-o"></i> November 21</a>
												</span>
											</p>
										</div>
										<div class="clearfix"></div>
									</li><!-- First post end-->
									<li>
										<div class="posts-thumb float-left">
											<a href="#">
												<img alt="img" src="images/blog/blog1.jpg">
											</a>
										</div>
										<div class="post-content">
											<h4 class="entry-title"><a href="#">Bulgaria claims to find Europe's 'oldest town'</a>
											</h4>
											<p class="post-meta">
												<span class="post-meta-author">Posted by <a href="#"> Admin</a></span>
												<span class="post-meta-date"><a href="#"> <i class="fa fa-clock-o"></i> October 19</a>
												</span>
											</p>
										</div>
										<div class="clearfix"></div>
									</li><!-- 2nd post end-->
								</ul>
							</div><!-- Recent tabpan end -->

							<div class="tab-pane fade" id="comments-tab">
								<ul class="posts-list list-unstyled clearfix">
									<li>
										<div class="posts-avator float-left">
											<a href="#">
												<img alt="img" src="images/blog/avator1.png">
											</a>
										</div>
										<div class="post-content">
											<h4 class="entry-title"><a href="#">If you are going to use a passage of Lorem Ipsum</a>
											</h4>
											<p class="post-meta">
												<span class="post-meta-author">Posted by <a href="#"> John</a></span>
												<span class="post-meta-date"><a href="#"> <i class="fa fa-clock-o"></i> November 21</a>
												</span>
											</p>
										</div>
										<div class="clearfix"></div>
									</li><!-- First post end-->
									<li>
										<div class="posts-avator float-left">
											<a href="#">
												<img alt="img" src="images/blog/avator2.jpg">
											</a>
										</div>
										<div class="post-content">
											<h4 class="entry-title"><a href="#">you need to be sure there isn’t anything embarra</a>
											</h4>
											<p class="post-meta">
												<span class="post-meta-author">Posted by <a href="#"> Tina</a></span>
												<span class="post-meta-date"><a href="#"> <i class="fa fa-clock-o"></i> October 18</a>
												</span>
											</p>
										</div>
										<div class="clearfix"></div>
									</li><!-- 2nd post end-->
								</ul>
							</div><!-- Comment tabpan end -->
						</div><!-- Tab content end -->
					</div><!-- Tab widget end-->

					<!-- Blog category start -->
					<div class="widget widget-categories">
						<h3 class="widget-title">Blog Categories</h3>
						<ul class="category-list clearfix">
							<li><a href="#">Objects</a><span class="posts-count"> (19)</span></li>
							<li><a href="#">Technology</a><span class="posts-count"> (09)</span></li>
							<li><a href="#">Photography</a><span class="posts-count"> (13)</span></li>
							<li><a href="#">Fashion</a><span class="posts-count"> (10)</span></li>
							<li><a href="#">Realtough</a><span class="posts-count"> (14)</span></li>
							<li><a href="#">Architecture</a><span class="posts-count"> (11)</span></li>
						</ul>
					</div><!-- Blog category end -->

					<!-- Blog tags start -->
					<div class="widget widget-tags">
						<h3 class="widget-title">Popular Tags</h3>
						<ul class="list-unstyled clearfix">
							<li><a href="#">iMac</a></li>
							<li><a href="#">Black and Green</a></li>
							<li><a href="#">Crative</a></li>
							<li><a href="#">Momentum</a></li>
							<li><a href="#">Business</a></li>
							<li><a href="#">Cellular</a></li>
							<li><a href="#">Niche</a></li>
						</ul>
					</div><!-- Blog tags end -->

					<!-- Blog tags start -->
					<div class="widget">
						<h3 class="widget-title">Text Widgets</h3>
						<p>It is a long established fact that a reader will be distracted by the readable content of a page when
							looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normalopposed.</p>
					</div><!-- Text widget end -->

				</div><!-- sidebar end -->
			</div>
		</div>
		<!--/ row end -->
	</div>
	<!--/ container end -->
</section><!-- Blog details page end -->

<div class="gap-40"></div>

	<!-- Footer start -->
	<footer id="footer" class="footer">
	  <div class="container">
	    <div class="row">
	      <div class="col-md-4 col-sm-12 footer-widget">
	        <h3 class="widget-title">Recent Posts</h3>
	        <div class="latest-post-items media">
	          <div class="latest-post-content media-body">
	            <h4><a href="#">Bulgaria claims to find Europe's 'oldest town'</a></h4>
	            <p class="post-meta">
	              <span class="author">Posted by John Doe</span>
	              <span class="post-meta-cat">in<a href="#"> Blog</a></span>
	            </p>
	          </div>
	        </div><!-- 1st Latest Post end -->

	        <div class="latest-post-items media">
	          <div class="latest-post-content media-body">
	            <h4><a href="#">Few Answers in Case of Murdered Law Professor</a></h4>
	            <p class="post-meta">
	              <span class="date"><i class="icon icon-calendar"></i> Mar 15, 2015</span>
	              <span class="post-meta-comments"><i class="icon icon-bubbles4"></i> <a href="#">03</a></span>
	            </p>
	          </div>
	        </div><!-- 2nd Latest Post end -->

	        <div class="latest-post-items media">
	          <div class="latest-post-content media-body">
	            <h4><a href="#">Over the year we have lots of experience in our field</a></h4>
	            <p class="post-meta">
	              <span class="date"><i class="icon icon-calendar"></i> Apr 17, 2015</span>
	              <span class="post-meta-comments"><i class="icon icon-bubbles4"></i> <a href="#">14</a></span>
	            </p>
	          </div>
	        </div><!-- 3rd Latest Post end -->

	      </div>
	      <!--/ End Recent Posts-->


	      <div class="col-md-4 col-sm-12 footer-widget">
	        <h3 class="widget-title">Flickr Photos</h3>

	        <div class="img-gallery">
	          <div class="img-container">
	            <a class="thumb-holder" data-rel="prettyPhoto" href="images/gallery/1.jpg">
	              <img src="images/gallery/1.jpg" alt="">
	            </a>
	            <a class="thumb-holder" data-rel="prettyPhoto" href="images/gallery/2.jpg">
	              <img src="images/gallery/2.jpg" alt="">
	            </a>
	            <a class="thumb-holder" data-rel="prettyPhoto" href="images/gallery/3.jpg">
	              <img src="images/gallery/3.jpg" alt="">
	            </a>
	            <a class="thumb-holder" data-rel="prettyPhoto" href="images/gallery/4.jpg">
	              <img src="images/gallery/4.jpg" alt="">
	            </a>
	            <a class="thumb-holder" data-rel="prettyPhoto" href="images/gallery/5.jpg">
	              <img src="images/gallery/5.jpg" alt="">
	            </a>
	            <a class="thumb-holder" data-rel="prettyPhoto" href="images/gallery/6.jpg">
	              <img src="images/gallery/6.jpg" alt="">
	            </a>
	            <a class="thumb-holder" data-rel="prettyPhoto" href="images/gallery/6.jpg">
	              <img src="images/gallery/7.jpg" alt="">
	            </a>
	            <a class="thumb-holder" data-rel="prettyPhoto" href="images/gallery/6.jpg">
	              <img src="images/gallery/8.jpg" alt="">
	            </a>
	            <a class="thumb-holder" data-rel="prettyPhoto" href="images/gallery/6.jpg">
	              <img src="images/gallery/9.jpg" alt="">
	            </a>
	          </div>
	        </div>
	      </div>
	      <!--/ end flickr -->

	      <div class="col-md-3 col-sm-12 footer-widget footer-about-us">
	        <h3 class="widget-title">About Craft</h3>
	        <p>We are a awward winning multinational company. We believe in quality and standard worldwide.</p>
	        <h4>Address</h4>
	        <p>1102 Saint Marys, Junction City, KS</p>
	        <div class="row">
	          <div class="col-md-6">
	            <h4>Email:</h4>
	            <p>info@craftbd.com</p>
	          </div>
	          <div class="col-md-6">
	            <h4>Phone No.</h4>
	            <p>+(785) 238-4131</p>
	          </div>
	        </div>
	        <form action="#" role="form">
	          <div class="input-group subscribe">
	            <input type="email" class="form-control" placeholder="Email Address" required="">
	            <span class="input-group-addon">
	              <button class="btn" type="submit"><i class="fa fa-envelope-o"> </i></button>
	            </span>
	          </div>
	        </form>
	      </div>
	      <!--/ end about us -->

	    </div><!-- Row end -->
	  </div><!-- Container end -->
	</footer><!-- Footer end -->


	<!-- Copyright start -->
	<section id="copyright" class="copyright angle">
	  <div class="container">
	    <div class="row">
	      <div class="col-md-12 text-center">
	        <ul class="footer-social unstyled">
	          <li>
	            <a title="Twitter" href="#">
	              <span class="icon-pentagon wow bounceIn"><i class="fa fa-twitter"></i></span>
	            </a>
	            <a title="Facebook" href="#">
	              <span class="icon-pentagon wow bounceIn"><i class="fa fa-facebook"></i></span>
	            </a>
	            <a title="Google+" href="#">
	              <span class="icon-pentagon wow bounceIn"><i class="fa fa-google-plus"></i></span>
	            </a>
	            <a title="linkedin" href="#">
	              <span class="icon-pentagon wow bounceIn"><i class="fa fa-linkedin"></i></span>
	            </a>
	            <a title="Pinterest" href="#">
	              <span class="icon-pentagon wow bounceIn"><i class="fa fa-pinterest"></i></span>
	            </a>
	            <a title="Skype" href="#">
	              <span class="icon-pentagon wow bounceIn"><i class="fa fa-skype"></i></span>
	            </a>
	            <a title="Dribble" href="#">
	              <span class="icon-pentagon wow bounceIn"><i class="fa fa-dribbble"></i></span>
	            </a>
	          </li>
	        </ul>
	      </div>
	    </div>
	    <!--/ Row end -->
	    <div class="row">
	      <div class="col-md-12 text-center">
	        <div class="copyright-info">
	          &copy; Copyright 2019 Themefisher. <span>Designed by <a
	              href="https://themefisher.com">Themefisher.com</a></span>
	        </div>
	      </div>
	    </div>
	    <!--/ Row end -->
	    <div id="back-to-top" data-spy="affix" data-offset-top="10" class="back-to-top affix position-fixed">
	      <button class="btn btn-primary" title="Back to Top"><i class="fa fa-angle-double-up"></i></button>
	    </div>
	  </div>
	  <!--/ Container end -->
	</section>
	<!--/ Copyright end -->

</div><!-- Body inner end -->

<!-- jQuery -->
<script src="plugins/jQuery/jquery.min.js"></script>
<!-- Bootstrap JS -->
<script src="plugins/bootstrap/bootstrap.min.js"></script>
<!-- Style Switcher -->
<script type="text/javascript" src="plugins/style-switcher.js"></script>
<!-- Owl Carousel -->
<script type="text/javascript" src="plugins/owl/owl.carousel.js"></script>
<!-- PrettyPhoto -->
<script type="text/javascript" src="plugins/jquery.prettyPhoto.js"></script>
<!-- Bxslider -->
<script type="text/javascript" src="plugins/flex-slider/jquery.flexslider.js"></script>
<!-- CD Hero slider -->
<script type="text/javascript" src="plugins/cd-hero/cd-hero.js"></script>
<!-- Isotope -->
<script type="text/javascript" src="plugins/isotope.js"></script>
<script type="text/javascript" src="plugins/ini.isotope.js"></script>
<!-- Wow Animation -->
<script type="text/javascript" src="plugins/wow.min.js"></script>
<!-- Eeasing -->
<script type="text/javascript" src="plugins/jquery.easing.1.3.js"></script>
<!-- Counter -->
<script type="text/javascript" src="plugins/jquery.counterup.min.js"></script>
<!-- Waypoints -->
<script type="text/javascript" src="plugins/waypoints.min.js"></script>
<!-- google map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU&libraries=places"></script>
<script src="plugins/google-map/gmap.js"></script>

<!-- Main Script -->
<script src="js/script.js"></script>

</body>

</html>