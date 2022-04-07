@extends('layouts.appAdmin')
@section('content')

<body>
    <style>
        .thumbnail {
            display: inline-block;
            width: 300px;
            height: auto;
            border: 1px solid #e5e5e5;
            position: relative;
        }

        .thumbnail:hover {
            filter: blur(.4rem) brightness(100%);
            transition: all .5s;
        }

        .button {
            position: absolute;
            width: 340px;
            left: 0;
            top: 200px;
            text-align: center;
            opacity: 0;
            transition: opacity .35s ease;
        }

        .button a {
            width: 200px;
            padding: 12px 48px;
            text-align: center;
            color: white;
            border: solid 5px tomato;
            z-index: 1;
        }

        .container:hover .button {
            opacity: 1;
        }
    </style>

    <div class="page-wrapper">
        <div class="cart shopping">
            <div class="container">
                <div class="col-md-12 col-md-offset-2">
                    <div style="margin-right: 300px;" class="col-md-3">
                        <div class="thumbnail">
                            <img src="/images/1.jpg" alt="">
                            <div class="overlay"></div>
                        </div>
                        <div class="button"><a href="{{ route('AddAoCuoi') }}"><i class="fa-solid fa-square-plus icon"></i><strong/>Thêm áo cưới </a></div>
                    </div>

                    <div class="col-md-3">
                        <div class="thumbnail">
                            <img src="/images/AnhCuoi/5.jpg" alt="">
                            <div class="overlay"></div>
                        </div>
                        <div class="button"><a href="{{ route('AddAnhCuoi') }}"><i class="fa-solid fa-square-plus icon"></i><strong/>Thêm ảnh cưới </a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
@endsection