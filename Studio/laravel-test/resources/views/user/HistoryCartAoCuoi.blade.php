@extends('layouts.app')
@section('content')

<body id="body">
    <section class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="content">
                        <h1 class="page-name">History Cart Detail</h1>
                        <ol class="breadcrumb">
                            <li><a href="index.html">Home</a></li>
                            <li class="active">cart</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="page-wrapper">
        <div class="cart shopping">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-2">
                        <div class="block">
                            <div class="product-list">
                                <h3>Áo cưới</h3>
                                <form method="GET">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Số bill</th>
                                                <th>Hình ảnh</th>
                                                <th>Tên áo cưới</th>
                                                <th>Giá</th>
                                                <th>SL</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($list as $a)
                                            <tr>
                                                <td>{{ $a->billsaocuoi_id }}</td>
                                                <td>
                                                    <div class="product-info">
                                                        <img width="100px" src="{{ $a->image }}" />
                                                    </div>
                                                </td>
                                                <td>{{$a->name}}</td>
                                                <td>{{$a->price}}$</td>
                                                <td>{{$a->quantity}}</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
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