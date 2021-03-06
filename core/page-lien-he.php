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
                    <input type="text" name="hoVaTen" id="hoVaTen"/>
                    <p class="d--none" id="hoVaTenVal" style="font-size:14px;color:red;">Vui lòng nhập tên *</p>
                </div>
                <div class="col-divide-6 email--customer mg-bt-10">
                    <p>Email</p>
                    <input type="text" name="Email" id="Email"/>
                    <p class="d--none" id="emailVal" style="font-size:14px;color:red;">Vui lòng nhập email *</p>
                </div>
                <div class="col-divide-6 sdt--customer mg-bt-10">
                    <p>Điện thoại</p>
                    <input type="text" name="dienThoai" id="dienThoai"/>
                    <p class="d--none" id="dienThoaiVal" style="font-size:14px;color:red;">Vui lòng nhập điện thoại *</p>
                </div>
                <div class="col-divide-6 dc--customer mg-bt-10">
                    <p>Địa chỉ</p>
                    <input type="text" name="diaChi"  id="diaChi"/>
                    <p class="d--none" id="diaChiVal" style="font-size:14px;color:red;">Vui lòng nhập địa chỉ *</p>
                </div>
                <div class="col-divide-12 nd--customer">
                    <p>Nội dung</p>
                    <textarea name="noiDung" rows="8" id="noiDung"></textarea>
                    <p class="d--none" id="noiDungVal" style="font-size:14px;color:red;">Vui lòng nhập đúng ký tự Việt Nam *</p>
                </div>
            </div>
            <div class="btn_formcontact">
                <button class="btn-send mc-style-btn-contact" id="btnFormcontact">GỬI</button>
                <button class="write-again mc-style-btn-contact" id="btnWriterAgain">NHẬP LẠI</button>
            </div>
        </div>
        <div class="col-divide-6 col-divide-md-12 dc-maps my-40">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15674.513665675537!2d106.6475827!3d10.8397222!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xa79c9edb683204c9!2sSteal%20Sneaker%20Authentic!5e0!3m2!1svi!2s!4v1591432977193!5m2!1svi!2s" title="google-map-stealsneaker" frameborder="0" style="border:0; width:100%; height:470px" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
    </div>
  </div>
</div>


<?php
get_footer();
?>
