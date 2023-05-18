@extends('layouts.frontend')

@section('open_graph')
    <title>Trang chủ - {{ env('APP_NAME') }}</title>
    <meta name="robots" content="index" />
    <meta name="description" content="Hoa tươi Hoàng Anh - Shop hoa tươi chuyên nghiệp tại Bình Dương. Chúng tôi luôn cung cấp cho khách hàng những bó hoa tươi, đẹp và ý nghĩa, cho mọi dịp trong năm." />
    <link rel="canonical" href="{{ route('home') }}" />
    <meta property="og:title" content="Trang chủ - {{ env('APP_NAME') }}" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ route('home') }}" />
    <meta property="og:image" content="{{ Vite::image('sc_banner.jpg') }}" />
    <meta property="og:image:width" content="1260" />
    <meta property="og:image:height" content="630" />
    <meta property="og:site_name" content="Hoa tươi Hoàng Anh" />
    <meta property="og:description" content="Hoa tươi Hoàng Anh - Shop hoa tươi chuyên nghiệp tại Bình Dương. Chúng tôi luôn cung cấp cho khách hàng những bó hoa tươi, đẹp và ý nghĩa, cho mọi dịp trong năm." />
    <meta property="og:locale" content="vi_VN" />
@endsection

@section('styles')
    <style>
        #spacing {
            display: none;
        }
    </style>
@endsection

