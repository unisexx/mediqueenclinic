<nav aria-label="breadcrumb">
    <ol class="breadcrumb bread">
        <li class="breadcrumb-item"><a href="home"><?php echo lang('h_home')?></a></li>
        <li class="breadcrumb-item active" aria-current="page"><?php echo lang('h_article')?></li>
    </ol>
</nav>

<div class="col-sm-12"></div>
<div class="title_page"><?php echo lang('h_article')?></div>

<div class="clearfix tall"></div>

<div class="row">
    <div class="col-lg-12">
    <!-- START COL Leftmenu -->
        <div class="col-lg-2 col-sm-3 col-xs-12 box-leftmenu">
            <div class="title_page2" style="margin-left:0px;"><?php echo lang('category')?></div>
            <div class="leftmenu-article">
                <ul>
                    <?php foreach($article_category as $key=>$item):?>
                    <li><a class="<?php echo $category_id == $item->id ? 'active' : ''?>" href="articles/category/<?php echo $item->id?>"><?php echo $item->{'name_'.@$this->session->userdata('lang')}?></a></li>
                    <?php endforeach;?>
                </ul>
            </div>

            <div class="title_page2" style="margin-left:0px;"><?php echo lang('h_article')?></div>
            <div class="leftmenu-article">
                <ul>
                    <?php foreach($articles as $key=>$row):?>
                    <li><a class="<?php echo $key==0 ? 'active' : ''?>" data-toggle="tab" href="#tab-article-<?php echo $key?>"><?php echo $row->{'title_'.@$this->session->userdata('lang')}?></a></li>
                    <?php endforeach;?>
                </ul>
            </div>
        </div>
        <!-- END COL Leftmenu -->
        <!-- START COL TAB -->
        <div class="col-lg-10 col-sm-9 col-xs-12 box-tab">
            <!-- Tab panes -->
			<div class="tab-content">

                <?php foreach($articles as $key=>$row):?>
                <div class="tab-pane container <?php echo $key==0 ? 'active' : ''?>" id="tab-article-<?php echo $key?>">
                    <div class="title-article"><?php echo $row->{'title_'.@$this->session->userdata('lang')}?></div><br>
                    <small>โพสต์เมื่อ : <?php echo mysql_to_th($row->created)?></small>
                    <div class="row">
                        <img src="uploads/article/<?php echo $row->{'img_'.@$this->session->userdata('lang')}?>" class="col-md-5 rounded img-meso float-left img-fluid" alt="<?php echo $row->{'title_'.@$this->session->userdata('lang')}?>" style="height:100% ;">
                        
                        <div class="col-md-6 num-pdo float-left align-self-center">
                            <?php echo $row->{'detail_'.@$this->session->userdata('lang')}?>
                        </div>

                    </div>
                </div>
                <?php endforeach;?>

            </div>

            <hr>
            <!-- facebook comment -->
            <div class="fb-comments" data-href="https://<?php echo $_SERVER['HTTP_HOST']?><?php echo $_SERVER['REQUEST_URI']?>" data-width="100%" data-numposts="5"></div>
        </div>
    </div>
</div>
