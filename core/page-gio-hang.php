<?php
get_header();
get_template_part('sections/breadcums');
?>
<section class="page_cart" id="pageCart">
    <div class="container">
        <div class="product_cart">
            <div class="row-divide option_cart">
                <div class="col-divide-6">
                    <p>Sản phẩm</p>
                </div>
                <div class="col-divide-2 mc-center">
                    <p>Số lượng</p>
                </div>
                <div class="col-divide-2 mc-center">
                    <p>Thành tiền</p>
                </div>
                <div class="col-divide-2 mc-center">
                    <p>#</p>
                </div>
            </div>
            <div class="product__cart-list"></div>
            <div class="result_price">
                <p><i class="fas fa-dollar-sign"></i>&nbsp;&nbsp;Tổng tiền <span id="sumProductshow"></span></span> VNĐ</p>
            </div>
        </div>
        <div class="produc_pay">
            <h3 class="mc-title-infor">Thông tin thanh toán</h3>
            <form class="row-divide">
                <div class="col-divide-6 mc-mgb-20">
                    <label for="hoVaTenCart" class="title_infor">Họ và tên</label>
                    <input type="text" name="hoVaTenCart" class="mc-style-inp" id="hoVaTenCart"/>
                    <p class="d--none validate" id="hoVaTenCartVal"> Vui lòng điền họ và tên *</p>
                </div>
                <div class="col-divide-6 mc-mgb-20">
                    <label for="dienThoaiCart" class="title_infor">Điện thoại</label>
                    <input type="text" name="dienThoaiCart" class="mc-style-inp" id="dienThoaiCart"/>
                    <p class="d--none validate" id="dienThoaiCartVal"> Vui lòng nhập số điện thoại *</p>
                </div>
                <div class="col-divide-6 mc-mgb-20">
                    <label for="emailCart" style="display:block" class="title_infor">Email</label>
                    <input type="text" name="emailCart" id="emailCart" class="mc-style-inp"placeholder="you@example.com" />
                    <p class="d--none validate" id="emailCartVal"> Vui lòng nhập email *</p>
                </div>
                <div class="col-divide-6 mc-mgb-20">
                    <label for="diaChiCart" class="title_infor">Địa chỉ</label>
                    <input type="text" name="diaChiCart" id="diaChiCart" class="mc-style-inp"/>
                    <p class="d--none validate" id="diaChiCartVal"> Vui lòng địa chỉ *</p>
                </div>
                <div class="col-divide-12 mc-mgb-20">
                    <label for="ghiChuCart" class="title_infor d--block">Ghi chú</label>
                    <textarea name="ghiChuCart" id="ghiChuCart" cols="30" rows="8" class="mc-style-gc"></textarea>
                </div>
                <div class="col-divide-6 mc-mgb-20">
                    <label for="cityNameChoose" class="title_infor">Tỉnh/thành phố</label>
                    <select name="cityCart" id="cityNameChoose" class="mc-style-inp" >
                        <option value="">Tỉnh/thành phố</option>
                    </select>
                    <p class="d--none validate" id="cityCartVal"> Vui lòng chọn tỉnh/thành phố *</p>
                </div>
                <div class="col-divide-6 mc-mgb-20">
                    <label for="countryNameChoose" class="title_infor">Quận huyện</label>
                    <select name="districCart" class="mc-style-inp" id="countryNameChoose">
                        <option value="Quận huyện">Quận huyện</option>
                    </select>
                    <p class="d--none validate" id="districCartVal"> Vui lòng chọn quận/huyện *</p>
                </div>
            </form>
            <button class="submit_tt_cart" id="submitTTCart" aria-label="thanh-toan-button"><i class="far fa-credit-card"></i>&nbsp;THANH TOÁN</button>
        </div>
    </div>
</section>
<?php
get_footer();
?>
