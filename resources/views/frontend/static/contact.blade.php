@extends('layouts.frontend')

@section('title', 'Liên hệ với chúng tôi')

@section('breadcrumb')
    <span>Liên hệ với chúng tôi</span>
@endsection

@section('content')
	<div class="container">
		<div class="contact-page">
			<h2>Liên hệ</h2>
			<p>Nếu có bất cứ thắc mắc nào, vui lòng để lại lời nhắn vào form bên dưới.<br>Quản trị viên sẽ phản hồi lại sớm.</p>

			<form method="POST" action="" id="contact_form" autocomplete="OFF">

				{{ csrf_field() }}

				<div class="form-group">
					<input type="text" name="name" placeholder="Họ tên">
					<div class="error name-error"></div>
				</div>

				<div class="form-group">
					<input type="tel" name="phone" placeholder="Số điện thoại">
					<div class="error phone-error"></div>
				</div>

				<div class="form-group">
					<input type="Email" name="email" placeholder="Địa chỉ Email">
				</div>

				<div class="form-group">
					<textarea name="content" placeholder="Nội dung phản hồi"></textarea>
					<div class="error content-error"></div>
				</div>

				<div class="form-group">
					<button class="btn btn-default" disabled>Gửi phản hồi</button>
				</div>
			</form>

			<div id="contact_response"></div>
		</div>
	</div>
@endsection

@section('scripts')
<script type="text/javascript">
	$("#contact_form").submit(function(e) {
		e.preventDefault();

		var name = $("input[name=name]").val();
		var phone = $("input[name=phone]").val();
		var email = $("input[name=email]").val();
		var content = $("textarea[name=content]").val();

		$(".error").html("");
		$("#contact_response").html("");

		if(name.length < 2) {
			$(".name-error").html("Vui lòng nhập họ tên đầy đủ.");
		}

		if(phone.length < 10) {
			$(".phone-error").html("Vui lòng nhập chính xác số điện thoại.");
		}

		if(content.length < 50) {
			$(".content-error").html("Vui lòng nhập ít nhất 50 ký tự.");
		}

		// Send message
		if (name.length >= 2 && phone.length >= 10 && content.length >= 50) {
			$("#contact_response").html("Vui lòng chờ...");

			$.ajaxSetup({
				headers: {
					'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				}
			});

			$.ajax({
				type: "POST",
				url: "#",
				data: {
					name : name,
					phone : phone,
					email : email,
					content : content
				},
				success: function(data) {
					$("#contact_form")[0].reset();
					$("#contact_response").html(data);
				}
			});
		}
	});
</script>
@endsection