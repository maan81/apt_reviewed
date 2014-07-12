<?php 

	$active = 'home'; 
	$isEditor = true;

	if($_POST){

		include('save_page.php');
	}

?>
<?php include('head.php') ?>		

		<!-- top-nav -->
		<style type="text/css">.top-nav{position: relative;}</style>
		<?php include('top_nav.php') ?>
		<!-- end of top-nav -->

		<!-- header -->
		<header  id="header">
			<!-- shell -->
			<div class="shell">
				<div class="header-inner">
					
					<!-- header-cnt -->
					<div class="header-cnt">
						<h1 id="logo">
							<a href="#">Amrit-Prithvi Trust</a>
						</h1>
						<h1 id="logo2">
							<a href="#">अमृत-पृथ्वी अविनाशि गुठी</a>
						</h1>

						<p>
							<span class="mobile">Education is the main key to development </span>
						</p>
						<a href="#" class="blue-btn">LEARN MORE</a>
					</div>
					<!-- end of header-cnt -->
					
					<!-- slider -->
					<div class="slider-holder">
						<div class="flexslider">
							<ul class="slides">
								<li><img src="homepage/000011_lwora_9.jpg" alt="" /></li>
								<li><img src="homepage/000016_omuat_9.jpg" alt="" /></li>
								<li><img src="homepage/000071_rgdai_9.jpg" alt="" /></li>
								<li><img src="homepage/000074_snyws_9.jpg" alt="" /></li>
							</ul>
						</div>
					</div>
					<!-- end of slider -->
					<div class="cl">&nbsp;</div>
				</div>
				<div class="cl">&nbsp;</div>
			</div>
			<!-- end of shell -->	
		</header>
		<!-- end of header -->

		<!-- main -->
		<div class="main">
			<span class="shadow-top"></span>
			<!-- shell -->
			<div class="shell">
				<div class="container">
					<!-- testimonial -->
					<section class="testimonial">
						<p>
							<strong>&#8220;</strong>
							No one is immortal, in this world and neither is wealth, Therefore one should contribute 
							according to one's capability for the welfare of the community and the nation. &nbsp;
							<strong>&#8221;</strong>
						</p>
					</section>
					<!-- testimonial -->

					<section class="blog">
						<!-- content -->
						<div class="content">
							<div class="cnt">
								<?php 

									$txt = file_get_contents('page/home.php');

									if(isset($isEditor)&&$isEditor){
										
										echo '<style type="text/css">'.
												'body.main{padding-top: 30px !important;}'.
												'.main .content{width: 720px;}'.
											'</style>';
										
										echo '<form method="POST">'.
												'<textarea class="ckeditor" name="editor1">'.
													htmlentities($txt).
												'</textarea>'.
											'</form>';
									
									}else{
	
										echo $txt;
	
									}
								?>
							</div>
						</div>
						<!-- end of content -->

						<!-- sidebar --><?php include('aside.php') ?><!-- end of sidebar -->
						<div class="cl">&nbsp;</div>
					</section>	
				</div>
			<!-- end of shell -->
			</div>
			<!-- end of container -->
		</div>
		<!-- end of main -->

	</div>	
		
	<!-- footer-push -->
	<div id="footer-push"></div>
	<!-- end of footer-push -->
	
	<!-- end of wrapper -->

<?php include('foot.php') ?>