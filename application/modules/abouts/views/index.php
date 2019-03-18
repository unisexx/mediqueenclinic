<nav aria-label="breadcrumb">
    <ol class="breadcrumb bread">
        <li class="breadcrumb-item"><a href="home"><?php echo lang('h_home')?></a></li>
        <li class="breadcrumb-item active" aria-current="page"><?php echo lang('h_about')?></li>
    </ol>
</nav>

<div class="col-sm-12"></div>
<div class="title_page"><?php echo lang('h_about')?></div>
<div class="title_page2"><?php echo lang('vision')?></div>

<?php echo $rs->{'detail_'.@$this->session->userdata('lang')}?>