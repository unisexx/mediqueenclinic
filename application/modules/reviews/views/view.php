<nav aria-label="breadcrumb">
    <ol class="breadcrumb bread">
        <li class="breadcrumb-item"><a href="home"><?php echo lang('h_home')?></a></li>
        <li class="breadcrumb-item"><a href="reviews/categories"><?php echo lang('h_review')?></a></li>
        <li class="breadcrumb-item active" aria-current="page"><?php echo $rs->{'title_'.@$this->session->userdata('lang')}?></li>
    </ol>
</nav>

<div class="col-sm-12"></div>
<div class="title_page"><?php echo lang('h_review')?></div>

<div class="clearfix tall"></div>

<div class="col-lg-12">
    <div class="title-article"><?php echo $rs->{'title_'.@$this->session->userdata('lang')}?></div>
    <br>
    <small class="float-right">โพสต์เมื่อ : <?php echo mysql_to_th($rs->created)?></small>
    
    
    <!-- Go to www.addthis.com/dashboard to customize your tools -->
    <div class="addthis_inline_share_toolbox_ymmj"></div>
    <!-- Go to www.addthis.com/dashboard to customize your tools -->
    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-50262e7e6282cf9d"></script>



    <!-- ถ้าไม่มีรูปประกอบบทความ -->
    <!-- <?php if( !empty($rs->{'img_'.@$this->session->userdata('lang')}) ):?>

        <img src="uploads/review/<?php echo $rs->{'img_'.@$this->session->userdata('lang')}?>" class="rounded img-fluid" alt="<?php echo $rs->{'title_'.@$this->session->userdata('lang')}?>">

    <?php endif;?> -->
    
    <div class="col-md-12 num-pdo align-self-center">
        <?php echo $rs->{'detail_'.@$this->session->userdata('lang')}?>
    </div>


    <hr>
    <!-- facebook comment -->
    <div class="fb-comments" data-href="https://<?php echo $_SERVER['HTTP_HOST']?><?php echo $_SERVER['REQUEST_URI']?>" data-width="100%" data-numposts="5"></div>
</div>
