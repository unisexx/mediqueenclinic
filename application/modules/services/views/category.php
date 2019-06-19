<nav aria-label="breadcrumb">
    <ol class="breadcrumb bread">
        <li class="breadcrumb-item"><a href="home"><?php echo lang('h_home')?></a></li>
        <li class="breadcrumb-item active" aria-current="page"><?php echo lang('h_service')?></li>
    </ol>
</nav>
<div class="title_page"><?php echo lang('h_service')?></div>
<div class="title_page2"><?php echo lang('category')?></div>
<div class="clearfix tall"></div>

<div class="row">
    <div class="col-lg-12">
        <!-- START COL Leftmenu -->
        <div class="col-lg-2 col-sm-3 col-xs-12 box-leftmenu">
            <div class="leftmenu">
                <ul>
                    <?php foreach($rs as $key=>$row):?>
                    <li class="<?php echo $slug == $row->slug ? 'active' : '' ?>"><a href="services/index/<?php echo $row->slug?>"><?php echo $row->{'name_'.@$this->session->userdata('lang')}?></a></li>
                    <?php endforeach;?>
                    <li><a href="products"><?php echo lang('product')?></a></li>
                </ul>
            </div>
        </div>
        <!-- END COL Leftmenu -->

        
        <!-- START COL TAB -->
        <div class="col-lg-10 col-sm-9 col-xs-12 box-tab">

            <!-- Service Title -->
            <ul class="nav">
                <?php foreach($services as $key => $row):?>
                <li class="grounded-radiants-box">
                    <a class="grounded-radiants <?php echo $row->id == $service->id ? 'active' : '' ?>" href="services/category/<?php echo $slug?>/<?php echo $row->id?>"><span class="btn-service"><?php echo $row->{'title_'.@$this->session->userdata('lang')}?></span><br>
                    <?php echo $row->{'subtitle_'.@$this->session->userdata('lang')}?></a>
                </li>
                <?php endforeach;?>
            </ul>

            <!-- Details -->
            <div>
                <div>
                    <!-- <div class="col-sm-6 col-xs-12 meso"> -->
                    <div class="title-meso"><?php echo $service->{'title_'.@$this->session->userdata('lang')}?></div>
                    <?php echo $service->{'detail_'.@$this->session->userdata('lang')}?>
                    <!-- </div> -->
                </div>
            </div>
        </div>
        <!-- Details -->

    </div>

</div>
</div>