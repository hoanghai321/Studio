@extends('layouts.app')
@section('content')
<body>
    <style>
        @media (min-width: 768px) {
            .modal-dialog {
                width: 90%;
                margin: 20px auto;
            }
        }
    </style>
    @foreach($anhcuoi as $a)
    <div class="modal-dialog " role="document">
        <div class="modal-content">
            <div class="modal-body" style="background-color: azure;">
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="modal-image">
                            <img class="img-responsive" src="{{ url('images/AnhCuoi') }}/{{$a->image}}" alt="product-img" />
                        </div>
                    </div>
                    <div class="col-md-5 col-sm-6 col-xs-12" style="margin-bottom: 40px">
                            <h2 class="product-title">{{$a->name}}</h2>
                            <p class="product-price">Giá: {{$a->price}} $</p>
                            <a href="{{ route('AddCartAnhCuoi', ['id'=>$a->id]) }}" class="btn btn-main">Add
                                To Cart</a>
                    </div>
                    @foreach($chitietanhcuoi as $a)
                    <div data-slider-id="1" class="owl-thumbs">
                        <div class="col-md-6">
                            <ul>
                                <li><img src="{{ url('images/AnhCuoi') }}/{{$a->image1}}" /></li>
                                <li><img src="{{ url('images/AlbumAnhCuoi')}}/{{$a->image2}}" /></li>
                                <li><img src="{{ url('images/AlbumAnhCuoi')}}/{{$a->image3}}" /></li>
                            </ul>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    @endforeach
</body>
<footer class="footer section text-center">@include('layouts.user.footer')</footer>
@endsection