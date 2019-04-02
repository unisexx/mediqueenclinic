<nav aria-label="breadcrumb">
    <ol class="breadcrumb bread">
        <li class="breadcrumb-item"><a href="home"><?php echo lang('h_home')?></a></li>
        <li class="breadcrumb-item active" aria-current="page"><?php echo lang('h_article')?></li>
    </ol>
</nav>

<div class="col-sm-12"></div>
<div class="title_page"><?php echo lang('h_article')?></div>

<?php foreach($rs as $key=>$row):?>
<div class="title-article"><?php echo $row->{'title_'.@$this->session->userdata('lang')}?></div>
<div class="row">

    <?php if($key % 2 != 1):?>
    <img src="uploads/article/<?php echo $row->{'img_'.@$this->session->userdata('lang')}?>" class="col-md-5 rounded img-meso float-left img-fluid" alt="<?php echo $row->{'title_'.@$this->session->userdata('lang')}?>" style="height:100% ;">
    <?php endif;?>

    <div class="col-md-7 num-pdo float-left align-self-center">
        <?php echo $row->{'detail_'.@$this->session->userdata('lang')}?>
    </div>

    <?php if($key % 2 == 1):?>
    <img src="uploads/article/<?php echo $row->{'img_'.@$this->session->userdata('lang')}?>" class="col-md-5 rounded img-meso float-left img-fluid" alt="<?php echo $row->{'title_'.@$this->session->userdata('lang')}?>" style="height:100% ;">
    <?php endif;?>

</div>
<?php endforeach;?>

<div class="container" align="right"><?=$rs->pagination();?></div>