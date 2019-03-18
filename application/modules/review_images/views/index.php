<nav aria-label="breadcrumb">
    <ol class="breadcrumb bread">
        <li class="breadcrumb-item"><a href="home">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Doctors</li>
    </ol>
</nav>
<div class="col-sm-12"></div>
<div class="title_page">REVIEWS</div>
<div class="title_page2"></div>
<div class="clearfix tall2"></div>
<div class="container">
    <div class="row">

        <?php foreach($rs as $rkey => $review_image):?>
        <div class="col-sm-6 boxreviewall">
            <div class="title-review-all"><?php echo $review_image->title_th?></div>
            <div id='carousel-<?php echo $rkey?>' class='carousel slide' data-ride='carousel'>
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
                    <a class="carousel-control-prev arrowreview" href="#carousel-<?php echo $rkey?>" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next arrowreview" href="#carousel-<?php echo $rkey?>" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>

                <!-- thumb -->
                <ol class='carousel-indicators thumb-review'>
                    <?php foreach($review_image->review_image_detail->get() as $key => $row):?>
                        <li data-target='#carousel-<?php echo $rkey?>' data-slide-to='<?php echo $key?>' class='<?php echo $key == 0 ? 'active' : ''; ?>'>
                            <img src='uploads/review_image/<?php echo $row->review_image_id?>/<?php echo $row->image?>' alt=''/>
                        </li>
                    <?php endforeach;?>
                </ol>
            </div>

        </div>
        <?php endforeach;?>


        <div class="container" align="right"><?=$rs->pagination();?></div>
    </div>
</div>

