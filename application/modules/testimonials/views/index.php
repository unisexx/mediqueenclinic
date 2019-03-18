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
<div class="container">
    <div class="row">

        <?php foreach($rs as $row):?>
        <div class="col-sm-6 media1">
            <div class="media">
                <img class="align-self-start mr-3 pic-tester" src="uploads/testimonial/<?php echo $row->image?>" alt="...">
                <div class="name_tester title-tester"><?php echo $row->{'name_'.@$this->session->userdata('lang')}?></div>
                <div class="media-body box-tester">
                    <p><img src="themes/mediqueenclinic/images/quote_icon.png"><br>
                        <?php echo $row->{'detail_'.@$this->session->userdata('lang')}?></p>
                </div>
            </div>
        </div>
        <?php endforeach;?>

        <div class="container" align="right"><?=$rs->pagination();?></div>
    </div>
</div>