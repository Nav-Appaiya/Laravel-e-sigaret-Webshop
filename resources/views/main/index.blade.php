

@extends('layouts.master')

@section('titel', 'Primera shop')
@section('seotags', 'seotags')

@section('sidebar')
    @parent
@endsection

@section('content')

        <div class="row">
        <div class="col-md-3"><h1>Filter</h1></div>
            @foreach ($products as $product)
                    <div class="col-sm-4 col-md-3">
                        <div class="boxpanel">
                            <img src="{{$product->imageurl}}" class="img-responsive">
                            <div class="caption">
                                <div class="row">
                                    <div class="col-md-6 col-xs-6">
                                        <h4>{!! $product->name !!}</h4>
                                    </div>
                                    <div class="col-md-6 col-xs-6 price">
                                        <h3 class="pull-right"><label>&euro;{{number_format($product->price, 2, '.', ',')}}</label></h3>
                                    </div>
                                </div>
                                <div class="row center-block">
                                    <div class="btn-group cart">
                                        <a href="{{ URL::route('product_detail', $product->id) }}" class="btn btn-info btn-product">
                                            Meer weten <span class="fa fa-question-circle"></span>
                                        </a>
                                    </div>
                                    <div class="btn-group wishlist">
                                        <a href="{{ URL::route('cart.add', $product) }}" class="btn btn-success btn-product" onclick="">
                                            In winkelwagen<span class="fa fa-shopping-cart"></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                @endforeach
        </div>

@endsection

@section('scripts')
    <script>
        $(document).ready( function() {
            $('#myCarousel').carousel({
                interval:   4000
            });

            var clickEvent = false;
            $('#myCarousel').on('click', '.nav a', function() {
                clickEvent = true;
                $('.nav li').removeClass('active');
                $(this).parent().addClass('active');
            }).on('slid.bs.carousel', function(e) {
                if(!clickEvent) {
                    var count = $('.nav').children().length -1;
                    var current = $('.nav li.active');
                    current.removeClass('active').next().addClass('active');
                    var id = parseInt(current.data('slide-to'));
                    if(count == id) {
                        $('.nav li').first().addClass('active');
                    }
                }
                clickEvent = false;
            });
        });
    </script>
@endsection