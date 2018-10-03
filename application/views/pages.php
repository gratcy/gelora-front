		<!--************************************
				Main Start
		*************************************-->
		<main id="tg-main" class="tg-main tg-haslayout">
			<!--************************************
					About Us Start
			*************************************-->
			<div class="container">
				<div class="row">
						<div class="col-xs-12 col-sm-7 col-md-8 col-lg-12">
							<div id="tg-content" class="tg-content" style="padding:0">
								<div class="tg-ad tg-detail tg-addetail">
									<div class="tg-adcontent">
										<ul class="tg-pagesequence">
											<li><span>Page</span></li>
											<li><a href="<?php echo base_url('page/'.$data[0] -> pslug); ?>"><?php echo $data[0] -> ptitle; ?></a></li>
										</ul>
										<div class="tg-adtitle">
											<h2><?php echo $data[0] -> ptitle; ?></h2>
										</div>
										<div class="tg-share">
											<strong>share:</strong>
											<ul class="tg-socialicons">
												<li class="tg-facebook"><a href="https://www.facebook.com/sharer.php?u=<?php echo base_url('page/'.$data[0] -> pslug); ?>"><i class="fa fa-facebook"></i></a></li>
												<li class="tg-twitter"><a href="https://twitter.com/intent/tweet?url=<?php echo base_url('page/'.$data[0] -> pslug); ?>&text=<?php echo urlencode($data[0] -> ptitle); ?>"><i class="fa fa-twitter"></i></a></li>
												<li class="tg-linkedin"><a href="mailto:?subject=<?php echo urlencode($data[0] -> ptitle); ?>&body=Check out this site <?php echo base_url('page/'.$data[0] -> pslug); ?>"><i class="fa fa-envelope"></i></a></li>
											</ul>
										</div>
									</div>
									<div class="tg-description">
										<?php echo $data[0] -> pcontent; ?>

										<p><span>Trims!</span><i><img src="<?php echo base_url(); ?>assets/images/icons/img-31.png" alt="image description"></i></p>
									</div>
									<div class="tg-share">
										<strong>share:</strong>
										<ul class="tg-socialicons">
											<li class="tg-facebook"><a href="https://www.facebook.com/sharer.php?u=<?php echo base_url($data[0] -> pslug); ?>"><i class="fa fa-facebook"></i></a></li>
											<li class="tg-twitter"><a href="https://twitter.com/intent/tweet?url=<?php echo base_url($data[0] -> pslug); ?>&text=<?php echo urlencode($data[0] -> ptitle); ?>"><i class="fa fa-twitter"></i></a></li>
											<li class="tg-linkedin"><a href="mailto:?subject=<?php echo urlencode($data[0] -> ptitle); ?>&body=Check out this site <?php echo base_url($data[0] -> pslug); ?>"><i class="fa fa-envelope"></i></a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
				</div>
			</div>
			<!--************************************
					About Us End
			*************************************-->
		</main>
		<!--************************************
				Main End
		*************************************-->
