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
								<li>ads</li>
								<li class="tg-active"><?php echo $data[0] -> atitle; ?></li>
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
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<div class="tg-pagehead">
								<h1>Semua Iklan category (<?php echo $title; ?>)</h1>
								<p>Total <?php echo $totalAds; ?>, sampai <?php echo date('d, M Y');?></p>
							</div>
						</div>
						<div class="col-xs-12 col-sm-7 col-md-8 col-lg-12">
								<div class="tg-ads">
									<div class="row">
										<?php foreach($data as $k => $v) : ?>
                            <?php
                            $photos = json_decode($v -> aphotos, true);
                            ?>
										<div class="col-xs-6 col-sm-12 col-md-6 col-lg-4 tg-verticaltop">
											<div class="tg-ad tg-verifiedad">
												<figure>
                                        			<a href="<?php echo base_url('ads/' . $v -> aslug); ?>"><img src="<?php echo __get_upload_file($photos[rand(0, count($photos)-1)]['img'], 2); ?>" alt="<?php echo $v -> atitle; ?>" title="<?php echo $v -> atitle; ?>" width="200" height="203" style="width: 330px;height: 203px;"></a>
													<span class="tg-photocount">See <?php echo count($photos); ?> Photos</span>
												</figure>
												<div class="tg-adcontent">
			                                        <ul class="tg-productcagegories">
			                                            <li><a title="<?php echo $v -> cname; ?>" href="<?php echo base_url('ads/category/' . $v -> cslug); ?>"><?php echo $v -> cname; ?></a></li>
			                                        </ul>
			                                        <div class="tg-adtitle">
			                                            <h3><a title="<?php echo $v -> atitle; ?>" href="<?php echo base_url('ads/' . $v -> aslug); ?>"><?php echo $v -> atitle; ?></a></h3>
			                                        </div>
			                                        <time datetime="<?php echo $v -> adate; ?>">Last Updated: <?php echo __timeago($v -> adate); ?></time>
			                                        <div class="tg-adprice"><h4><?php echo __get_rupiah($v -> aprice);?></h4></div>
			                                        <address><?php echo $v -> acity . ' - ' . $v -> aprovince; ?></address>
													<div class="tg-phonelike">
														<a class="tg-btnphone" href="javascript:void(0);">
															<i class="icon-phone-handset"></i>
															<span data-toggle="tooltip" data-placement="top" title="Show Phone No." data-last="<?php echo $v -> aphone; ?>"><em>Show Phone No.</em></span>
														</a>
														<span class="tg-like tg-liked"><i class="fa fa-heart"></i></span>
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