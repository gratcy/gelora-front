		<div id="tg-innerbanner" class="tg-innerbanner tg-haslayout">
			<figure data-vide-bg="poster: images/slider/img-01.jpg" data-vide-options="position: 50% 50%"><div style="position: absolute; z-index: -1; top: 0px; left: 0px; bottom: 0px; right: 0px; overflow: hidden; background-size: cover; background-color: transparent; background-repeat: no-repeat; background-position: 50% 50%; background-image: url(&quot;http://exprostudio.com/html/classified/images/slider/img-01.jpg&quot;);"><video autoplay="" loop="" muted="" style="margin: auto; position: absolute; z-index: -1; top: 50%; left: 50%; transform: translate(-50%, -50%); visibility: hidden; opacity: 0; width: auto; height: 142px;"></video></div>
				<figcaption>
					<div class="container">
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
								<div class="tg-bannercontent">
									<form class="tg-formtheme tg-formbannersearch">
										<fieldset>
											<div class="form-group tg-inputwithicon">
												<i class="icon-bullhorn"></i>
												<input type="text" name="customword" class="form-control" placeholder="What are you looking for">
											</div>
											<div class="form-group tg-inputwithicon">
												<i class="icon-location"></i>
												<a class="tg-btnsharelocation fa fa-crosshairs" href="javascript:void(0);"></a>
												<input type="text" name="yourlocation" class="form-control" placeholder="Your Location">
											</div>
											<div class="form-group tg-inputwithicon">
												<i class="icon-layers"></i>
												<div class="tg-select">
													<select>
														<option value="none">Select Category</option>
														<option value="none">Mobiles</option>
														<option value="none">Electronics</option>
														<option value="none">Vehicles</option>
														<option value="none">Bikes</option>
														<option value="none">Animals</option>
														<option value="none">Furniture</option>
														<option value="none">toys</option>
													</select>
												</div>
											</div>
											<button class="tg-btn" type="button">Search Now</button>
										</fieldset>
									</form>
								</div>
							</div>
						</div>
					</div>
				</figcaption>
			</figure>
			<div class="tg-breadcrumbarea">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<ol class="tg-breadcrumb">
								<li><a href="<?php echo base_url(); ?>">Home</a></li>
								<li>Posts</li>
								<li class="tg-active"><?php echo $data[0] -> ptitle; ?></li>
							</ol>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!--************************************
				Main Start
		*************************************-->
		<main id="tg-main" class="tg-main tg-haslayout">
			<!--************************************
					About Us Start
			*************************************-->
			<div class="container">
				<div class="row">
					<div id="tg-twocolumns" class="tg-twocolumns">
						<div class="col-xs-12 col-sm-7 col-md-8 col-lg-12">
							<div id="tg-content" class="tg-content">
								<div class="tg-ad tg-detail tg-addetail">
									<div class="tg-adcontent">
										<ul class="tg-pagesequence">
											<li><span>Posts</span></li>
											<li><a href="<?php echo base_url('category/'.$data[0] -> cslug); ?>"><?php echo $data[0] -> cname; ?></a></li>
										</ul>
										<div class="tg-adtitle">
											<h2><?php echo $data[0] -> ptitle; ?></h2>
										</div>
										<ul class="tg-admetadata">
											<li>Oleh: <a href="<?php echo base_url($data[0] -> pslug); ?>"><?php echo $data[0] -> uname; ?></a></li>
											<li><i class="icon-eye"></i><span><?php echo $data[0] -> pviews; ?> views</span></li>
											<li><i class="icon-clock"></i><span><?php echo __get_date($data[0] -> pdate, 2);?></span></li>
										</ul>
										<div class="tg-share">
											<strong>share:</strong>
											<ul class="tg-socialicons">
												<li class="tg-facebook"><a href="https://www.facebook.com/sharer.php?u=<?php echo base_url($data[0] -> pslug); ?>"><i class="fa fa-facebook"></i></a></li>
												<li class="tg-twitter"><a href="https://twitter.com/intent/tweet?url=<?php echo base_url($data[0] -> pslug); ?>&text=<?php echo urlencode($data[0] -> ptitle); ?>"><i class="fa fa-twitter"></i></a></li>
												<li class="tg-linkedin"><a href="mailto:?subject=<?php echo urlencode($data[0] -> ptitle); ?>&body=Check out this site <?php echo base_url($data[0] -> pslug); ?>"><i class="fa fa-envelope"></i></a></li>
											</ul>
										</div>
									</div>
									<div class="tg-description">
										<?php echo $data[0] -> pcontent; ?>
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
			</div>
			<!--************************************
					About Us End
			*************************************-->
		</main>
		<!--************************************
				Main End
		*************************************-->
