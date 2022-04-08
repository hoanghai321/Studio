@extends('layouts.app')
@section('content')

<body id="body">
    <section class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="content">
                        <h1 class="page-name">Checkout</h1>
                        <ol class="breadcrumb">
                            <li><a href="index.html">Home</a></li>
                            <li class="active">checkout</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="page-wrapper">
        <div class="checkout shopping">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="block billing-details">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Hình ảnh</th>
                                        <th>Tên sản phẩm</th>
                                        <th>Giá</th>
                                        <th>SL</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($carts->items as $a)
                                    <tr>
                                        <td>
                                            <div class="product-info">
                                                <img width="80px" src="{{ url('images/AoCuoi') }}/{{ $a['image']}}">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="product-info">
                                                <p>{{ $a['name'] }}</p>
                                            </div>
                                        </td>
                                        <td>{{ $a['price'] }}$</td>
                                        <td>{{$a['quantity']}}</td>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <h4 class="widget-title"><strong />Thông tin thanh toán</h4>
                            <form action="{{ route('submitaocuoi') }}" method="POST" class=" checkout-form" role="form">
                                @csrf
                                <div class="form-group">
                                    <label for="">Họ và tên:</label>
                                    <input name="name" type="text" class="form-control" value="{{  Auth::guard('web')->user()->name }}" />
                                </div>
                                <div class="form-group">
                                    <label for="">Email:</label>
                                    <input name="email" type="text" class="form-control" value="{{  Auth::guard('web')->user()->email }}" />
                                </div>
                                <div class="checkout-country-code clearfix">
                                    <div class="form-group">
                                        <label for="">Liên hệ:</label>
                                        <input name="phone" type="text" class="form-control" value="{{  Auth::guard('web')->user()->phone }}" />
                                    </div>
                                    <div class="form-group">
                                        <label for="">Địa chỉ:</label>
                                        <input name="address" class="form-control" value="{{  Auth::guard('web')->user()->address }}"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="">Ghi chú:</label>
                                    <input name="note" class="form-control" />
                                </div>
                                <input type="submit" style="background-color: red;" class="btn btn-main pull-right" value="Thanh toán" />
                            </form>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="product-checkout-details">
                            <div class="block">
                                <h4 class="widget-title"><strong />Áo Cưới</h4>
                                <ul class="summary-prices">
                                    <li><span>Tổng số lượng:</span> <span class="price">{{$carts->total_quantity()}}</span>
                                    </li>
                                    <li><span>Giao hàng:</span> <span>Miễn phí</span></li>
                                </ul>
                                <div class="summary-total">
                                    <span>Tổng giá</span> <span>{{$carts->total_price()}}$</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
@endsection