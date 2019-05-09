<style>
.testimonial_title:hover{
    text-decoration:none;
}
</style>

<nav aria-label="breadcrumb">
    <ol class="breadcrumb bread">
        <li class="breadcrumb-item"><a href="home"><?php echo lang('h_home')?></a></li>
        <li class="breadcrumb-item active" aria-current="page"><?php echo lang('h_testimonial')?></li>
    </ol>
</nav>
<div class="col-sm-12"></div>
<div class="title_page"><?php echo $rs->{'title_'.@$this->session->userdata('lang')}?></div>

<div style="padding:0 20px;">
    <small class="float-right">โพสต์เมื่อ : <?php echo mysql_to_th($rs->created)?></small>
    
    
    <!-- Go to www.addthis.com/dashboard to customize your tools -->
    <div class="addthis_inline_share_toolbox_ymmj"></div>
    <!-- Go to www.addthis.com/dashboard to customize your tools -->
    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-50262e7e6282cf9d"></script>

    <div class="testimonial_detail">
        <img src="uploads/testimonial/<?php echo $rs->{'img_'.@$this->session->userdata('lang')}?>" class="img-fluid" alt="<?php echo $rs->{'title_'.@$this->session->userdata('lang')}?>" style="margin-bottom:20px;">
        
        <div><?php echo $rs->{'detail_'.@$this->session->userdata('lang')}?></div>
    </div>

    <br clear="all">
    <hr>
    <!-- facebook comment -->
    <div class="fb-comments" data-href="https://<?php echo $_SERVER['HTTP_HOST']?><?php echo $_SERVER['REQUEST_URI']?>" data-width="100%" data-numposts="5"></div>
</div>