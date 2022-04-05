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
                                                <th>Số bills</th>
                                                <th>Họ tên</th>
                                                <th>Ghi chú</th>
                                                <th>Thời gian</th>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($BillsAnhCuoi as $a)
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
                                                        <a href="{{ route('AdminBillsAnhCuoiDetail', ['id'=>$a->id]) }}">Xem</a>
                                                    </button>
                                                </td>
                                                <td>
                                                    <button class="btn btn-danger">
                                                        <a href="{{ route('DeleteBillsAnhCuoi', ['id' => $a->id]) }}">Xoá</a>
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