@extends('layouts.appAdmin')
@section('content')

<body id="body">
    <div class="page-wrapper">
        <div class="cart shopping">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="block">
                            <div class="product-list">
                                <h3>Ảnh cưới</h3>
                                <form method="GET">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Số bill</th>
                                                <th>Hình ảnh</th>
                                                <th>Tên áo cưới</th>
                                                <th>Giá</th>
                                                <th>SL</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($BillsAnhCuoiDetail as $a)
                                            <tr>
                                                <td>{{ $a->billsanhcuoi_id }}</td>
                                                <td>
                                                    <div class="product-info">
                                                        <img width="100px" src="{{ $a->image }}" />
                                                    </div>
                                                </td>
                                                <td>{{$a->name}}</td>
                                                <td>{{$a->price}}$</td>
                                                <td>{{$a->quantity}}</td>
                                                <td>
                                                    <button class="btn btn-danger">
                                                        <a href="{{ route('DeleteBillsAnhCuoiDetail', ['id' => $a->id]) }}">Xoá</a>
                                                    </button>
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