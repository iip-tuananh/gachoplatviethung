@extends('layouts.main.master')
@section('title')
Liên hệ với chúng tôi
@endsection
@section('description')
Liên hệ với chúng tôi
@endsection
@section('image')
{{url(''.$setting->logo)}}
@endsection
@section('css')
<link rel="preload" as="style" type="text/css" href="{{asset('frontend/css/evo-contacts.scss.css')}}" />
<link href="{{asset('frontend/css/evo-contacts.scss.css')}}" rel="stylesheet" type="text/css" />
@endsection
@section('js')
@endsection
@section('content')
<section class="bread-crumb">
	<div class="container">
	<ul class="breadcrumb" itemscope itemtype="https://schema.org/BreadcrumbList">
		<li class="home" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
			<a itemprop="item" href="{{route('home')}}" title="Trang chủ">
				<span itemprop="name">Trang chủ</span>
				<meta itemprop="position" content="1" />
			</a>
		</li>
		<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
			<strong itemprop="name">Liên hệ</strong>
			<meta itemprop="position" content="2" />
		</li>
	</ul>
	</div>
</section>
<div class="container contact page-contacts">
	<div class="row">
	<div class="col-lg-4 col-md-6 col-sm-12">
		<h1 class="title-page">Liên hệ</h1>
		<p class="p-bottom">Để được tư vấn / giải đáp thắc mắc / hợp tác kinh doanh, các bạn có thể chọn một trong những thông tin bên dưới để liên hệ với chúng tôi.</p>
		<div class="contact-box">
			<p><strong>Địa chỉ: </strong>{{$setting->address1}}</p>
			<p><strong>Điện thoại: </strong><a href="tel:{{$setting->phone1}}" title="{{$setting->phone1}}">{{$setting->phone1}}</a></p>
			<p><strong>Email: </strong><a href="mailto:{{$setting->email}}" title="{{$setting->email}}">{{$setting->email}}</a></p>
		</div>
	</div>
	<div class="col-lg-8 col-md-6 col-sm-12">
		{!!$setting->iframe_map!!}
	</div>
	</div>
	<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12">
		<div class="leave-your-message">
			<div class="title">
				Liên hệ với chúng tôi
			</div>
			<form accept-charset="utf-8" action="{{route('postcontact')}}" id="contact" method="post">
				@csrf
				<div class="row">
				<div class="col-sm-4 col-xs-12">
					<fieldset class="form-group">
						<label>Họ và tên<span class="required">*</span></label>
						<input placeholder="Nhập họ và tên" type="text" name="name" id="name" class="form-control  form-control-lg" data-validation-error-msg= "Không được để trống" data-validation="required" required />
					</fieldset>
				</div>
				<div class="col-sm-4 col-xs-12">
					<fieldset class="form-group">
						<label>Email<span class="required">*</span></label>
						<input placeholder="Nhập địa chỉ Email" type="email" name="email" data-validation="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,63}$" data-validation-error-msg= "Email sai định dạng" id="email" class="form-control form-control-lg" required />
					</fieldset>
				</div>
				<div class="col-sm-4 col-xs-12">
					<fieldset class="form-group">
						<label>Điện thoại<span class="required">*</span></label>
						<input placeholder="Nhập số điện thoại" type="tel" name="phone" data-validation-error-msg= "Không được để trống" data-validation="required" id="tel" class="number-phone form-control form-control-lg" required />
					</fieldset>
				</div>
				<div class="col-sm-12 col-xs-12">
					<fieldset class="form-group">
						<label>Nội dung<span class="required">*</span></label>
						<textarea placeholder="Nội dung liên hệ" name="mess" id="comment" class="form-control form-control-lg" rows="5" data-validation-error-msg= "Không được để trống" data-validation="required" required></textarea>
					</fieldset>
					<fieldset class="form-group">
						<button type="submit" class="btn btn-blues btn-style btn-style-active">Gửi tin nhắn</button>
					</fieldset>
				</div>
				</div>
			</form>
		</div>
	</div>
	</div>
</div>
@endsection