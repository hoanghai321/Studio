@extends('layouts.app')
@section('content')

<body id="body">
    <section class="products section bg-gray">
        <div class="container">
            <div class="row">
                <div class="title text-center">
                    <h1><strong />Ảnh cưới AVIATO</h1>
                </div>
            </div>
            <div class="row">
                @foreach($anhcuoi as $a)
                <div class="col-md-4">
                    <div class="product-item">
                        <div class="product-thumb">
                            <span class="bage">Hot</span> <img class="img-responsive" src="{{ $a->image }}" alt="product-img" />
                            <div class="preview-meta">
                                <ul>
                                    <li data-toggle="modal" data-target="#product-modal"><a href="{{ route('anhcuoiById', ['id'=>$a->id]) }}"><i class="tf-ion-ios-search-strong"></i></a></li>
                                    <li><a href="#!"><i class="tf-ion-ios-heart"></i></a></li>
                                    <li>
                                        <a href="{{ route('AddCartAnhCuoi', ['id'=>$a->id]) }}">
                                            <i class="tf-ion-android-cart"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-content">
                            <h4>
                                <a>{{ $a->name }}</a>
                            </h4>
                            <p class="price">Giá: {{ $a->price }} $</p>
                        </div>
                    </div>
                </div>
                @endforeach
                <div style="text-align: center;">
                    {{ $anhcuoi->links() }}
                </div>
            </div>
        </div>
    </section>
</body>
<footer class="footer section text-center">@include('layouts.user.footer')</footer>
@endsection