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
                            <h2 style="text-align: center; margin-bottom: 50px;"><strong/>Chỉnh sửa thông tin tài khoản người dùng</h2>
                                <form action="" method="post" class=" checkout-form" role="form">
                                    @foreach($users_id as $a)
                                    @csrf
                                    <div class="checkout-country-code clearfix">
                                        <div class="form-group">
                                            <label for="">Họ và tên:</label>
                                            <input name="name" type="text" class="form-control" value="{{  $a->name }}" />
                                        </div>
                                        <div class="form-group">
                                            <label for="">Email:</label>
                                            <input name="email" type="text" class="form-control" value="{{  $a->email }}" />
                                        </div>
                                    </div>
                                    <div class="checkout-country-code clearfix">
                                        <div class="form-group">
                                            <label for="">SĐT:</label>
                                            <input name="phone" type="text" class="form-control" value="{{  $a->phone }}" />
                                        </div>
                                        <div class="form-group">
                                            <label for="">Địa chỉ:</label>
                                            <input name="address" class="form-control" value="{{  $a->address }}" />
                                        </div>
                                    </div>
                                    <div class="form-group">

                                        <select name="role" class="form-control" value="{{  $a->role }}">
                                            @if($a->role == 1)
                                            <option value="1">User</option>
                                            <option value="2">Admin</option>
                                            @endif
                                            @if($a->role == 2)
                                            <option value="2">Admin</option>
                                            <option value="1">User</option>
                                            @endif
                                        </select>
                                    </div>
                                    <input type="submit" style="background-color: red;" class="btn btn-main pull-right" value="Hoàn tất" />
                                    @endforeach
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