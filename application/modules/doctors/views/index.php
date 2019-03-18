<nav aria-label="breadcrumb">
    <ol class="breadcrumb bread">
        <li class="breadcrumb-item"><a href="home">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Doctors</li>
    </ol>
</nav>
<div class="col-sm-12"></div>
<div class="title_page">DOCTORS</div>
<div class="title_page2">ทีมแพทย์เมดิควีนส์คลินิก</div>
<div class="clearfix tall2"></div>
<div class="container">
    <div class="row">

        <?php foreach($rs as $row):?>
        <div class="col-sm-6 media2">
            <div class="media">
                <img class="align-self-start mr-3 pic-doctor" src="uploads/doctor/<?php echo $row->image?>" alt="...">
                <div class="name_doctor"><?php echo $row->name_th?></div>
                <div class="nickname"><?php echo $row->nickname_th?></div>
                <div class="media-body box-doctor">
                    <p class="paragraph1"><b>ตำแหน่ง :</b> <?php echo $row->position_th?></p>
                    <p class="paragraph3"><b>ประสบการณ์ :</b> <?php echo $row->exp_th?></p>
                    <p class="paragraph2"> <b>ความเชี่ยวชาญ</b> <br>
                    <?php echo $row->expert_th?></p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 media3">
            <div class="col-sm-11 mx-auto">
                <div class="intro_vdo">วีดีโอแนะนำตัว <?php echo $row->name_th?></div>
                <iframe width="100%" height="315" src="https://www.youtube.com/embed/<?php echo getYoutubeID($row->youtube)?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
            </div>
        </div>
        <?php endforeach;?>

        <div class="container" align="right"><?=$rs->pagination();?></div>
    </div>
</div>