<!-- Footer content -->
<div class="footer-content">
    <div class="container">
        <div class="footer-widgets">
            <div class="footer-widget first">
                <h2 class="widget-title">Shop hoa Hoàng Anh</h2>

                <p>Thiết kế hoa tươi chuyên nghiệp, nhận thiết kế hoa theo yêu cầu.</p>
                <p>Chuyên hoa khai trương, hoa sinh nhật, hoa đám tang.</p>
                <p>Hoa cô dâu, trang trí xe hoa, cổng cưới.</p>
                <p>Kết tráp ăn hỏi, trầu cau, trái cây rồng phụng.</p>
                <p>Chuyên sỉ hoa sáp, hoa giấy số lượng lớn.</p>
                <br>
                <p><b>Giờ làm việc: </b>5:00 - 22:00 mỗi ngày</p>
                <i>(Cả ngày lễ và chủ nhật)</i>
            </div>

            <div class="footer-widget second">
                <h2 class="widget-title">Thông tin</h2>

                <ul class="footer-menu">
                    <li>
                        <a href="{{ route('static.about') }}">Thông tin</a>
                    </li>
                    <li>
                        <a href="{{ route('static.policy') }}">Chính sách bảo mật</a>
                    </li>
                    <li>
                        <a href="{{ route('static.privacy') }}">Điều khoản & Dịch vụ</a>
                    </li>
                    <li>
                        <a href="{{ route('static.contact') }}">Liên hệ</a>
                    </li>
                    <li>
                        <a href="{{ route('blog.list') }}">Blogs</a>
                    </li>
                </ul>
            </div>

            <div class="footer-widget last">
                <h2 class="widget-title">Liên hệ</h2>

                <p><b>Địa chỉ:</b>  18/11 Nguyễn Thị Minh Khai, Khu Phố Tân Phú 1, P. Tân Bình, TP. Dĩ An, T. Bình Dương</p>
                <p><b>Hotline:</b><a href="tel:0988062579"> 0988 062 579</a> - <a href="tel:0368192868">0368 192 868</a></p>
                <p><b>Email:</b> <a href="hoatuoihoanganh2019@gmail.com">hoatuoihoanganh2019@gmail.com</a></p>
                <br>
                <ul class="social-icons">
                    <li class="zalo">
						<a href="https://zalo.me/hoatuoihoanganh" target="_blank">
							<img src="{{ Vite::image('icons/zalo.svg') }}" width="34px" height="34px" alt="Zalo">
						</a>
					</li>

                    <li class="facebook">
						<a href="https://www.facebook.com/hanh.hoang.54966834" target="_blank">
							<img src="{{ Vite::image('icons/facebook.svg') }}" width="34px" height="34px" alt="Facebook">
						</a>
					</li>
				</ul>
            </div>
        </div>
    </div>
</div>

<!-- Copyright -->
<div class="copyright">
    <div class="container">
        <div class="left">
            <p>{{ date("Y") }} - Copyright © <a href="{{ route('home') }}">{{ env("APP_NAME") }}</a> - Designed and Developed by <a href="https://tezh.net/" target="_blank">Tezh</a></p>
        </div>

        <div class="right">
            <img src="{{ Vite::image('payment.jpg') }}" width="100%" height="100%" alt="Thanh toán">
        </div>

        <div class="clearfix"></div>
    </div>
</div>

<!-- Back to Top -->
<div id="back_top" class="hidden txt-center">
    <img src="{{ Vite::image('icons/w-top.svg') }}" width="24px" height="24px" alt="Top">
</div>
