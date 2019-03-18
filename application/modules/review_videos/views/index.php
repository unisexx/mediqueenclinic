<nav aria-label="breadcrumb">
    <ol class="breadcrumb bread">
        <li class="breadcrumb-item"><a href="home">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Doctors</li>
    </ol>
</nav>
<div class="col-sm-12"></div>
<div class="title_page">VIDEO</div>
<div class="title_page2"></div>
<div class="clearfix tall2"></div>
<div class="container">
    <div class="row">

        <?php foreach($rs as $row):?>
        <div class="col-sm-6 boxvdoall">
            <div class=" title-vdo-all"><?php echo $row->title_th?></div>
            <iframe width="85%" height="315" src="https://www.youtube.com/embed/<?php echo getYoutubeID($row->youtube)?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <?php endforeach;?>

        <div class="container" align="right"><?=$rs->pagination();?></div>
    </div>
</div>