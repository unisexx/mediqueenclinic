<style>
    .testimonial_title:hover {
        text-decoration: none;
    }
</style>

<nav aria-label="breadcrumb">
    <ol class="breadcrumb bread">
        <li class="breadcrumb-item"><a href="home"><?php echo lang('h_home') ?></a></li>
        <li class="breadcrumb-item active" aria-current="page"><?php echo lang('h_testimonial') ?></li>
    </ol>
</nav>
<div class="col-sm-12"></div>
<div class="title_page"><?php echo lang('h_testimonial') ?></div>
<div class="title_page2"><?php echo lang('patient') ?></div>
<div class="clearfix tall2"></div>

<div class="container">
    <div class="row">

        <?php foreach ($rs as $row) : ?>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <a href="testimonials/view/<?php echo $row->id ?>">
                    <div class="news-image">
                        <div class="news-img">
                            <img src="uploads/testimonial/<?php echo $row->{'img_' . @$this->session->userdata('lang')} ?>" alt="<?php echo $row->{'title_' . @$this->session->userdata('lang')} ?>" class="img-fluid">
                        </div>
                        <div class="news-head">
                            <?php echo $row->{'title_' . @$this->session->userdata('lang')} ?>
                            <p>มั่นใจ ในความสวยแบบที่เป็นตัวเอง</p>
                        </div>
                    </div>
                </a>
            </div>
        <?php endforeach; ?>

    </div>

    <div class="container" align="right"><?= $rs->pagination(); ?></div>
</div>