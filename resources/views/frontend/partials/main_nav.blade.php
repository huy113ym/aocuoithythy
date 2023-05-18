<div class="nav-section">
	<ul>
		<li class="item {{ (request()->is('/')) ? 'active' : '' }}">
			<a href="{{ route('home') }}">Trang chủ</a>
		</li>

		<li class="item {{ (request()->is('thong-tin')) ? 'active' : '' }}">
			<a href="{{ route('static.about') }}">Thông tin</a>
		</li>

		<li class="item {{ (request()->is('album-anh')) ? 'active' : '' }}">
			<a href="{{ route('gallery.list') }}">Album ảnh</a>
		</li>

		<li class="item {{ (request()->is('tin-tuc')) ? 'active' : '' }}">
			<a href="{{ route('blog.list') }}">Blogs</a>
		</li>

		<li class="item {{ (request()->is('lien-he')) ? 'active' : '' }}">
			<a href="{{ route('static.contact') }}">Liên hệ</a>
		</li>
	</ul>
</div>