<form class="search-form" method="GET" action="{{ route('blog.list') }}" role="search" autocomplete="OFF">
	<input type="search" name="keyword" placeholder="Nhập từ khóa cần tìm..." value="" aria-label="Tìm kiếm">

	<button type="submit">
		<img src="{{ Vite::image('icons/r-search.svg') }}" alt="Tìm kiếm" width="20px" height="20px">
	</button>
</form>
