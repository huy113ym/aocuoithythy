@extends('layouts.frontend')

@section('title', 'Lỗi 404')

@section('breadcrumb')
    <span>Lỗi 404</span>
@endsection

@section('content')
	<div class="container">
		<div class="not-found">
			<img src="{{ Vite::image('404.jpg') }}" width="100" height="100" alt="Lỗi 404">
			<h1>Lỗi 404</h1>

	        <p>Xin lỗi! trang bạn đang cố xem không tồn tại.<p>
	        <p>Vui lòng tìm kiếm bằng từ khóa khác hoặc quay lại trang chủ.</p>

			<a href="{{ route('home') }}" class="link">Trang chủ <span class="icon">⇝</span></a>
	    </div>
	</div>
@endsection