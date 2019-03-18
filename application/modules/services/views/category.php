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
                    <li class="<?php echo $category_id == $row->id ? 'active' : '' ?>"><a href="services/category/<?php echo $row->id?>"><?php echo $row->{'name_'.@$this->session->userdata('lang')}?></a></li>
                    <?php endforeach;?>
                    <li><a href="products"><?php echo lang('product')?></a></li>
                </ul>
            </div>
        </div>
        <!-- END COL Leftmenu -->
        <!-- START COL TAB -->
        <div class="col-lg-10 col-sm-9 col-xs-12 box-tab">
            <!-- Nav tabs -->
            <ul class="nav">
                <?php foreach($services as $key => $row):?>
                <li class="grounded-radiants-box">
                    <a class="grounded-radiants <?php echo $key == 0 ? 'active' : '' ?>" data-toggle="tab" href="#tab-<?php echo $key?>"><span class="btn-service"><?php echo $row->{'title_'.@$this->session->userdata('lang')}?></span><br>
                    <?php echo $row->{'subtitle_'.@$this->session->userdata('lang')}?></a>
                </li>
                <?php endforeach;?>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
                <?php foreach($services as $key => $row):?>
                <div class="tab-pane <?php echo $key == 0 ? 'active' : '' ?> container" id="tab-<?php echo $key?>">
                    <!-- <div class="col-sm-6 col-xs-12 meso"> -->
                        <div class="title-meso"><?php echo $row->{'title_'.@$this->session->userdata('lang')}?></div>
                        <?php echo $row->{'detail_'.@$this->session->userdata('lang')}?>
                    <!-- </div> -->
                </div>
                <?php endforeach;?>
            </div>
        </div>
        <!-- END COL TAB -->

    </div>

</div>
</div>