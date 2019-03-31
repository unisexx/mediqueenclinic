<nav aria-label="breadcrumb">
    <ol class="breadcrumb bread">
        <li class="breadcrumb-item"><a href="home"><?php echo lang('h_home')?></a></li>
        <li class="breadcrumb-item active" aria-current="page"><?php echo lang('h_promotion')?></li>
    </ol>
</nav>

<div class="col-sm-12"></div>
<div class="title_page"><?php echo lang('h_promotion')?></div>
<div class="title_page2"><?php echo $rs->{'title_'.@$this->session->userdata('lang')}?></div>

<?php echo $rs->{'detail_'.@$this->session->userdata('lang')}?>

<div class="clearfix tall2"></div>
<div class="container">
    <div class="row">
    <?php foreach($rs->promotion_image->get() as $item):?>
    <div class="col-sm-6 media4">
        <img src="uploads/promotion_image/<?php echo $rs->id?>/<?php echo $item->image?>" class="box-pro img-fluid" alt="...">
        <div class="btn-zoom"><a href="uploads/promotion_image/<?php echo $rs->id?>/<?php echo $item->image?>" data-lightbox="promotion"><img src="themes/mediqueenclinic/images/zoom-icon.png"> คลิก ขยายภาพ</a></div>
    </div>
    <?php endforeach;?>
        
        <div class="col-sm-6"></div>
        <div class="col-sm-6 media5 float-right">
            <div class="progood">
                <a href="#">Promotion ขายดี <img src="images/arrow_promotion.jpg" style="padding-left: 5px;"></a>
            </div>
            <div class="icon-share">
                <a href="#"><img src="images/icon-share.png" style="padding-left: 5px;"></a>
                <a href="#"><img src="images/icon-facebook.png" style="padding-left: 5px;"></a>
                <a href="#"><img src="images/icon-line2.png" style="padding-left: 5px;"></a>
                <a href="#"><img src="images/icon-youtube.png" style="padding-left: 5px;"></a>
            </div>
        </div>
    </div>
</div>