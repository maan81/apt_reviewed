<?php
	// print_r($_SERVER);die;

	// print_r($_SERVER['REQUEST_SCHEME'].'://'.$_SERVER['HTTP_HOST'].$_SERVER['REDIRECT_URL']);die;
	// http://localhost/apt2/album

	// print_r(ucwords(preg_replace('/_/',' ',$_GET['alb'])));die;
	
	$dir = 'albums/'.$_GET['alb'].'/';
	$url = $_SERVER['REQUEST_SCHEME'].'://'.$_SERVER['HTTP_HOST'].$_SERVER['REDIRECT_URL'].'s';

	$album_title = ucwords(preg_replace('/_/',' ',$_GET['alb']));

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
		$arr['link']  = $url.'/'.strtolower(preg_replace('/ /','_',strtolower($arr['title']))).'.'.$arr['ext'];
		// $arr['link']  = strtolower(preg_replace('/ /','_',strtolower($arr['title'])));

		$images[$key] = $arr;
	}

	// echo '<pre>';
	// print_r($images);
	// echo '</pre>';
	// die;
	$active='gallery';
?>

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
							
								<h3><?= $album_title ?></h3>

<script type="text/javascript" src="js/colorbox/jquery.colorbox-min.js"></script>
<link rel="stylesheet" type="text/css" href="js/colorbox/colorbox.css">
<script type="text/javascript">
			$(document).ready(function(){
				$(".group1").colorbox({rel:'group1'});
			});
			</script>

								<div class="gallery">
									<?php foreach($images as $key=>$val):?>
										<a class="group1" href="<?=$val['link']?>">
											<img src="<?=$val['image'].'.'.$val['ext']?>">
										</a>
									<?php endforeach;?>
									<span class="paginate">
									    <span class="current" style="">1</span>
									    <a href="">2</a>
									    <a href="">3</a>
									    <a href="">4</a>
									</span>
								</div>
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