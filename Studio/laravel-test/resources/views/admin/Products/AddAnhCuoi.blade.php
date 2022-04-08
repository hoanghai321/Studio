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
                                <h2 style="text-align: center; margin-bottom: 50px;"><strong />THÊM MỚI Ảnh CƯỚI</h2>
                                <form action="" method="post" class="checkout-form" role="form" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label for="">Tên ảnh</label>
                                        <input name="name" type="text" class="form-control" required />
                                    </div>
                                    <div class="form-group">
                                        <label for="">Giá:</label>
                                        <input name="price" type="text" class="form-control" required />
                                    </div>
                                    <div class="form-group">
                                        <label for="">Upload ảnh chính:</label>
                                        <input name="upload0" type="file" class="form-control" required />
                                        @error('upload0')
                                        <small class="text-danger help-block">{{ $message }}</small>
                                        @enderror
                                    </div>

                                    <h3>Thêm ảnh phụ cho ảnh cưới</h3>
                                    <div class="form-group">
                                        <label for="">Ảnh 1:</label>
                                        <input name="upload1" type="file" class="form-control" required />
                                        @error('upload1')
                                        <small class="text-danger help-block">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="">Ảnh 2:</label>
                                        <input name="upload2" type="file" class="form-control" required />
                                        @error('upload2')
                                        <small class="text-danger help-block">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="">Ảnh 3:</label>
                                        <input name="upload3" type="file" class="form-control" required />
                                        @error('upload3')
                                        <small class="text-danger help-block">{{ $message }}</small>
                                        @enderror
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