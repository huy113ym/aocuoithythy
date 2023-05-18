<div id="topbar">
	<div class="container">
		<div class="topbar">
			<div class="left-content">
				<a href="#">
					<img src="{{ Vite::image('icons/location.svg') }}" width="18px" height="18px" alt="Location">Số 5 - Cát Hanh, Phù Cát, Bình Định
				</a>
			</div>

			<div class="right-content">
				@include('frontend.partials.translate')
				@include('frontend.partials.search')
			</div>
		</div>
	</div>
</div>

<!-- PC Menu -->
<div class="pc-nav" id="pc_nav">
	<div class="container">
		<div class="header-inner">
			<div class="site-info">
				<a href="{{ route('home') }}">
					<img src="{{ Vite::image('logo.png') }}" width="250px" height="50px" alt="{{ env('APP_NAME') }}">
				</a>
			</div>

			@include('frontend.partials.main_nav')

			<div class="contact-section">
				<a href="tel:0988062579" class="btn btn-default btn-icon-left">
					<img src="{{ Vite::image('icons/w-phone.svg') }}" alt="Phone" width="22px" height="22px">
					0988 062 579
				</a>
			</div>
		</div>
	</div>
</div>

<!-- Mobile Menu -->
<div class="toggle-btn" id="show_menu">
	<span class="line first"></span>
	<span class="line second"></span>
	<span class="line last"></span>
</div>

<div class="mobile-nav" id="mobile_nav">
	<span class="close-menu" id="close_menu">×</span>

	<div class="site-info">
		<a href="{{ route('home') }}">
			<img src="{{ Vite::image('logo.png') }}" width="250px" height="50px" alt="{{ env('APP_NAME') }}">
		</a>
	</div>

	@include('frontend.partials.main_nav')

	<span>Hotline:</span> <a href="tel:0988062579" class="link"> <b>0988 062 579</b></a> - <a href="tel:0368192868" class="link"> <b>0368 192 868</b></a>

	@include('frontend.partials.search')
</div>
