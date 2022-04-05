@extends('layouts.app')
@section('content')

<body id="body">
    <section class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="content">
                        <h1 class="page-name"><strong />History Cart</h1>
                        <ol class="breadcrumb">
                            <li>Tổng số bills đã thanh toán</li>
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
                    <div class="col-md-8 col-md-offset-2">
                        <div class="block">
                            <div class="product-list">
                                <h3>Áo cưới</h3>
                                <form method="GET">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Số bills</th>
                                                <th>Họ tên</th>
                                                <th>Ghi chú</th>
                                                <th>Thời gian</th>
                                                <th>Xem chi tiết</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($list as $a)
                                            <tr>
                                                <td>
                                                    <div class="product-info">
                                                        <p>{{ $a->id }}</p>
                                                    </div>
                                                </td>
                                                <td>{{ $a->name }}</td>
                                                <td>{{$a->note}}</td>
                                                <td>{{$a->created_at}}</td>
                                                <td>
                                                    <button class="btn btn-danger">
                                                        <a href="{{ route('HistoryCartAoCuoi', ['id' => $a->id]) }}">Xem</a>
                                                    </button>
                                                </td>
                                                </td>
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

    <div class="page-wrapper">
        <div class="cart shopping">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="block">
                            <div class="product-list">
                                <h3>Ảnh cưới</h3>
                                <form method="get">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Số bill</th>
                                                <th>User Name</th>
                                                <th>Ghi chú</th>
                                                <th>Thời gian</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($list2 as $a)
                                            <tr>
                                                <td>
                                                    <div class="product-info">
                                                        <p>{{ $a->id }}</p>
                                                    </div>
                                                </td>
                                                <td>{{ $a->name }}</td>
                                                <td>{{$a->note}}</td>
                                                <td>{{$a->created_at}}</td>
                                                <td>
                                                    <button class="btn btn-danger">
                                                        <a href="{{ route('HistoryCartAnhCuoi', ['id' => $a->id]) }}">Xem</a>
                                                    </button>
                                                </td>
                                                </td>
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