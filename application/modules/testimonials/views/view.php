<style>
.testimonial_title:hover{
    text-decoration:none;
}
</style>

<nav aria-label="breadcrumb">
    <ol class="breadcrumb bread">
        <li class="breadcrumb-item"><a href="home"><?php echo lang('h_home')?></a></li>
        <li class="breadcrumb-item"><a href="testimonials"><?php echo lang('h_testimonial')?></a></li>
        <li class="breadcrumb-item active" aria-current="page"><?php echo $rs->{'title_'.@$this->session->userdata('lang')}?></li>
    </ol>
</nav>
<div class="col-sm-12"></div>
<div class="title_page"><?php echo lang('h_testimonial')?></div>
<div class="title_page2"><?php echo lang('patient')?></div>
<div class="clearfix tall2"></div>



<div class="container">
    <div class="row">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-9 col-sm-12">
                    <!-- Go to www.addthis.com/dashboard to customize your tools -->
                    <div class="addthis_inline_share_toolbox_ymmj"></div>
                    <!-- Go to www.addthis.com/dashboard to customize your tools -->
                    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-50262e7e6282cf9d"></script>

                    <img src="uploads/testimonial/<?php echo $rs->{'img_'.@$this->session->userdata('lang')}?>" alt="" class="img-fluid">
                    <p class="lead"><?php echo $rs->{'title_'.@$this->session->userdata('lang')}?></p>
                    
                    <div><?php echo $rs->{'detail_'.@$this->session->userdata('lang')}?></div>

                    <!-- facebook comment -->
                    <div class="fb-comments" data-href="https://<?php echo $_SERVER['HTTP_HOST']?><?php echo $_SERVER['REQUEST_URI']?>" data-width="100%" data-numposts="5"></div>

                </div>
                <div class="col-lg-3  col-md-3 col-sm-12">
                    <img src="themes/mediqueenclinic/images/pro01.jpg" alt="" class="img-fluid">
                    <div class="list-group">
                        <a class="list-group-item" href="https://line.me/R/ti/p/%40mediqueen" target="_blank">
                            <img src="themes/mediqueenclinic/images/add-line.gif" alt="" class="img-fluid">
                        </a>
                        <div class="list-group-item" href="#">
                            <h4 class="list-group-item-heading">ดูรีวิว อื่นๆ</h4>
                            COSMETIC SURGERY
                        </div>
                    </div>
                    <div class="well">
                        <div class="media mb-2">
                            <img src="themes/mediqueenclinic/images/small-pic01.jpg" alt="" class="mr-3 img-fluid">
                            <div class="media-body">
                                <a href="reviews/categories">
                                    <h5 class="mb-0">เสริมหน้าอก</h5>
                                </a>
                                เพิ่มความมั่นใจ อกสวยชิด
                                ดูเป็นธรรมชาติ
                            </div>
                        </div>
                        <div class="media mb-2">
                            <img src="themes/mediqueenclinic/images/small-pic02.jpg" alt="" class="mr-3 img-fluid">
                            <div class="media-body">
                                <a href="reviews/categories">
                                    <h5 class="mb-0">ปาก</h5>
                                </a>
                                ปากกระจับ "เรียวปากสวย ได้รูป"
                            </div>
                        </div>
                        <div class="media mb-2">
                            <img src="themes/mediqueenclinic/images/small-pic03.jpg" alt="" class="mr-3 img-fluid">
                            <div class="media-body">
                                <a href="reviews/categories">
                                    <h5 class="mb-0">ตัดไขมันกระพุ้งแก้ม</h5>
                                </a>
                                (Buccal fat pad removal)
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
</div>