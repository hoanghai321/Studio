@extends('layouts.app')
@section('content')
<header>@include('layouts.user.header2')</header>

<body id="body">
	<section class="product-category section">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="title text-center">
						<h1><strong />THOẢ SỨC LỰA CHỌN VỚI AVIATO STUDIO</h1>
					</div>
				</div>
				<div class="col-md-4">
					<h3 style="text-align: center;"><strong />Áo Cưới</h3>
					<div class="category-box category-box-2">
						<a href="/aocuoi"> <img src="/images/2.jpg">
						</a>
					</div>
				</div>
				<div class="col-md-4">
					<h3 style="text-align: center;"><strong />Ảnh Cưới</h3>
					<div class="category-box category-box-2">
						<a href="/anhcuoi"> <img src="/images/AnhCuoi/1.jpg" />
						</a>
					</div>
				</div>
				<div class="col-md-4">
					<h3 style="text-align: center;"><strong />Mẫu váy phụ dâu</h3>
					<div class="category-box category-box-2">
						<a href="#"> <img src="/images/AnhCuoi/4.jpg" />
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	@include('layouts.user.between')
	<section class="products section bg-gray">
		<div class="container">
			<div class="row">
				<div class="title text-center">
					<h1><strong />Những mẫu nổi bật nhất AVIATO STUDIO</h1>
				</div>
			</div>
			<div class="row">
				@foreach($aocuoi as $aocuoi)
				<div class="col-md-4">
					<div class="product-item">
						<div class="product-thumb">
							<span class="bage">Hot</span> <img class="img-responsive" src="{{ $aocuoi->image }}" alt="product-img" />
							<div class="preview-meta">
								<ul>
									<li data-toggle="modal" data-target="#product-modal"><a href="{{ route('aocuoiById', ['id'=>$aocuoi->id]) }}"><i class="tf-ion-ios-search-strong"></i></a></li>
									<li><a href="#!"><i class="tf-ion-ios-heart"></i></a></li>
									<li><a href="{{ route('AddCartAoCuoi', ['id' => $aocuoi->id]) }}">
											<i class="tf-ion-android-cart"></i>
										</a></li>
								</ul>
							</div>
						</div>
						<div class="product-content">
							<h4>
								<a>{{ $aocuoi->name }}</a>
							</h4>
							<p class="price">Giá: {{ $aocuoi->price }} $</p>
						</div>
					</div>
				</div>
				@endforeach

				@foreach($anhcuoi as $anhcuoi)
				<div class="col-md-4">
					<div class="product-item">
						<div class="product-thumb">
							<span class="bage">Hot</span> <img class="img-responsive" src="{{ $anhcuoi->image }}" alt="product-img" />
							<div class="preview-meta">
								<ul>
									<li data-toggle="modal" data-target="#product-modal"><a href="{{ route('anhcuoiById', ['id'=>$anhcuoi->id]) }}"><i class="tf-ion-ios-search-strong"></i></a></li>
									<li><a href="#!"><i class="tf-ion-ios-heart"></i></a></li>
									<li><a href="{{ route('AddCartAnhCuoi', ['id' => $anhcuoi->id]) }}">
											<i class="tf-ion-android-cart"></i>
										</a></li>
								</ul>
							</div>
						</div>
						<div class="product-content">
							<h4>
								<a>{{ $anhcuoi->name }}</a>
							</h4>
							<p class="price">Giá: {{ $anhcuoi->price }} $</p>
						</div>
					</div>
				</div>
				@endforeach
			</div>
		</div>
	</section>
</body>
<footer class="footer section text-center">@include('layouts.user.footer')</footer>
@endsection