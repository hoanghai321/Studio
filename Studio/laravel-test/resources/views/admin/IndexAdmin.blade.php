@extends('layouts.appAdmin')
@section('content')

<body>
    <div class="page-wrapper">
        <div class="cart shopping">
            <div class="container">
                <div class="row">
                    <div class="col-md-11 col-md-offset-2">
                        <div class="block">
                            <div class="product-list">

                                <h2 style="text-align: center; margin-bottom: 50px;"><strong />Quản lý tài khoản người dùng</h2>
                                <button style="margin-bottom: 30px;" class="btn btn-danger"><svg xmlns="http://www.w3.org/2000/svg" width="20px" fill="currentColor" class="bi bi-person-plus-fill" viewBox="0 0 16 16">
                                        <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                                        <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z" />
                                    </svg><a href="{{ route('AddUsers') }}">Thêm tài khoản mới</a></button>
                                <form method="post">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Email</th>
                                                <th>Tên</th>
                                                <th>SĐT</th>
                                                <th>Địa chỉ</th>
                                                <th>Trạng thái</th>
                                                <th></th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($users as $a)
                                            <tr>
                                                <td>{{ $a->email }}</td>
                                                <td>{{ $a->name }}</td>
                                                <td>{{ $a->phone }}</td>
                                                <td>{{ $a->address }}</td>
                                                <td>
                                                    @if( $a->role == 2)
                                                    <option value="Admin">Admin</option>
                                                    @else
                                                    <option value="User">User</option>
                                                    @endif
                                                </td>
                                                <td><a class="btn btn-danger" href="{{ route('EditInfoUsers', ['id' => $a->id]) }}">Sửa</a></td>
                                                <td><a class="btn btn-danger" href="{{ route('DeleteInfoUsers', ['id' => $a->id]) }}">Xoá</a></td>
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