@section('content')
    <!-- Slider Section -->
    <section id="home_slider">
        <div class="item">
            <img src="{{ Vite::image('sliders/slider.jpg') }}" width="100%" height="100%" alt="Slider" />

            <div class="info">
                <h2>Áo Cưới Thy Thy</h2>
                <p>Cửa hàng Áo Cưới Thy Thy là địa chỉ chuyên nghiệp và uy tín tại Bình Định, nơi mang đến cho khách hàng những mẫu áo cưới đẹp và theo xu hướng thời trang.</p>
                <p>Hãy đến với chúng tôi để trải nghiệm một ngày trọng đại đáng nhớ và lộng lẫy nhất trong cuộc đời của bạn.</p>

                <a href="{{ route('static.about') }}" class="btn btn-white btn-icon-right">
                    Xem chi tiết
                    <img src="{{ Vite::image('icons/r-right-btn.svg') }}" alt="Phone" width="22px" height="22px">
                </a>
            </div>

            <a href="#home_intro" class="scroll-btn" aria-label="Scroll Button">
                @include('frontend.partials.scroll_btn')
            </a>
        </div>
    </section>

    <!-- Intro Section -->
    <section class="home-section txt-center" id="home_intro">
        <div class="container">
            <div class="txt">
                <h2 class="heading">Áo Cưới Thy Thy</h2>
                <p>Bộ sưu tập áo cưới tại cửa hàng Thy Thy đa dạng với nhiều kiểu dáng và phong cách đa dạng. Khách hàng có thể lựa chọn từ những bộ áo cưới theo phong cách cổ điển, tinh tế đến những thiết kế hiện đại và sáng tạo. Chất liệu cao cấp và đường may tinh tế đảm bảo sự lộng lẫy và sang trọng cho ngày trọng đại của cô dâu.</p>
                <p>Với dịch vụ chuyên nghiệp, đội ngũ nhân viên tận tâm và sự chất lượng hàng đầu, Áo Cưới Thy Thy tự hào là địa chỉ tin cậy cho cô dâu, phụ dâu và những người tìm kiếm sự hoàn hảo trong bộ trang phục cưới. </p>

                <a href="{{ route('static.about') }}" class="link">Xem thêm <span class="icon">⇝</span></a>
            </div>
        </div>
    </section>

    <!-- Service Section -->
    <section class="home-section" id="home_secvices">
        <div class="container">
            <div class="info">
                <h2 class="heading">Dịch vụ của chúng tôi</h2>
                <p>Shop hoa Hoàng Anh luôn tự hào khi cung cấp những dịch vụ chất lượng nhất cho quý khách.</p>

                <a class="link txt-right">Xem tất cả dịch vụ <span class="icon">⇝</span></a>
            </div>

            <div class="service-slider">
                <div class="item">
                    <div class="thumb">
                        <img src="{{ Vite::image('services/bridal.png') }}" width="100" height="100" alt="Hoa khai trương">
                    </div>

                    <div class="service-caption">
                        <h3>Hoa khai trương</h3>
                    </div>
                </div>

                <div class="item">
                    <div class="thumb">
                        <img src="{{ Vite::image('services/hoa-tang.jpg') }}" width="100" height="100" alt="Hoa đám tang">
                    </div>

                    <div class="service-caption">
                        <h3>Hoa viếng đám tang</h3>
                    </div>
                </div>

                <div class="item">
                    <div class="thumb">
                        <img src="{{ Vite::image('services/bridal.png') }}" width="100" height="100" alt="Giỏ hoa">
                    </div>

                    <div class="service-caption">
                        <h3>Giỏ hoa</h3>
                    </div>
                </div>

                <div class="item">
                    <div class="thumb">
                        <img src="{{ Vite::image('services/bridal.png') }}" width="100" height="100" alt="Hoa bó">
                    </div>

                    <div class="service-caption">
                        <h3>Hoa bó</h3>
                    </div>
                </div>

                <div class="item">
                    <div class="thumb">
                        <img src="{{ Vite::image('services/bridal.png') }}" width="100" height="100" alt="Lan hồ điệp">
                    </div>

                    <div class="service-caption">
                        <h3>Lan hồ điệp</h3>
                    </div>
                </div>
            </div>

            <div class="clearfix"></div>
        </div>
    </section>

    <!-- News Section -->
    <section class="home-section" id="home_blogs">
        <div class="container">
            <h2 class="heading txt-center">Blogs</h2>
            <p class="small-heading txt-center">Tổng hợp những mẹo, thủ thuật hay, bài viết ý nghĩa hàng ngày dành cho các bạn.</p>

            <div class="blogs">
                <div class="blog">
                    <div class="thumb">
                        <img src="{{ Vite::image('no-image.jpg') }}" width="100" height="100" alt="Top 4 mẫu hoa hồng ngoại">
                    </div>

                    <div class="info">
                        <h3>Top 4 mẫu hoa hồng ngoại - Món quà kỷ niệm tình yêu đầy ngọt ngào</h3>

                        <span class="time">
                            <img src="{{ Vite::image('icons/gr-calendar.svg') }}" alt="Calendar" width="15px" height="15px"> 17-04-2023
                        </span>

                        <span class="viewed">
                            <img src="{{ Vite::image('icons/gr-eye.svg') }}" alt="Eye" width="15px" height="15px"> 2205 lượt xem
                        </span>

                        <p class="excerpt">Bạn đã biết tên 4 loại hồng nhập khẩu luôn nằm trong top best-seller tại Xinh Tươi Online chưa? Vì sao những loại hoa hồng này lại được săn đón nhiều đến vậy ...</p>

                        <a href="#" class="link">Xem bài viết <span class="icon">⇝</span></a>
                    </div>
                </div>

                <div class="blog">
                    <div class="thumb">
                        <img src="{{ Vite::image('no-image.jpg') }}" width="100" height="100" alt="Top 4 mẫu hoa hồng ngoại">
                    </div>

                    <div class="info">
                        <h3>Top 4 mẫu hoa hồng ngoại - Món quà kỷ niệm tình yêu đầy ngọt ngào</h3>

                        <span class="time">
                            <img src="{{ Vite::image('icons/gr-calendar.svg') }}" alt="Calendar" width="15px" height="15px"> 17-04-2023
                        </span>

                        <span class="viewed">
                            <img src="{{ Vite::image('icons/gr-eye.svg') }}" alt="Eye" width="15px" height="15px"> 2205 lượt xem
                        </span>

                        <p class="excerpt">Bạn đã biết tên 4 loại hồng nhập khẩu luôn nằm trong top best-seller tại Xinh Tươi Online chưa? Vì sao những loại hoa hồng này lại được săn đón nhiều đến vậy ...</p>

                        <a href="#" class="link">Xem bài viết <span class="icon">⇝</span></a>
                    </div>
                </div>

                <div class="blog">
                    <div class="thumb">
                        <img src="{{ Vite::image('no-image.jpg') }}" width="100" height="100" alt="Top 4 mẫu hoa hồng ngoại">
                    </div>

                    <div class="info">
                        <h3>Top 4 mẫu hoa hồng ngoại - Món quà kỷ niệm tình yêu đầy ngọt ngào</h3>

                        <span class="time">
                            <img src="{{ Vite::image('icons/gr-calendar.svg') }}" alt="Calendar" width="15px" height="15px"> 17-04-2023
                        </span>

                        <span class="viewed">
                            <img src="{{ Vite::image('icons/gr-eye.svg') }}" alt="Eye" width="15px" height="15px"> 2205 lượt xem
                        </span>

                        <p class="excerpt">Bạn đã biết tên 4 loại hồng nhập khẩu luôn nằm trong top best-seller tại Xinh Tươi Online chưa? Vì sao những loại hoa hồng này lại được săn đón nhiều đến vậy ...</p>

                        <a href="#" class="link">Xem bài viết <span class="icon">⇝</span></a>
                    </div>
                </div>
            </div>

            <div class="clearfix"></div>
        </div>
    </section>

    <!-- Testimonial Section -->
    <section class="home-section txt-center" id="home_testimonial">
        <div class="container">
            <h2 class="heading">Khách hàng nói gì về Hoàng Anh?</h2>
            <p class="small-heading">Bạn không cần nghe chúng tôi nói, nhưng hãy nghe những khách hàng đã tin tưởng sử dụng dịch vụ nói về chúng tôi.</p>

            <div class="testimonial-slider">
                <div class="item">
                    <div class="avatar">
                        <img src="{{ Vite::image('testimonials/girl.png') }}" width="150px" height="150px" alt="Hariwon">
                    </div>

                    <div class="info">
                        <h3>Chị Hoàng Lan</h3>

                        <span class="title">Giáo viên tiểu học</span>

                        <div class="rating">
                            @for ($i = 0; $i < 5; $i++)
                                <img src="{{ Vite::image('icons/star.svg') }}" width="20px" height="20px" alt="Star" />
                            @endfor
                        </div>
                    </div>

                    <div class="description">
                        <p>Rất thích và hài lòng với dịch vụ của shop, hoa rất đẹp. Sẽ tiếp tục ủng hộ shop trong tương lai. Chúc shop buôn may bán đắt.</p>
                    </div>
                </div>

                <div class="item">
                    <div class="avatar">
                        <img src="{{ Vite::image('testimonials/girl.png') }}" width="150px" height="150px" alt="Nancy">
                    </div>

                    <div class="info">
                        <h3>Anh Nguyễn Trung Tiến</h3>

                        <span class="title">Nhân viên văn phòng</span>

                        <div class="rating">
                            @for ($i = 0; $i < 5; $i++)
                                <img src="{{ Vite::image('icons/star.svg') }}" width="20px" height="20px" alt="Star" />
                            @endfor
                        </div>
                    </div>

                    <div class="description">
                        <p>Mình đã đặt một bó hoa cho mẹ tại shop và mẹ rất vui khi nhận được. 1 bó hoa đẹp và ý nghĩa cho ngày 8/3. Mình sẽ giới thiệu shop cho mọi người.</p>
                    </div>
                </div>

                <div class="item">
                    <div class="avatar">
                        <img src="{{ Vite::image('testimonials/girl.png') }}" width="150px" height="150px" alt="Lan Ngoc">
                    </div>

                    <div class="info">
                        <h3>Anh Lê Minh</h3>

                        <span class="title">Lập trình viên</span>

                        <div class="rating">
                            @for ($i = 0; $i < 5; $i++)
                                <img src="{{ Vite::image('icons/star.svg') }}" width="20px" height="20px" alt="Star" />
                            @endfor
                        </div>
                    </div>

                    <div class="description">
                        <p>Mình đặt hoa cho người yêu tại shop và cô ấy rất thích nó. Cảm ơn shop vì bó hoa tuyệt vời và giao hàng đúng thời gian.</p>
                    </div>
                </div>

                <div class="item">
                    <div class="avatar">
                        <img src="{{ Vite::image('testimonials/girl.png') }}" width="150px" height="150px" alt="Son Shine">
                    </div>

                    <div class="info">
                        <h3>Chị Nguyễn Hoài Thanh</h3>

                        <span class="title">Diễn viên tự do</span>

                        <div class="rating">
                            @for ($i = 0; $i < 5; $i++)
                                <img src="{{ Vite::image('icons/star.svg') }}" width="20px" height="20px" alt="Star" />
                            @endfor
                        </div>
                    </div>

                    <div class="description">
                        <p>Hoa đẹp, giao nhanh chóng, 10 điểm cho shop. Sẽ ủng hộ shop nhiều lần nữa.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="home-section" id="home_features">
        <div class="container">
            <h2 class="heading txt-center">Hãy tin tưởng chúng tôi</h2>
            <p class="small-heading txt-center">Chúng tôi cam kết luôn mang đến những trải nghiệm dịch vụ tốt nhất cho quý khách.</p>

            <div class="features">
                <div class="feature">
                    <img src="{{ Vite::image('features/quick-delivery.png') }}" width="64px" height="64px" alt="Giao dịch tiện lợi">
                    <h3>Giao dịch tiện lợi</h3>
                    <p>Giao hàng nhanh chóng, đảm bảo mọi quyền lợi của quý khách.</p>
                </div>

                <div class="feature">
                    <img src="{{ Vite::image('features/support-247.png') }}" width="64px" height="64px" alt="Phục vụ 24/7">
                    <h3>Phục vụ 24/7</h3>
                    <p>Mọi thắc mắc của quý khách xin vui lòng liên hệ: <a href="tel:0988062579"> 0988 062 579</a> - <a href="tel:0368192868">0368 192 868</a></p>
                </div>

                <div class="feature">
                    <img src="{{ Vite::image('features/free-ship.png') }}" width="64px" height="64px" alt="Giao hàng toàn quốc">
                    <h3>Giao hàng toàn quốc</h3>
                    <p>Chúng tôi nhận giao hàng trên toàn quốc, Miễn phí giao hàng trong nội thành.</p>
                </div>

                <div class="feature">
                    <img src="{{ Vite::image('features/warranty.png') }}" width="64px" height="64px" alt="Đảm bảo chất lượng">
                    <h3>Đảm bảo chất lượng</h3>
                    <p>Chúng tôi cam kết hoa luôn tươi khi đến tay quý khách.</p>
                </div>
            </div>

            <div class="clearfix"></div>
        </div>
    </section>
@endsection
