<?php 

	$active = 'members'; 
	require('init.php');

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

					<?=$logout_link?>

					<section class="blog">
						<!-- content -->
						<div class="content">
							<div class="cnt">
								<?php 

									$txt = file_get_contents('page/members.php');

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