<?php
get_header();
get_template_part('sections/breadcums');
?>
<div class="page__contact my-60">
  <div class="container">
    <div class="row-divide">
        <div class="col-divide-6 col-divide-md-12">
            <h3 class="ss-authentic"><?php echo get_theme_mod('company_name'); ?></h3>
            <div class="contact_information">
                <p><span>Địa chỉ</span> <span class="mc-dot-style">:</span> <span><?php echo get_theme_mod('company_address'); ?></span> </p>
                <p><span>Hotline</span> <span>:</span> <span><?php echo get_theme_mod('company_phone'); ?></span> </p>
                <p><span>Email</span> <span class="mc-dot-style-two">:</span> <span><?php echo get_theme_mod('company_email'); ?></span> </p>
            </div>
            <div class="form_infor_contact row-divide">
                <div class="col-divide-6 name--customer mg-bt-10">
                    <p>Họ và tên</p>
                    <input type="text" name=""/>
                </div>
                <div class="col-divide-6 email--customer mg-bt-10">
                    <p>Email</p>
                    <input type="text" name=""/>
                </div>
                <div class="col-divide-6 sdt--customer mg-bt-10">
                    <p>Điện thoại</p>
                    <input type="text" name=""/>
                </div>
                <div class="col-divide-6 dc--customer mg-bt-10">
                    <p>Địa chỉ</p>
                    <input type="text" name="" />
                </div>
                <div class="col-divide-12 nd--customer">
                    <p>Nội dung</p>
                    <textarea name="noidung" rows="8" id=""></textarea>
                </div>
            </div>
            <div class="btn_formcontact">
                <button class="btn-send mc-style-btn-contact" id="btnFormcontact">GỬI</button>
                <button class="write-again mc-style-btn-contact" id="btnWriterAgain">NHẬP LẠI</button>
            </div>
        </div>
        <div class="col-divide-6 col-divide-md-12 dc-maps">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.635015753784!2d106.65623431533444!3d10.839218260994189!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317529a14af56771%3A0x1053c6f69b60391!2zOTgyLzc1LzExIFF1YW5nIFRydW5nLCBQaMaw4budbmcgMTEsIEfDsiBW4bqlcCwgSOG7kyBDaMOtIE1pbmgsIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1589863213110!5m2!1svi!2s" title="google-map-stealsneaker" frameborder="0" style="border:0; width:100%; height:470px" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
    </div>
  </div>
</div>


<?php
get_footer();
?>
