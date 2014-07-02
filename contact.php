<?php include('contact_submit.php')?>
<?php
	header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
	header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT"); 
	header("Cache-Control: no-store, no-cache, must-revalidate"); 
	header("Cache-Control: post-check=0, pre-check=0", false);
	header("Pragma: no-cache");
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
							
								<div class="form"> 
									<h3>Enter inquires</h3>
									<iframe src="https://docs.google.com/forms/d/1HTO_ytW8KWHWOf7rZsNk9GKcAJ0JTtk3WdbjSkjf2F4/viewform?embedded=true" 
											width="400" height="550" frameborder="0" marginheight="0" marginwidth="0">Loading...</iframe>
									<!-- 
										<form method="post">	
											<span class="success"><?= ($message)?'Message has been submitted.':''?></span>
											<span class="error"><?= $error_msg;?></span>
											<label>Name <span class="reqd">*</span></label>
											<input type="text" size="30" placeholder="Enter you name" 
													name="dname" value="<?=$dname?>" />

											<label>Email <span class="reqd">*</span></label>
											<input type="text" size="30" placeholder="Enter your email" 
													name="demail" value="<?=$demail?>" />

											<label>Your Comments <span class="reqd">*</span></label>
											<textarea cols="5" rows="5" placeholder="Enter your coments" name="dcomment"><?=$dcomment?></textarea>

											<br/>
											<?php	
												if(!$message){
													require_once('recaptchalib.php');
													$publickey = "6LeiH_MSAAAAANcfkpJK9hSVGZvvSA4irKwuDVcu ";
													echo recaptcha_get_html($publickey);
												}
											?>
											<br/>
											<?php if($message){?>
												<div class="submitted">Submit</div>
											<?php }else{?>
												<input type="submit" class="button" value="Submit" name="submit" />		
											<?php }?>
										</form> 
									-->
								</div>

								<div class="address">
									<h3>Our Address </h3>

									Amrit-Prithvi Trust<br/>
									Po. Box 354 <br/> 
									196 / 58 Parijaat Sadak <br/> 
									Mhepi, Nayabazar <br/>
									Kathmandu, Nepal<br/>

									<br/>
	 								Tel : +977-1-4359360<br>
									Fax : +977-1-4248646<br>
									Email : <a href="mailto:info at apt dot org dot np">info&#64;apt&#46;org&#46;np</a>
									<br>
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