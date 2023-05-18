@extends('layouts.frontend')

@section('title', 'Tin tức')

@section('breadcrumb')
    <span>Tin tức</span>
@endsection

@section('content')
    <div class="container">
        <div class="page-content">
            <h2 class="heading">Tin tức cập nhật</h2>
            <p>Tổng hợp các bài viết chia sẻ về dịch vụ cho thuê áo cưới chuyên nghiệp</p>
            <div class="body">
                <section class="left">
                    <div class="list-post">
                        <article class="post-item">
                            <div class="post-header">
                                <div class="post-author">
                                    <a href="#">
                                        <div class="avatar">
                                            <img src="{{ Vite::image('icons/user.svg') }}" width="26px" height="26px"
                                                alt="{{ env('APP_NAME') }}">
                                        </div>
                                    </a>
                                    <a href="#">
                                        <span>HuyLe</span>
                                    </a>
                                </div>
                                <div class="post-action">
                                    <div class="post-option">
                                        <img src="{{ Vite::image('icons/select.svg') }}" width="18px" height="18px"
                                            alt="select">
                                    </div>
                                </div>
                            </div>
                            <div class="post-body">
                                <div class="post-info">
                                    <a href="{{ route('post.list') }}">
                                        <h3 class="post-title">Top 10 mẫu váy cưới đẹp nhất</h3>
                                    </a>
                                    <p class="post-desc">Những kiểu dáng váy cưới mà bạn cần biết. Hiện nay có rất nhiều sự
                                        phối hợp giữ các chất liệu váy cưới đẹp như ren, lụa, phi bóng và kiểu dáng.</p>
                                    <div class="post-more">
                                        <a href="#">
                                            Áo cưới
                                        </a>
                                        <div class="time">
                                            <img src="{{ Vite::image('icons/oclock.svg') }}" width="16px" height="16px"
                                                alt="">
                                            <span> 2 ngày trước</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="post-thumb">
                                    <a class="img-thumbnail" href="{{ route('post.list') }}">
                                        <img src="{{ Vite::image('sliders/slider.jpg') }}"
                                            alt="Slider" />
                                    </a>
                                </div>
                            </div>
                        </article>
                        <article class="post-item">
                            <div class="post-header">
                                <div class="post-author">
                                    <a href="#">
                                        <div class="avatar">
                                            <img src="{{ Vite::image('icons/user.svg') }}" width="26px" height="26px"
                                                alt="{{ env('APP_NAME') }}">
                                        </div>
                                    </a>
                                    <a href="#">
                                        <span>HuyLe</span>
                                    </a>
                                </div>
                                <div class="post-action">
                                    <div class="post-option">
                                        <img src="{{ Vite::image('icons/select.svg') }}" width="18px" height="18px"
                                            alt="select">
                                    </div>
                                </div>
                            </div>
                            <div class="post-body">
                                <div class="post-info">
                                    <a href="{{ route('post.list') }}">
                                        <h3 class="post-title">Top 10 mẫu váy cưới đẹp nhất</h3>
                                    </a>
                                    <p class="post-desc">Những kiểu dáng váy cưới mà bạn cần biết. Hiện nay có rất nhiều sự
                                        phối hợp giữ các chất liệu váy cưới đẹp như ren, lụa, phi bóng và kiểu dáng.</p>
                                    <div class="post-more">
                                        <a href="#">
                                            Áo cưới
                                        </a>
                                        <div class="time">
                                            <img src="{{ Vite::image('icons/oclock.svg') }}" width="16px" height="16px"
                                                alt="">
                                            <span> 2 ngày trước</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="post-thumb">
                                    <a class="img-thumbnail" href="{{ route('post.list') }}">
                                        <img src="{{ Vite::image('sliders/slider.jpg') }}"
                                            alt="Slider" />
                                    </a>
                                </div>
                            </div>
                        </article>
                        <article class="post-item">
                            <div class="post-header">
                                <div class="post-author">
                                    <a href="#">
                                        <div class="avatar">
                                            <img src="{{ Vite::image('icons/user.svg') }}" width="26px" height="26px"
                                                alt="{{ env('APP_NAME') }}">
                                        </div>
                                    </a>
                                    <a href="#">
                                        <span>HuyLe</span>
                                    </a>
                                </div>
                                <div class="post-action">
                                    <div class="post-option">
                                        <img src="{{ Vite::image('icons/select.svg') }}" width="18px" height="18px"
                                            alt="select">
                                    </div>
                                </div>
                            </div>
                            <div class="post-body">
                                <div class="post-info">
                                    <a href="{{ route('post.list') }}">
                                        <h3 class="post-title">Top 10 mẫu váy cưới đẹp nhất</h3>
                                    </a>
                                    <p class="post-desc">Những kiểu dáng váy cưới mà bạn cần biết. Hiện nay có rất nhiều sự
                                        phối hợp giữ các chất liệu váy cưới đẹp như ren, lụa, phi bóng và kiểu dáng.</p>
                                    <div class="post-more">
                                        <a href="#">
                                            Áo cưới
                                        </a>
                                        <div class="time">
                                            <img src="{{ Vite::image('icons/oclock.svg') }}" width="16px" height="16px"
                                                alt="">
                                            <span> 2 ngày trước</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="post-thumb">
                                    <a class="img-thumbnail" href="{{ route('post.list') }}">
                                        <img src="{{ Vite::image('sliders/slider.jpg') }}"
                                            alt="Slider" />
                                    </a>
                                </div>
                            </div>
                        </article>
                        <article class="post-item">
                            <div class="post-header">
                                <div class="post-author">
                                    <a href="#">
                                        <div class="avatar">
                                            <img src="{{ Vite::image('icons/user.svg') }}" width="26px" height="26px"
                                                alt="{{ env('APP_NAME') }}">
                                        </div>
                                    </a>
                                    <a href="#">
                                        <span>HuyLe</span>
                                    </a>
                                </div>
                                <div class="post-action">
                                    <div class="post-option">
                                        <img src="{{ Vite::image('icons/select.svg') }}" width="18px" height="18px"
                                            alt="select">
                                    </div>
                                </div>
                            </div>
                            <div class="post-body">
                                <div class="post-info">
                                    <a href="{{ route('post.list') }}">
                                        <h3 class="post-title">Top 10 mẫu váy cưới đẹp nhất</h3>
                                    </a>
                                    <p class="post-desc">Những kiểu dáng váy cưới mà bạn cần biết. Hiện nay có rất nhiều sự
                                        phối hợp giữ các chất liệu váy cưới đẹp như ren, lụa, phi bóng và kiểu dáng.</p>
                                    <div class="post-more">
                                        <a href="#">
                                            Áo cưới
                                        </a>
                                        <div class="time">
                                            <img src="{{ Vite::image('icons/oclock.svg') }}" width="16px" height="16px"
                                                alt="">
                                            <span> 2 ngày trước</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="post-thumb">
                                    <a class="img-thumbnail" href="{{ route('post.list') }}">
                                        <img src="{{ Vite::image('sliders/slider.jpg') }}"
                                            alt="Slider" />
                                    </a>
                                </div>
                            </div>
                        </article>
                    </div>

                </section>
                <section class="right">
                    <h3>Album ảnh</h3>
                    <div class="banners sticky">
                        <div class="content">
                            <a class="banner" href="#">
                                <img src="{{ Vite::image('sliders/slider.jpg') }}" alt="">
                            </a>
                            <a class="banner" href="#">
                                <img src="{{ Vite::image('sliders/slider.jpg') }}" alt="">
                            </a>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection
