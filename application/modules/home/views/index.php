<div class="row">

    <div class="col-lg-3 col-sm-4 col-xs-12 branch-mobile-width">
        <div class="logo"><img src="themes/mediqueenclinic/images/logo.png" alt=""></div>
        <div class="branch-mobile">
            <img src="themes/mediqueenclinic/images/icon-mark.png" alt=""><?php echo $contact->{'address_'.@$this->session->userdata('lang')}?>
            <img src="themes/mediqueenclinic/images/icon-phone.png" alt=""><?php echo $contact->{'tel_'.@$this->session->userdata('lang')}?>
            <div class="clearfix tall"></div>
            <img src="themes/mediqueenclinic/images/icon-time.png" alt=""><?php echo $contact->{'time_'.@$this->session->userdata('lang')}?>
        </div>
    </div>

    <div class="col-lg-9 col-sm-8 col-xs-12 slide-mobile">
        <div id="carouselExampleIndicators" class="carousel slide text-right" data-ride="carousel">
            <ol class="carousel-indicators carous">
                <?php foreach($hilight as $key=>$row):?>
                <li data-target="#carouselExampleIndicators" data-slide-to="<?php echo $key?>" class="<?php echo $key == 0 ? 'active' : '' ?>"></li>
                <?php endforeach;?>
            </ol>
            <div class="carousel-inner">
                <?php foreach($hilight as $key=>$row):?>
                <div class="carousel-item <?php echo $key == 0 ? 'active' : '' ?>">
                    <img src="uploads/hilight/<?php echo $row->{'img_'.@$this->session->userdata('lang')}?>" class="d-block w-100" alt="...">
                </div>
                <?php endforeach;?>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <!-- END Slide -->
    </div>
</div>
<div class="row">
    <div class="col-sm-9">
        <nav class="navbar navbar-expand-lg navbar-light bg-light bgtopmenu menumobile">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse topmenu" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="home"><?php echo lang('h_home')?> <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="abouts"><?php echo lang('h_about')?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="promotions"><?php echo lang('h_promotion')?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="services"><?php echo lang('h_service')?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="articles"><?php echo lang('h_article')?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="doctors"><?php echo lang('h_doctor')?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="testimonials"><?php echo lang('h_testimonial')?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contacts"><?php echo lang('h_contact')?></a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="col-sm-2 language" style="z-index:999;">
            <ul>
                <li><a href="home/lang/th"><img src="themes/mediqueenclinic/images/flag_thai.jpg"></a></li>
                <li><a href="home/lang/en"><img src="themes/mediqueenclinic/images/flag_eng.jpg"></a></li>
            </ul>
        </div>
    </div>
    <div class="col-sm-3">
        <form class="form-inline my-2 my-lg-0 search-input">
            <input class="form-control mr-sm-2 search-box" type="search" placeholder="<?php echo lang('search')?>" aria-label="Search">
        </form>
    </div>
</div>
<!-- END row Topmenu and search -->
<div class="row">
    <div class="col-sm-12 text-center">
        <div class="title"><?php echo lang('h_service');?></div>
        <div class="col-sm-3 line01"><img src="themes/mediqueenclinic/images/icon-line01.jpg" alt="" width="28" height="16"></div>
        <button class="btn1" href="javascript:void(0);" onclick="window.location.href='services'"><?php echo lang('all_service');?></button>
    </div>
</div>
<div class="clearfix tall"></div>
<!-- START Slide Service -->
<div class="carousel slide" data-ride="carousel" id="service">
    <div class="carousel-inner">
        <?php 
            $count = 1; 
            $count_row = 1;
        ?>
        <?php foreach( $service_category as $key => $row ):?>

            <?php if ($count%6 == 1):?>
                <div class="carousel-item <?php echo $count == 1 ? 'active' : ''; ?>">
            <?php endif;?>

                <?php if ($count_row%3 == 1):?>
                    <div class="row">
                <?php endif;?>

                    <div class="col">
                        <a href="services/category/<?php echo $row->id?>"><img src="uploads/service_category/<?php echo $row->{'img_'.@$this->session->userdata('lang')}?>" alt="AESTHETIC MEDICINE"></a>
                        <span class="name-service"><?php echo $row->{'name_'.@$this->session->userdata('lang')}?></span>
                    </div>

                <?php if ($count%3 == 0):?>
                    </div>
                <?php endif;?>

            <?php if ($count%6 == 0):?>
                </div>
            <?php endif;?>

            <?php 
                $count++;
                $count_row++;
            ?>

        <?php endforeach;?>
        <?php if ($count%6 != 1) echo "</div>";?>
        </div>
        <a class="carousel-control-prev" href="#service" role="button" data-slide="prev">
            <img src="themes/mediqueenclinic/images/arrow-service-left.png" class="arrow-service-left">
        </a>
        <a class="carousel-control-next text-faded" href="#service" role="button" data-slide="next">
            <img src="themes/mediqueenclinic/images/arrow-service-right.png" class="arrow-service-right">
        </a>
    </div>
