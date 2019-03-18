<nav aria-label="breadcrumb">
    <ol class="breadcrumb bread">
        <li class="breadcrumb-item"><a href="home"><?php echo lang('h_home')?></a></li>
        <li class="breadcrumb-item active" aria-current="page"><?php echo lang('h_doctor')?></li>
    </ol>
</nav>
<div class="col-sm-12"></div>
<div class="title_page"><?php echo lang('h_doctor')?></div>
<div class="title_page2"><?php echo lang('team')?></div>
<div class="clearfix tall2"></div>
<div class="container">
    <div class="row">

        <?php foreach($rs as $row):?>
        <div class="col-sm-6 media2">
            <div class="media">
                <img class="align-self-start mr-3 pic-doctor" src="uploads/doctor/<?php echo $row->image?>" alt="...">
                <div class="name_doctor"><?php echo $row->{'name_'.@$this->session->userdata('lang')}?></div>
                <div class="nickname"><?php echo $row->{'nickname_'.@$this->session->userdata('lang')}?></div>
                <div class="media-body box-doctor">
                    <p class="paragraph1"><b><?php echo lang('position')?> :</b> <?php echo $row->{'position_'.@$this->session->userdata('lang')}?></p>
                    <p class="paragraph3"><b><?php echo lang('experience')?> :</b> <?php echo $row->{'exp_'.@$this->session->userdata('lang')}?></p>
                    <p class="paragraph2"> <b><?php echo lang('expertise')?></b> <br>
                    <?php echo $row->{'expert_'.@$this->session->userdata('lang')}?></p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 media3">
            <div class="col-sm-11 mx-auto">
                <div class="intro_vdo"><?php echo lang('intro_vid')?> <?php echo $row->{'name_'.@$this->session->userdata('lang')}?></div>
                <iframe width="100%" height="315" src="https://www.youtube.com/embed/<?php echo getYoutubeID($row->youtube)?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
            </div>
        </div>
        <?php endforeach;?>

        <div class="container" align="right"><?=$rs->pagination();?></div>
    </div>
</div>