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
            <div class="row-divide all_product_cart">
                <div class="col-divide-6">
                    <div class="row-divide">
                        <div class="col-divide-2">
                            <img src="https://stealsneaker.wolfactive.dev/wp-content/uploads/2020/05/zz-ee3707-01-0142-43010-395x395.jpg" alt="">
                        </div>
                        <div class="col-divide-10 name_product">
                            DISNEY MICKEY MOUSE STAN SMITH SHOES (36)
                        </div>
                    </div>
                </div>
                <div class="col-divide-2 mc_self_center mc-center">
                    <input class="number_product" type="number" min="1" max="5">
                </div>
                <div class="col-divide-2 mc_self_center mc-center">
                    <p>6.380.000</p>
                </div>
                <div class="col-divide-2 mc_self_center mc-center">
                   <a href=""><i class="fas fa-trash-alt"></i></a>
                </div>
            </div>
            <div class="row-divide all_product_cart">
                <div class="col-divide-6">
                    <div class="row-divide">
                        <div class="col-divide-2">
                            <img src="https://stealsneaker.wolfactive.dev/wp-content/uploads/2020/05/zz-ee3707-01-0142-43010-395x395.jpg" alt="">
                        </div>
                        <div class="col-divide-10 name_product">
                            DISNEY MICKEY MOUSE STAN SMITH SHOES (36)
                        </div>
                    </div>
                </div>
                <div class="col-divide-2 mc_self_center mc-center">
                    <input class="number_product" type="number" min="1" max="5">
                </div>
                <div class="col-divide-2 mc_self_center mc-center">
                    <p>6.380.000</p>
                </div>
                <div class="col-divide-2 mc_self_center mc-center">
                    <a href=""><i class="fas fa-trash-alt"></i></a>
                </div>
            </div>
            <div class="result_price">
                <p><i class="fas fa-dollar-sign"></i>&nbsp;&nbsp;Tổng tiền 9.570.000 VNĐ</p>
            </div>
        </div>

        <div class="produc_pay">
            <h3 class="mc-title-infor">Thông tin thanh toán</h3>
            <form class="row-divide">
                <div class="col-divide-6 mc-mgb-20">
                    <p class="title_infor">Họ và tên</p>
                    <input type="text" name="" class="mc-style-inp" id="" />
                </div>
                <div class="col-divide-6 mc-mgb-20">
                    <p class="title_infor">Điện thoại</p>
                    <input type="text" name="" class="mc-style-inp" id="" />
                </div>
                <div class="col-divide-6 mc-mgb-20">
                    <p class="title_infor">Email</p>
                    <input type="text" name="" class="mc-style-inp" id="" placeholder="you@example.com" />
                </div>
                <div class="col-divide-6 mc-mgb-20">
                    <p class="title_infor">Địa chỉ</p>
                    <input type="text" name="" class="mc-style-inp" id="" />
                </div>
                <div class="col-divide-12 mc-mgb-20">
                    <p class="title_infor">Ghi chú</p>
                    <textarea name="" id="" cols="30" rows="8" class="mc-style-gc"></textarea>
                </div>
                <div class="col-divide-6 mc-mgb-20">
                    <p class="title_infor">Tỉnh/thành phố</p>
                    <select name="" id="" class="mc-style-inp">
                        <option value="">Tỉnh/thành phố</option>
                        <option value="">Tỉnh/thành phố</option>
                        <option value="">Tỉnh/thành phố</option>
                        <option value="">Tỉnh/thành phố</option>
                    </select>
                </div>
                <div class="col-divide-6 mc-mgb-20">
                    <p class="title_infor">Quận huyện</p>
                    <select name="" id="" class="mc-style-inp">
                        <option value="">Quận huyện</option>
                        <option value="">Quận huyện</option>
                        <option value="">Quận huyện</option>
                        <option value="">Quận huyện</option>
                    </select>
                </div>
                <div class="col-divide-12 mc-mgb-20 pp_thanh_toan">
                    <p class="pp-cost">Phương thức thanh toán</p>
                    <input type="radio" id="chuyenkhoan" name="thanhtoan" value="chuyenkhoan">
                    <label for="chuyenkhoan">Chuyển Khoản</label><br>
                    <input type="radio" id="tienmat" name="thanhtoan" value="tienmat">
                    <label for="tienmat">Tiền Mặt</label><br>
                </div>
            </form>
            <button class="submit_tt_cart" id="submitTTCart"><i class="fas fa-shopping-bag"></i>&nbsp;THANH TOÁN</button>
        </div>
    </div>
</section>
<?php
get_footer();
?>
