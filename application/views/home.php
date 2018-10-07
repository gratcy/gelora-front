
        <!--************************************
                Home Slider Start
        *************************************-->
        <div id="tg-homebanner" class="tg-homebanner tg-haslayout">
            <figure class="item" data-vide-bg="poster: <?php echo base_url(); ?>assets/images/slider/img-01.jpg" data-vide-options="position: 50% 50%">
                <figcaption>
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="tg-bannercontent">
                                    <h1>Iklan Baris Usahan Makro</h1>
                                    <h2>Cari lebih dari 10000 iklan usaha makro!</h2>
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
        </div>
        <!--************************************
                Home Slider End
        *************************************-->
        <!--************************************
                Main Start
        *************************************-->
        <main id="tg-main" class="tg-main tg-haslayout">
            <!--************************************
                    Categories Search Start
            *************************************-->
            <section class="tg-haslayout">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-push-1 col-lg-10">
                            <div class="tg-categoriessearch">
                                <div class="tg-title">
                                    <h2><span>Boost your search with</span> Trending Categories</h2>
                                </div>
                                <div id="tg-categoriesslider" class="tg-categoriesslider tg-categories owl-carousel">
                                    <div class="tg-category">
                                        <div class="tg-categoryholder">
                                            <figure><img src="<?php echo base_url(); ?>assets/images/icons/img-08.png" alt="image description"></figure>
                                            <h3>Mobiles</h3>
                                        </div>
                                    </div>
                                    <div class="tg-category">
                                        <div class="tg-categoryholder">
                                            <figure><img src="<?php echo base_url(); ?>assets/images/icons/img-09.png" alt="image description"></figure>
                                            <h3>Electronics</h3>
                                        </div>
                                    </div>
                                    <div class="tg-category">
                                        <div class="tg-categoryholder">
                                            <figure><img src="<?php echo base_url(); ?>assets/images/icons/img-10.png" alt="image description"></figure>
                                            <h3>Vehicles</h3>
                                        </div>
                                    </div>
                                    <div class="tg-category">
                                        <div class="tg-categoryholder">
                                            <figure><img src="<?php echo base_url(); ?>assets/images/icons/img-11.png" alt="image description"></figure>
                                            <h3>Bikes</h3>
                                        </div>
                                    </div>
                                    <div class="tg-category">
                                        <div class="tg-categoryholder">
                                            <figure><img src="<?php echo base_url(); ?>assets/images/icons/img-12.png" alt="image description"></figure>
                                            <h3>Animals</h3>
                                        </div>
                                    </div>
                                    <div class="tg-category">
                                        <div class="tg-categoryholder">
                                            <figure><img src="<?php echo base_url(); ?>assets/images/icons/img-13.png" alt="image description"></figure>
                                            <h3>Furniture</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--************************************
                    Categories Search End
            *************************************-->
            <!--************************************
                    Latest Posted Ads Start
            *************************************-->
            <section class="tg-sectionspace tg-bglight tg-haslayout">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="tg-sectionhead">
                                <div class="tg-title">
                                    <h2>Latest Posted Ads</h2>
                                </div>
                                <div class="tg-description">
                                    <p>Over 10,56,432 New Ads</p>
                                </div>
                            </div>
                        </div>
                        <div class="tg-ads tg-adsvtwo">
                            <?php foreach($ads as $k => $v) : ?>
                            <?php
                            $photos = json_decode($v -> aphotos, true);
                            ?>
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                <div class="tg-ad tg-verifiedad">
                                    <figure>
                                        <span class="tg-themetag tg-featuretag">featured</span>
                                        <a href="<?php echo base_url('ads/' . $v -> aslug); ?>"><img src="<?php echo __get_upload_file($photos[rand(0, count($photos)-1)]['img'], 2); ?>" alt="<?php echo $v -> atitle; ?>" title="<?php echo $v -> atitle; ?>" width="200" height="203" style="width: 200px;height: 203px;"></a>
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
                            <?php endforeach; ?>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="tg-btnbox">
                                <a class="tg-btn" href="<?php echo base_url('ads'); ?>">View All</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--************************************
                    Latest Posted Ads End
            *************************************-->
            <!--************************************
                    News Article Start
            *************************************-->
            <section class="tg-sectionspace tg-haslayout">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="tg-sectionhead">
                                <div class="tg-title">
                                    <h2>News Articles</h2>
                                </div>
                                <div class="tg-description">
                                    <p>Stay Updated With News</p>
                                </div>
                            </div>
                        </div>
                        <div class="tg-posts">
                            <?php foreach($article as $k => $v) : ?>
                            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 tg-verticaltop">
                                <div class="tg-post">
                                    <figure>
                                        <span class="tg-themetag tg-bookmarktag"><i class="icon-bookmark"></i></span>
                                        <a title="<?php echo $v -> ptitle; ?>" href="<?php echo base_url($v -> pslug); ?>"><img alt="<?php echo $v -> ptitle; ?>" src="<?php echo __grep_image_url($v -> pcontent); ?>" alt="<?php echo $v -> ptitle; ?>"></a>
                                    </figure>
                                    <div class="tg-postcontent">
                                        <ul class="tg-postcategories">
                                            <li><a href="<?php echo base_url('/category/' . $v -> cslug); ?>" title="<?php echo $v -> cname; ?>"><?php echo $v -> cname; ?></a></li>
                                        </ul>
                                        <div class="tg-posttitle">
                                            <h3><a href="<?php echo base_url($v -> pslug); ?>" title="<?php echo $v -> ptitle; ?>"><?php echo $v -> ptitle; ?></a></h3>
                                        </div>
                                        <ul class="tg-postmetadata">
                                            <li>By: <a href="<?php echo base_url($v -> pslug); ?>" title="<?php echo $v -> ptitle; ?>"><?php echo $v -> uname; ?></a></li>
                                            <li><i class="icon-eye"></i><a href="javascript:void(0);" title="<?php echo $v -> ptitle; ?>"><?php echo $v -> pviews; ?></a></li>
                                        </ul>
                                        <div class="tg-description">
                                            <p><?php echo __limit_word($v -> pcontent, 15); ?><a title="<?php echo $v -> ptitle; ?>" href="<?php echo base_url($v -> pslug); ?>">read more</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach; ?>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="tg-btnbox">
                                <a class="tg-btn" href="<?php echo base_url('posts'); ?>">View All</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--************************************
                    News Article End
            *************************************-->
        </main>
        <!--************************************
                Main End
        *************************************-->
