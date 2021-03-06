<nav aria-label="breadcrumb">
    <ol class="breadcrumb bread">
        <li class="breadcrumb-item"><a href="home"><?php echo lang('h_home')?></a></li>
        <li class="breadcrumb-item active" aria-current="page"><?php echo lang('h_contact')?></li>
    </ol>
</nav>
<div class="col-sm-12"></div>
<div class="title_page"><?php echo lang('h_contact')?></div>
<div class="title_page2"></div>
<div class="clearfix tall2"></div>
<div class="container">
    <div class="row">
        <div class="col-sm-4">
            <img src="themes/mediqueenclinic/images/icon-mark.png" alt=""><?php echo $rs->{'address_'.@$this->session->userdata('lang')}?>
        </div>
        <div class="col-sm-4">
            <img src="themes/mediqueenclinic/images/icon-phone.png" alt=""><?php echo $rs->{'tel_'.@$this->session->userdata('lang')}?>
        </div>
        <div class="col-sm-4">
            <img src="themes/mediqueenclinic/images/icon-time.png" alt=""><?php echo $rs->{'time_'.@$this->session->userdata('lang')}?>
        </div>
    </div>
    <div class="clearfix tall2"></div>
    <div class="row">
        <div class="col-sm-3 col-xs-12"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3888.3304547811294!2d100.88882011417532!3d12.950693890869578!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3102be729d8cace7%3A0x697b5d71a75b4628!2zTWVkaXF1ZWVuIENsaW5pYyDguYDguKHguJTguLTguITguKfguLXguJnguKrguYwg4LiE4Lil4Li04LiZ4Li04LiBIOC4quC4suC4guC4suC4nuC4seC4l-C4ouC4sg!5e0!3m2!1sth!2sth!4v1551088454673"
                width="100%" height="181" frameborder="0" style="border:0" allowfullscreen class="box-map"></iframe>
        </div>
        <div class="col-sm-3 col-xs-12"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3839.1617103717035!2d104.14051331421673!3d15.795424989050622!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3117cf289ba69d49%3A0xfc3ff62131284bda!2zTWVkaXF1ZWVuIENsaW5pYyBZYXNvdGhvbiDguYDguKHguJTguLTguITguKfguLXguJnguKrguYwg4LiE4Lil4Li04LiZ4Li04LiBIOC4ouC5guC4quC4mOC4ow!5e0!3m2!1sth!2sth!4v1551088544542"
                width="100%" height="181" frameborder="0" style="border:0" allowfullscreen class="box-map"></iframe></div>
        <div class="col-sm-3 col-xs-12"><img src="themes/mediqueenclinic/images/map1.jpg" alt="" class="box-map"></div>
        <div class="col-sm-3 col-xs-12"><img src="themes/mediqueenclinic/images/map2.jpg" alt="" class="box-map"></div>
    </div>
    <div class="row">
        <div class="title_page2" style="margin-left: -40px;"><?php echo lang('send_us')?></div>
    </div><br>
    <form method="post" action="contacts/save">
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group"><input name="name" type="text" class="form-control contact-input" id="" placeholder="<?php echo lang('name')?> *" required></div>
                <div class="form-group"></div><input name="email" type="email" class="form-control contact-input" id="email" placeholder="<?php echo lang('email')?> *" required>
                <div class="form-group"></div><input name="tel" type="text" class="form-control contact-input" id="" placeholder="<?php echo lang('tel')?> *" required>
            </div>
            <div class="col-sm-6 contact-textarea">
                <div class="form-group"><textarea class="form-control contact-input" rows="6" placeholder="<?php echo lang('message')?> *" id="" name="message" required></textarea></div>
                <div class="form-group">
                    <img src="users/captcha" /><br>
                    <input type="text" name="captcha" class="captcha" style="width:104px;" placeholder="<?php echo lang('captcha')?> *" required>
                </div>
                <button class="btn btn-send" type="submit"><?php echo lang('submit')?></button>
            </div>
        </div>
    </form>
</div>
</div>

</div>