</div>
<!-- END Slide Service -->
</div>
<!-- END row Service -->
<div class="clearfix tall"></div>
<!-- START row Promotions -->
<div class="row" id="paddingrow">
    <div class="col-sm-4 promotion">
        <span class="title-pro"><?php echo $promotion_list->{'title_'.@$this->session->userdata('lang')}?></span>
        <div class="scrollbar" id="style-1">
            <div class="force-overflow">
                <ul>
                    <?php foreach($promotion_list->promotion_list_detail->get() as $key=>$row):?>
                    <li class="bg-pro<?php echo sprintf("%02d", ($key+1))?>">
                        <span class="pro-text-left"><?php echo $row->{'title_'.@$this->session->userdata('lang')}?></span><span class="pro-text-right"><?php echo $row->price?></span></li>
                    <?php endforeach;?>
                </ul>
            </div>
        </div>
        <button href="javascript:void(0);" onclick="window.location.href='promotions'" class="viewall">ดูทั้งหมด</button>
    </div>
    <div class="col-sm-8 pic-promotion">
        <div id="pro" class="carousel slide" data-ride="carousel">
            <!-- The slideshow -->
            <div class="carousel-inner">
                <?php foreach($promotion_hilight as $key => $row):?>
                <div class="carousel-item <?php echo $key == 0 ? 'active' : ''; ?>">
                    <img src="uploads/promotion_hilight/<?php echo $row->{'img_'.@$this->session->userdata('lang')}?>" alt="โปรสุดคุ้ม" class="img-fluid">
                </div>
                <?php endforeach;?>
            </div>
            <!-- Left and right controls -->
            <div class="controls pull-right">
                <a class="carousel-control-prev-icon" href="#pro" data-slide="prev" style="margin-right: 9px;">
                    <img src="themes/mediqueenclinic/images/arrow-pro-left.jpg" alt="">
                </a>
                <a class="carousel-control-next-icon" href="#pro" data-slide="next">
                    <img src="themes/mediqueenclinic/images/arrow-pro-right.jpg" alt="">
                </a>
            </div>
        </div>
    </div>
</div>
<!-- END row Promotions -->
<div class="clearfix tall2"></div>
<div class="row" id="margin-doctor">
    <div class="col-sm-12 text-center">
        <div class="title"><?php echo lang('h_doctor')?></div>
        <div class="col-sm-3 line01"><img src="themes/mediqueenclinic/images/icon-line01.jpg" alt="" width="28" height="16"></div>
    </div>
</div>
<div class="clearfix tall2"></div>
<!-- START Slide Doctor -->
<div class="carousel slide" data-ride="carousel" id="doctor">
    <div class="carousel-inner">
        <?php 
            $count = 1;
        ?>
        <?php foreach( $doctor as $key => $row ):?>

            <?php if ($count%3 == 1):?>
                <div class="carousel-item <?php echo $count == 1 ? 'active' : ''; ?>">
                <div class="row">
            <?php endif;?>

                    <div class="col col-lg-4 doctor">
                        <a href="doctors"><img src="uploads/doctor/<?php echo $row->image?>" alt="<?php echo $row->{'name_'.@$this->session->userdata('lang')}?>"></a>
                        <span class="name1-doctor"><?php echo $row->{'name_'.@$this->session->userdata('lang')}?></span>
                        <span class="name2-doctor"><?php echo $row->{'nickname_'.@$this->session->userdata('lang')}?></span>
                    </div>

            <?php if ($count%3 == 0):?>
                </div></div>
            <?php endif;?>

            <?php 
                $count++;
            ?>

        <?php endforeach;?>
        <?php if ($count%3 != 1) echo "</div>";?>
        </div>
        <a class="carousel-control-prev" href="#doctor" role="button" data-slide="prev">
            <img src="themes/mediqueenclinic/images/arrow-doctor-left.png" class="arrow-service-left">
        </a>
        <a class="carousel-control-next text-faded" href="#doctor" role="button" data-slide="next">
            <img src="themes/mediqueenclinic/images/arrow-doctor-right.png" class="arrow-service-right">
        </a>
    </div>
