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
                                <form action="" method="post" class="checkout-form" role="form" enctype="multipart/form-data">
                                    @csrf
                                        <div class="form-group">
                                            <label for="">Tên ảnh</label>
                                            <input name="name" type="text" class="form-control" required/>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Giá:</label>
                                            <input name="price" type="text" class="form-control" required/>
                                        </div>
                                    <div class="form-group">
                                            <label for="">Upload ảnh:</label>
                                            <input name="upload" type="file" class="form-control" required/>
                                            @error('upload')
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