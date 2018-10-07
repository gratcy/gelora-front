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
											<li><span>Iklan</span></li>
											<li><a href="<?php echo base_url('post-ads'); ?>">Pasang Iklan</a></li>
										</ul>
										<div class="tg-adtitle">
											<h2><?php echo $title; ?></h2>
										</div>
										<div class="tg-share">
											<strong>share:</strong>
											<ul class="tg-socialicons">
												<li class="tg-facebook"><a href="https://www.facebook.com/sharer.php?u=<?php echo base_url('post-ads'); ?>"><i class="fa fa-facebook"></i></a></li>
												<li class="tg-twitter"><a href="https://twitter.com/intent/tweet?url=<?php echo base_url('post-ads'); ?>&text=<?php echo urlencode($title); ?>"><i class="fa fa-twitter"></i></a></li>
												<li class="tg-linkedin"><a href="mailto:?subject=<?php echo urlencode($title); ?>&body=Check out this site <?php echo base_url('post-ads'); ?>"><i class="fa fa-envelope"></i></a></li>
											</ul>
										</div>
									</div>
									<div class="tg-description">
									<div class="col-xs-12 col-sm-7 col-md-8 col-lg-12">
										<?php echo __get_error_msg(); ?>
                                    <form action="<?php echo base_url('post-ads'); ?>" method="post" name="ads-new">
                                    	<input type="hidden" name="id" value="<?php echo $id; ?>">
                                        <div class="form-group">
                                            <label>Kategori</label>
                                            <select name="category" class="form-control input-flat" placeholder="Input Flat ">
                                                <?php echo __get_categories_ads(0); ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Lengkap</label>
                                            <input type="text" name="name" class="form-control input-default " placeholder="Input Name">
                                        </div>
                                        <div class="form-group">
                                            <label>No Telepon</label>
                                            <input type="text" name="phone" class="form-control input-default " placeholder="Input Phone I">
                                        </div>
                                        <div class="form-group">
                                            <label>No Telepon II</label>
                                            <input type="text" name="phone2" class="form-control input-default " placeholder="Input Phone II">
                                        </div>
                                        <div class="form-group">
                                            <label>Provinsi</label>
                                            <input type="text" name="prov" class="form-control input-default " placeholder="Input Province">
                                        </div>
                                        <div class="form-group">
                                            <label>Kota / Kab</label>
                                            <input type="text" name="city" class="form-control input-default " placeholder="Input City">
                                        </div>
                                        <hr />
                                        <div class="form-group">
                                            <label>Judul Iklan</label>
                                            <input type="text" name="title" class="form-control input-default " placeholder="Input Title">
                                        </div>
                                        <div class="form-group">
                                            <label>Harga</label>
                                            <input type="text" name="price" class="form-control input-default " placeholder="Input Price">
                                        </div>
                                        <div class="form-group">
                                            <label>Isi Iklan</label>
                                        	<textarea class="textarea_editor form-control" placeholder="Enter text ..." name="content"></textarea>
                                        </div>
                                    </form>
                                    <hr />
                                    <div style="clear:both;"></div>
                                    <form action="<?php echo base_url('iklan/upload/' . $id); ?>" class="dropzone" method="post">
                                        <label>Upload Gambar</label>
                                        <div class="fallback">
                                            <input name="file" type="file" multiple />
                                        </div>
                                    </form>
                                    <br />
                                    <div style="clear:both;"></div>
                                        <div class="form-group">
                                            <button type="button" class="btn btn-info ads-submit">Kirim Iklan <i class="fa fa-save"></i></button>
                                            <button type="button" class="btn btn-secondary" onclick="location.href='javascript:history.go(-1);'">Back <i class="fa fa-arrow-circle-left"></i></button>
                                        </div>
									</div>
									</div>
									<p>&nbsp;</p>
									<div class="tg-share">
										<strong>share:</strong>
										<ul class="tg-socialicons">
											<li class="tg-facebook"><a href="https://www.facebook.com/sharer.php?u=<?php echo base_url('post-ads'); ?>"><i class="fa fa-facebook"></i></a></li>
											<li class="tg-twitter"><a href="https://twitter.com/intent/tweet?url=<?php echo base_url('post-ads'); ?>&text=<?php echo urlencode($title); ?>"><i class="fa fa-twitter"></i></a></li>
											<li class="tg-linkedin"><a href="mailto:?subject=<?php echo urlencode($title); ?>&body=Check out this site <?php echo base_url('post-ads'); ?>"><i class="fa fa-envelope"></i></a></li>
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
