<nav aria-label="breadcrumb">
    <ol class="breadcrumb bread">
        <li class="breadcrumb-item"><a href="home">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Services</li>
    </ol>
</nav>
<div class="title_page">SERVICES</div>
<div class="title_page2">Categories</div>
<div class="clearfix tall"></div>

<div class="row">
    <div class="col-lg-12">
        <!-- START COL Leftmenu -->
        <div class="col-lg-2 col-sm-3 col-xs-12 box-leftmenu">
            <div class="leftmenu">
                <ul>
                    <?php foreach($rs as $key=>$row):?>
                        <li class=""><a href="services/category/<?php echo $row->slug?>"><?php echo $row->name_th?></a></li>
                    <?php endforeach;?>
                    <li class="active"><a href="products">SKIN CARE PRODUCTS</a></li>
                </ul>
            </div>
        </div>
        <!-- END COL Leftmenu -->
        <!-- START COL CONTENT -->
        <div class="col-lg-10 col-sm-10 col-xs-12" style="float:right;">
            <!--########################################## Start SKIN CARE PRODUCTS ##########################################-->
            <div class="title-meso">BPH Skin care</div>

            <?php foreach($products as $row):?>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 float-left card01">
                <div class="card box-part">
                    <img class="card-img-top" src="uploads/product/<?php echo $row->image?>" alt="">
                    <div class="card-body">
                        <h6 class="card-title"><?php echo $row->title_th?></h6>
                        <h5><?php echo $row->price?></h5>
                        <a href="products/view/<?php echo $row->id?>" class="btn btn-primary">รายละเอียด</a>
                    </div>
                </div>
            </div>
            <?php endforeach;?>
            
        </div>
        <!-- END content col-12 -->

    </div>

</div>
</div>
<br>