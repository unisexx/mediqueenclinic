<nav aria-label="breadcrumb">
    <ol class="breadcrumb bread">
        <li class="breadcrumb-item"><a href="home">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Testimonial</li>
    </ol>
</nav>
<div class="col-sm-12"></div>
<div class="title_page">TESTIMONIAL</div>
<div class="title_page2">รีวิวจากคนไข้จริง</div>
<div class="clearfix tall2"></div>
<div class="container">
    <div class="row">

        <?php foreach($rs as $row):?>
        <div class="col-sm-6 media1">
            <div class="media">
                <img class="align-self-start mr-3 pic-tester" src="uploads/testimonial/<?php echo $row->image?>" alt="...">
                <div class="name_tester title-tester"><?php echo $row->name_th?></div>
                <div class="media-body box-tester">
                    <p><img src="themes/mediqueenclinic/images/quote_icon.png"><br>
                        <?php echo $row->detail_th?></p>
                </div>
            </div>
        </div>
        <?php endforeach;?>

        <div class="container" align="right"><?=$rs->pagination();?></div>
    </div>
</div>