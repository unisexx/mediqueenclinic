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
<div class="title_page"><?php echo lang('h_testimonial')?></div>
<div class="title_page2"><?php echo lang('patient')?></div>
<div class="clearfix tall2"></div>

<div class="d-flex flex-wrap">
    <?php foreach($rs as $row):?>

    <div class="col-md-4 flex-fill" style="padding-bottom:30px;">
        <a class="testimonial_title" href="testimonials/view/<?php echo $row->id?>">
            <img class="img-fluid" src="uploads/testimonial/<?php echo $row->{'img_'.@$this->session->userdata('lang')}?>" alt="<?php echo $row->{'title_'.@$this->session->userdata('lang')}?>">
            <h3 style="margin-top:10px; font-size:20px; color:#9001a3;"><?php echo $row->{'title_'.@$this->session->userdata('lang')}?></h3>
        </a>
    </div>

    <?php endforeach;?>
</div>

<div class="container" align="right"><?=$rs->pagination();?></div>
