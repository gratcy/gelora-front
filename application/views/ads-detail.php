		<div id="tg-innerbanner" class="tg-innerbanner tg-haslayout">
			<figure data-vide-bg="poster: images/slider/img-01.jpg" data-vide-options="position: 50% 50%"><div style="position: absolute; z-index: -1; top: 0px; left: 0px; bottom: 0px; right: 0px; overflow: hidden; background-size: cover; background-color: transparent; background-repeat: no-repeat; background-position: 50% 50%; background-image: url(&quot;http://exprostudio.com/html/classified/images/slider/img-01.jpg&quot;);"><video autoplay="" loop="" muted="" style="margin: auto; position: absolute; z-index: -1; top: 50%; left: 50%; transform: translate(-50%, -50%); visibility: hidden; opacity: 0; width: auto; height: 142px;"></video></div>
				<figcaption>
					<div class="container">
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
								<div class="tg-bannercontent">
                                    <form class="tg-formtheme tg-formbannersearch" method="post" action="<?php echo base_url('search'); ?>">
                                        <fieldset>
                                            <div class="form-group tg-inputwithicon">
                                                <i class="icon-bullhorn"></i>
                                                <input type="text" name="keyword" class="form-control" placeholder="Apa yang anda cari?">
                                            </div>
                                            <div class="form-group tg-inputwithicon">
                                                <i class="icon-layers"></i>
                                                <div class="tg-select">
                                                    <select name="category">
                                                    	<option value="0">Semua Kategori</option>
                                                        <?php echo __get_categories_ads(); ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <button class="tg-btn" type="button">Cari</button>
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
						<div class="col-xs-12 col-sm-7 col-md-8 col-lg-12">
							<div id="tg-content" class="tg-content">
								<div class="tg-ad tg-verifiedad tg-detail tg-addetail">
									<div class="tg-adcontent">
										<ul class="tg-pagesequence">
											<li><span>Ads</span></li>
											<li><a href="<?php echo base_url('ads/category/'.$data[0] -> cslug); ?>"><?php echo $data[0] -> cname; ?></a></li>
										</ul>
										<div class="tg-adtitle">
											<h2><?php echo $data[0] -> atitle; ?></h2>
										</div>
										<ul class="tg-admetadata">
											<li>Oleh: <a href="<?php echo base_url('ads/' . $data[0] -> aslug); ?>"><?php echo $data[0] -> aname; ?></a></li>
											<li>Iklan Id: <a href="<?php echo base_url('ads/' . $data[0] -> aslug); ?>"><?php echo str_pad($data[0] -> aid, 4, '0', STR_PAD_LEFT); ?></a></li>
											<li><i class="icon-earth"></i><address><?php echo $data[0] -> acity; ?> - <?php echo $data[0] -> aprovince; ?>, ID</address></li>
											<li><i class="icon-eye"></i><span><?php echo $data[0] -> aviews; ?> views</span></li>
										</ul>
										<div class="tg-share">
											<strong>share:</strong>
											<ul class="tg-socialicons">
												<li class="tg-facebook"><a href="https://www.facebook.com/sharer.php?u=<?php echo base_url('ads/' . $data[0] -> aslug); ?>"><i class="fa fa-facebook"></i></a></li>
												<li class="tg-twitter"><a href="https://twitter.com/intent/tweet?url=<?php echo base_url('ads/' . $data[0] -> aslug); ?>&text=<?php echo urlencode($data[0] -> atitle); ?>"><i class="fa fa-twitter"></i></a></li>
												<li class="tg-linkedin"><a href="mailto:?subject=<?php echo urlencode($data[0] -> atitle); ?>&body=Check out this site <?php echo base_url('ads/' . $data[0] -> aslug); ?>"><i class="fa fa-envelope"></i></a></li>
											</ul>
											<div class="tg-adadded">
												<i class="icon-clock"></i>
												<span><?php echo __get_date($data[0] -> adate, 2);?></span>
												&nbsp;&nbsp;
											</div>
										</div>
									</div>
									<?php
									$photos = json_decode($data[0] -> aphotos, true);
									?>
									<figure>
										<span class="tg-themetag tg-featuretag">featured</span>
										<span class="tg-photocount">See <?php echo count($photos); ?> Photos</span>
										  <div id="myCarousel" class="carousel slide" data-ride="carousel">
										    <!-- Indicators -->
										    <ol class="carousel-indicators">
										      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
										      <li data-target="#myCarousel" data-slide-to="1"></li>
										      <li data-target="#myCarousel" data-slide-to="2"></li>
										    </ol>
											<?php if (count($photos) > 0) : ?>
										    <div class="carousel-inner">
										    	<?php foreach($photos as $k => $v): ?>
										      <div class="item <?php echo ($k === 0 ? 'active' : ''); ?>">
										        <img src="<?php echo __get_upload_file($v['img'], 2); ?>" alt="Los Angeles" style="width:100%;">
										      </div>
										  <?php endforeach; ?>
										  <?php endif; ?>
										    </div>

										    <!-- Left and right controls -->
										    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
										      <span class="glyphicon glyphicon-chevron-left"></span>
										      <span class="sr-only">Previous</span>
										    </a>
										    <a class="right carousel-control" href="#myCarousel" data-slide="next">
										      <span class="glyphicon glyphicon-chevron-right"></span>
										      <span class="sr-only">Next</span>
										    </a>
										  </div>
									</figure>
									<div class="tg-detail" style="float: right;">
										<i class="icon-user"></i>
										<span><?php echo $data[0] -> aname;?></span>
										<br />
										<i class="icon-price-tag"></i>
										<span><?php echo __get_rupiah($data[0] -> aprice);?></span>
										<br />
										<i class="icon-phone"></i>
										<span><?php echo $data[0] -> aphone;?><?php echo (!empty($data[0] -> aphone2) ? ' / ' . $data[0] -> aphone2 : '');?></span>
									</div>
									<div style="clear: both"></div>
									<br />
									<div class="tg-description">
										<?php echo $data[0] -> adesc; ?>

<!-- 										<div class="tg-fullimg">
											<figure><img src="<?php echo __get_upload_file($photos[rand(0, count($photos)-1)]['img'], 2); ?>" alt="<?php echo $data[0] -> atitle; ?>" title="<?php echo $data[0] -> atitle; ?>"></figure>
										</div>
										<p><span>Trims!</span><i><img src="<?php echo base_url(); ?>assets/images/icons/img-31.png" alt="image description"></i></p> -->
									</div>
									<div class="tg-share">
										<strong>share:</strong>
										<ul class="tg-socialicons">
											<li class="tg-facebook"><a href="https://www.facebook.com/sharer.php?u=<?php echo base_url('ads/' . $data[0] -> aslug); ?>"><i class="fa fa-facebook"></i></a></li>
											<li class="tg-twitter"><a href="https://twitter.com/intent/tweet?url=<?php echo base_url('ads/' . $data[0] -> aslug); ?>&text=<?php echo urlencode($data[0] -> atitle); ?>"><i class="fa fa-twitter"></i></a></li>
											<li class="tg-linkedin"><a href="mailto:?subject=<?php echo urlencode($data[0] -> atitle); ?>&body=Check out this site <?php echo base_url('ads/' . $data[0] -> aslug); ?>"><i class="fa fa-envelope"></i></a></li>
										</ul>
										<div class="tg-adadded">
											<i class="icon-clock"></i>
											<span><?php echo __get_date($data[0] -> adate, 2);?></span>
											&nbsp;&nbsp;
										</div>
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
