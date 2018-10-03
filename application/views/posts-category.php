		<!--************************************
				Main Start
		*************************************-->
		<main id="tg-main" class="tg-main tg-haslayout">
			<!--************************************
					About Us Start
			*************************************-->
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-7 col-md-8 col-lg-12 pull-right">
						<div id="tg-content" class="tg-content">
							<div class="tg-sectionhead">
								<div class="tg-title">
									<h2><?php echo $title; ?></h2>
								</div>
								<div class="tg-description">
									<p>Stay Updated With <?php echo $title; ?></p>
								</div>
							</div>
							<div class="row">
								<div class="tg-posts tg-postsgrid">
									<?php foreach($data as $k => $v) : ?>
									<div class="col-xs-6 col-sm-12 col-md-6 col-lg-4 tg-verticaltop">
										<div class="tg-post">
											<figure>
												<a href="<?php echo base_url($v -> pslug); ?>"><img src="<?php echo __grep_image_url($v -> pcontent); ?>" alt="<?php echo $v -> ptitle; ?>" title="<?php echo $v -> ptitle; ?>"></a>
											</figure>
											<div class="tg-postcontent">
												<ul class="tg-postcategories">
													<li><a href="<?php echo base_url('category/'.$v -> cslug); ?>" title="<?php echo $v -> cname; ?>"><?php echo $v -> cname; ?></a></li>
												</ul>
												<div class="tg-posttitle">
													<h3><a href="<?php echo base_url($v -> pslug); ?>" title="<?php echo $v -> ptitle; ?>"><?php echo $v -> ptitle; ?></a></h3>
												</div>
												<ul class="tg-postmetadata">
													<li>By: <a href="<?php echo base_url($v -> pslug); ?>" title="<?php echo $v -> ptitle; ?>"><?php echo $v -> uname; ?></a></li>
													<li><i class="icon-bubble"></i><a href="<?php echo base_url($v -> pslug); ?>" title="<?php echo $v -> ptitle; ?>"><?php echo $v -> pviews; ?></a></li>
												</ul>
												<div class="tg-description">
													<p><?php echo __limit_word($v -> pcontent, 15); ?><a href="<?php echo base_url($v -> pslug); ?>" title="<?php echo $v -> ptitle; ?>">read more</a></p>
												</div>
											</div>
										</div>
									</div>
									<?php endforeach;?>
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