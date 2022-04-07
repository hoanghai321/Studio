@extends('layouts.appAdmin')
@section('content')

<body>
    <div class="page-wrapper">
        <div class="cart shopping">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-2">
                        <div class="block">
                            <div class="product-list">
                            <h2 style="text-align: center; margin-bottom: 50px;"><strong/>THÊM MỚI ÁO CƯỚI</h2>
                                <form action="" method="post" class="checkout-form" role="form">
                                    @csrf
                                    <div class="checkout-country-code clearfix">
                                        <div class="form-group">
                                            <label for="">Họ và tên:</label>
                                            <input name="name" type="text" class="form-control" required/>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Email:</label>
                                            <input name="email" type="email" class="form-control" required/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                            <label for="">Mật khẩu:</label>
                                            <input id="password" name="password" type="password" class="form-control" required/>
                                        </div>
                                    <div class="checkout-country-code clearfix">
                                        <div class="form-group">
                                            <label for="">SĐT:</label>
                                            <input name="phone" type="tel" class="form-control" required/>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Địa chỉ:</label>
                                            <input name="address" class="form-control" required/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <select name="role" class="form-control">
                                            <option value="1">User</option>
                                            <option value="2">Admin</option>
                                        </select>
                                    </div>
                                    <input type="submit" style="background-color: red;" class="btn btn-main pull-right" value="Thêm" />
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
@endsection