</div>
<!-- END Slide Doctor -->
<div class="clearfix tall2"></div>
<div class="row" id="margin-doctor">
    <div class="col-sm-12 text-center">
        <div class="title"><?php echo lang('review');?></div>
        <div class="col-sm-3 line01"><img src="themes/mediqueenclinic/images/icon-line01.jpg" alt="" width="28" height="16"></div>
    </div>
</div>
<div class="clearfix tall2"></div>
<!-- START Review Picture and vdo -->
<div class="row" id="row-review">
    <div class="col-lg-5 col-sm-8" id="bg-review-pic">

        <!-- START Review Picture Slide -->
        <div id='carousel-custom' class='carousel slide' data-ride='carousel'>
            <div class='carousel-outer'>
                <!-- me art lab slider -->
                <div class='carousel-inner inner-review'>
                    <?php foreach($review_image->review_image_detail->get() as $key => $row):?>
                    <div class='carousel-item <?php echo $key == 0 ? 'active' : ''; ?>'>
                        <a href="uploads/review_image/<?php echo $row->review_image_id?>/<?php echo $row->image?>" data-toggle="lightbox" class="img-review">
                            <img src='uploads/review_image/<?php echo $row->review_image_id?>/<?php echo $row->image?>' alt=''>
                        </a>
                    </div>
                    <?php endforeach;?>
                </div>

                <!-- Controls -->
                <a class="carousel-control-prev review-left" href="#carousel-custom" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next review-right" href="#carousel-custom" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

            <!-- thumb -->
            <ol class='carousel-indicators thumb-review'>
                <?php foreach($review_image->review_image_detail->get() as $key => $row):?>
                    <li data-target='#carousel-custom' data-slide-to='<?php echo $key?>' class='<?php echo $key == 0 ? 'active' : ''; ?>'>
                        <img src='uploads/review_image/<?php echo $row->review_image_id?>/<?php echo $row->image?>' alt=''/>
                    </li>
                <?php endforeach;?>
            </ol>
        </div>
        <a href="review_images" class="a-review"><?php echo lang('review_all')?></a>
        <!-- END Review Picture Slide -->


    </div>
    <div class="col-lg-5" id="bg-review2-pic">
        <!-- START Review VDO Slide -->
        <div id='carousel-vdo' class='carousel slide' data-ride='carousel'>
            <div class='carousel-outer'>
                <!-- me art lab slider -->
                <div class='carousel-inner inner-review'>
                    <?php foreach($review_video as $key => $row):?>
                    <div class='carousel-item <?php echo $key == 0 ? 'active' : ''; ?>'>
                        <div class="title-vdo"><?php echo $row->{'title_'.@$this->session->userdata('lang')}?></div>
                        <iframe width="85%" height="315" src="https://www.youtube.com/embed/<?php echo getYoutubeID($row->youtube)?>" frameborder="0"
                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                    </div>
                    <?php endforeach;?>
                </div>

                <!-- Controls -->
                <a class="carousel-control-prev review-left" href="#carousel-vdo" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next review-right" href="#carousel-vdo" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

            <!-- thumb -->
            <ol class='carousel-indicators thumb-review-vdo'>
                <?php foreach($review_video as $key => $row):?>
                <li data-target='#carousel-vdo' data-slide-to='<?php echo $key?>' class='<?php echo $key == 0 ? 'active' : ''; ?>'>
                    <img src='http://img.youtube.com/vi/<?php echo getYoutubeID($row->youtube)?>/0.jpg' alt='' />
                    <?php // echo thumb("http://img.youtube.com/vi/".getYoutubeID($row->youtube)."/0.jpg",'132','76','1')?>
                </li>
                <?php endforeach;?>
            </ol>
        </div>
        <a href="review_videos" class="a-review2"><?php echo lang('video_all')?></a>
        <!-- END Review VDO Slide -->
    </div>
</div>
<!-- END Review Picture and vdo -->