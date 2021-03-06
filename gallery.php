<?php
	$dir = 'albums/';
	$url = 'album';

	$images = glob($dir.'*.{jpg,jpeg,png}', GLOB_BRACE);


	// echo '<pre>';
	// print_r($images);
	// echo '</pre>';
	// die;

	foreach($images as $key=>$val){
		$arr = array();
		$arr['ext']   = end(explode('.', $val));
		$arr['image'] = preg_replace("/\\.[^.\\s]{3,4}$/", "", $val);
		$arr['title'] = ucwords(strtolower(implode(' ',explode('_',preg_replace("/albums\//","",$arr['image'])))));
		$arr['link']  = $url.'?alb='.strtolower(preg_replace('/ /','_',strtolower($arr['title'])));
		// $arr['link']  = strtolower(preg_replace('/ /','_',strtolower($arr['title'])));

		$images[$key] = $arr;
	}

	// echo '<pre>';
	// print_r($images);
	// echo '</pre>';
	// die;
?>

<?php $active = 'gallery' ?>
<?php include('head.php') ?>		

		<!-- top-nav -->
		<?php include('top_nav.php') ?>
		<!-- end of top-nav -->

		<!-- header -->
		<?php include('header_bar.php') ?>
		<!-- end of header -->

		<!-- main -->
		<div class="main">
			<span class="shadow-top"></span>
			<!-- shell -->
			<div class="shell">
				<div class="container">

					<section class="blog">
						<!-- content -->
						<div class="content">
							<div class="cnt">
							
								<h3>Photo Albums</h3>
								
								<div class="gallery">
									<?php foreach($images as $key=>$val):?>
										<a href="<?=$val['link']?>">
											<img src="<?=$val['image'].'.'.$val['ext']?>">
											<span><?=$val['title']?></span>
										</a>
									<?php endforeach;?>
									<!-- 									
											<a href="gallery/event_1">
												<img src="images/000059_tgkoy_9.jpg">
												<span>Event !</span>
											</a>
											<a href="gallery/event_2">
												<img src="images/000059_tgkoy_9.jpg">
												<span>Event 2</span>
											</a>
											<a href="gallery/event_1">
												<img src="images/000059_tgkoy_9.jpg">
												<span>Event 3</span>
											</a>
											<a href="gallery/event_1">
												<img src="images/000059_tgkoy_9.jpg">
												<span>Event 4</span>
											</a>
											<a href="gallery/event_1">
												<img src="images/000059_tgkoy_9.jpg">
												<span>Event 5</span>
											</a>
											<a href="gallery/event_1">
												<img src="images/000059_tgkoy_9.jpg">
												<span>Event 6</span>
											</a>
											<a href="gallery/event_1">
												<img src="images/000059_tgkoy_9.jpg">
												<span>Event 7</span>
											</a>
											<a href="gallery/event_1">
												<img src="images/000059_tgkoy_9.jpg">
												<span>Event 8</span>
											</a>
											<a href="gallery/event_1">
												<img src="images/000059_tgkoy_9.jpg">
												<span>Event 9</span>
											</a>
										 -->								
								</div>
								<!-- 
									<span class="paginate">
									    <span class="current" style="">1</span>
									    <a href="">2</a>
									    <a href="">3</a>
									    <a href="">4</a>
									</span>
								-->
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