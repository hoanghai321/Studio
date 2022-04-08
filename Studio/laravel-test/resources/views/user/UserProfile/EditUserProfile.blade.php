@extends('layouts.app')
@section('content')

<body>
    <style>
        h1 {
            font-size: 20px;
            text-align: center;
            margin: 20px 0 20px;
        }

        h1 small {
            display: block;
            font-size: 15px;
            padding-top: 8px;
            color: gray;
        }

        .avatar-upload {
            position: relative;
            max-width: 205px;
            margin: 50px auto;
        }

        .avatar-upload .avatar-edit {
            position: absolute;
            right: 12px;
            z-index: 1;
            top: 10px;
        }

        .avatar-upload .avatar-edit input {
            display: none;
        }

        .avatar-upload .avatar-edit input+label {
            display: inline-block;
            width: 34px;
            height: 34px;
            margin-bottom: 0;
            border-radius: 100%;
            background: #FFFFFF;
            border: 1px solid transparent;
            box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.12);
            cursor: pointer;
            font-weight: normal;
            transition: all 0.2s ease-in-out;
        }

        .avatar-upload .avatar-edit input+label:hover {
            background: #f1f1f1;
            border-color: #d6d6d6;
        }

        .avatar-upload .avatar-edit input+label:after {
            content: "\f040";
            font-family: 'FontAwesome';
            color: #757575;
            position: absolute;
            top: 10px;
            left: 0;
            right: 0;
            text-align: center;
            margin: auto;
        }

        .avatar-upload .avatar-preview {
            width: 192px;
            height: 192px;
            position: relative;
            border-radius: 100%;
            border: 6px solid #F8F8F8;
            box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.1);
        }

        .avatar-upload .avatar-preview>div {
            width: 100%;
            height: 100%;
            border-radius: 100%;
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
        }
    </style>
    <div class="container" style="margin-bottom: 100px;">
        <h1><strong />Hello {{Auth::user()->name}}</h1>
        <form action="{{route('UserProfile')}}" method="POST" class="checkout-form" enctype="multipart/form-data">
            @csrf
            <div class="avatar-upload">
                <div class="avatar-edit">
                    <input type='file' name="image" id="image">
                    <label for="image"></label>
                </div>
                <div class="avatar-preview">
                    <div id="imagePreview" style="background-image: url('../images/AccountImage/{{Auth::user()->image}}');">
                    </div>
                </div>
                @error('image')
                <span role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
                <input style="border-radius: 50px; text-align: center;" type="submit" class="btn btn-main" value="Thay ảnh đại diện" />
            </div>

        </form>
    </div>
    <div class="container" style="margin-bottom: 100px;">
        <form action="{{route('UserProfile2')}}" method="POST" class="checkout-form" enctype="multipart/form-data">
            @csrf
            <div class="checkout-country-code clearfix">
                <div class="form-group">
                    <label for="name">Họ và tên:</label>
                    <input name="name" type="text" class="form-control" required />
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input name="email" type="email" class="form-control" required />
                </div>
            </div>
            <div class="checkout-country-code clearfix">
                <div class="form-group">
                    <label for="phone">SĐT:</label>
                    <input name="phone" type="tel" class="form-control" required />
                </div>
                <div class="form-group">
                    <label for="address">Địa chỉ:</label>
                    <input name="address" class="form-control" required />
                </div>
            </div>
            <input type="submit" style="border-radius: 50px;" class="btn btn-main pull-right" value="Cập nhật" />
        </form>
    </div>
</body>
@endsection