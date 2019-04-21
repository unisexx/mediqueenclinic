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
            <div class="title-meso"><?php echo $products->title_th?></div>
            <br>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 float-left card02">
                <img class="card-img-top" src="uploads/product/<?php echo $products->image?>" alt="">
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 float-left card02">
                <h5 class="card-title"><?php echo $products->title_th?></h5>
                <p class="card-text"><?php echo $products->detail_th?></p>
                <h3><?php echo $products->price?></h3>
            </div>
            <!--########################################## End SKIN CARE PRODUCTS ##########################################-->
        </div>
        <!-- END content col-12 -->

    </div>

</div>
</div>
<br>